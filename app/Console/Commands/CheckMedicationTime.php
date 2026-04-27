<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Medication;
use App\Notifications\MedicationReminder;
use Carbon\Carbon;

class CheckMedicationTime extends Command
{
    protected $signature = 'medication:check';
    protected $description = 'Check medications that need to be taken now';

    public function handle()
    {
        $now = Carbon::now('Africa/Casablanca');
        $this->info("Checking at: " . $now->format('H:i'));

        $medications = Medication::all();
        
        foreach ($medications as $medication) {
            if ($this->isItTimeForDose($medication, $now)) {
                
                $kid = $medication->kid;
                if (!$kid) {
                    $this->error("X - Medication [{$medication->name}] has no Kid!");
                    continue;
                }

                $user = $kid->user;
                if (!$user) {
                    $this->error("X - Kid [{$kid->name}] has no Parent (User)!");
                    continue;
                }

                try {
                    $user->notify(new MedicationReminder($medication));
                    $this->info("✔ SUCCESS: Notification sent to User ID: {$user->id} ({$user->name})");
                } catch (\Exception $e) {
                    $this->error("X - Error sending: " . $e->getMessage());
                }
            } else {
                $this->line("Skipping {$medication->name} (Not time)");
            }
        }
    }

    private function isItTimeForDose($medication, $now)
    {
        $firstDose = Carbon::parse($medication->first_dose_time, 'Africa/Casablanca');
        $interval = (int) $medication->interval_hours;

        if ($now->format('H:i') === $firstDose->format('H:i')) {
            return true;
        }

        $diffInHours = $firstDose->diffInHours($now);
        
        return ($diffInHours > 0 && 
                $diffInHours % $interval === 0 && 
                $now->format('i') === $firstDose->format('i'));
    }
}