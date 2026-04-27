<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use App\Models\Medication;

class MedicationReminder extends Notification
{
    use Queueable;

    protected $medication;

    public function __construct(Medication $medication)
    {
        $this->medication = $medication;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            'title' => 'Dose de médicament !',
            'message' => "C'est l'heure de donner {$this->medication->name} pour {$this->medication->kid->name}.",
            'medication_id' => $this->medication->id,
        ];
    }
}