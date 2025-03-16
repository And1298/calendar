<?php

namespace Calendar\Livewire;

use Livewire\Component;
use Carbon\Carbon;

class Calendar extends Component
{
    public $currentMonth;
    public $currentYear;
    public $daysInMonth;
    public $firstDayOfMonth;
    public $weeks;

    public function mount()
    {
        $this->currentMonth = Carbon::now()->month;
        $this->currentYear = Carbon::now()->year;
        $this->generateCalendar();
    }

    public function generateCalendar()
    {
        $date = Carbon::create($this->currentYear, $this->currentMonth, 1);
        $this->daysInMonth = $date->daysInMonth;
        $this->firstDayOfMonth = $date->dayOfWeek;
        $this->weeks = [];

        $day = 1;
        for ($week = 0; $week < 6; $week++) {
            $this->weeks[$week] = [];
            for ($weekday = 0; $weekday < 7; $weekday++) {
                if (($week === 0 && $weekday < $this->firstDayOfMonth) || $day > $this->daysInMonth) {
                    $this->weeks[$week][$weekday] = null;
                } else {
                    $this->weeks[$week][$weekday] = $day;
                    $day++;
                }
            }
        }
    }

    public function prevMonth()
    {
        $this->currentMonth--;
        if ($this->currentMonth < 1) {
            $this->currentMonth = 12;
            $this->currentYear--;
        }
        $this->generateCalendar();
    }

    public function nextMonth()
    {
        $this->currentMonth++;
        if ($this->currentMonth > 12) {
            $this->currentMonth = 1;
            $this->currentYear++;
        }
        $this->generateCalendar();
    }

    public function render()
    {
        return view('livewire.calendar');
    }
}
