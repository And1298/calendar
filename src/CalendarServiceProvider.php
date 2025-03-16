<?php

namespace Calendar;

use Livewire\Livewire;
use Calendar\Livewire\Calendar;
use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Qui registriamo le classi del pacchetto
    }

    public function boot()
    {
        Livewire::component( 'calendar::calendar', Calendar::class );

        $this->loadViewsFrom( __DIR__.'/../Views', 'calendar' );
    }
}