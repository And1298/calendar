<?php

namespace Calendar;

use Livewire\Livewire;
use Illuminate\Support\ServiceProvider;
use Calendar\Http\Livewire\Counter;

class CalendarServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Qui registriamo le classi del pacchetto
    }

    public function boot()
    {
        Livewire::component( 'calendar-counter', Counter::class );

        $this->loadViewsFrom( __DIR__.'/../Views', 'calendar' );
    }
}