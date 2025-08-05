<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
{
    // Run every day at 8:05 PM
    $schedule->command('stats:archive')->dailyAt('20:05');
}
    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {   
        $this->load(__DIR__.'/Commands');
        require base_path('routes/console.php');
    }
}
