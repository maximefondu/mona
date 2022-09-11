<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exemple extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'command:example';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info("Start");
        $this->info("Finish");
    }
}
