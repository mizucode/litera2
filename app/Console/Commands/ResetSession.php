<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Session;

class ResetSession extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'session:reset';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears all user sessions';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Clear all sessions from the database
        Session::flush();

        $this->info('All user sessions have been cleared.');
    }
}
