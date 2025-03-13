<?php

namespace TuoNomeVendor\Calendar;

use Illuminate\Support\ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Qui registriamo le classi del pacchetto
    }

    public function boot()
    {
        // Qui possiamo caricare viste, rotte, migrazioni, ecc.
    }
}