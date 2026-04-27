<?php

namespace App\Providers;

use App\Models\Vaccine;
use App\Observers\VaccineObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

   public function boot(): void {
    Vaccine::observe(VaccineObserver::class);
   }
}
