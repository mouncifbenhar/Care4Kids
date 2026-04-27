<?php

namespace App\Observers;

use App\Models\Vaccine;
use App\Notifications\VaccineReminder;

class VaccineObserver
{
  public function created($vaccine) {
    $vaccine->kid->user->notify(new VaccineReminder($vaccine));
}
}
