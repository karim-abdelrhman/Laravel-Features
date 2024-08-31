<?php

namespace App\Observers;

use App\Models\CovidCase;
use Illuminate\Support\Facades\Cache;

class CovidCaseObserver
{
    /**
     * Handle the CovidCase "created" event.
     */
    public function created(CovidCase $covidCase): void
    {
        Cache::forget('covid-cases');
    }

    /**
     * Handle the CovidCase "updated" event.
     */
    public function updated(CovidCase $covidCase): void
    {
        //
    }

    /**
     * Handle the CovidCase "deleted" event.
     */
    public function deleted(CovidCase $covidCase): void
    {
        //
    }

    /**
     * Handle the CovidCase "restored" event.
     */
    public function restored(CovidCase $covidCase): void
    {
        //
    }

    /**
     * Handle the CovidCase "force deleted" event.
     */
    public function forceDeleted(CovidCase $covidCase): void
    {
        //
    }
}
