<?php namespace Supriyanih\InfoKamar\Console\Commands;

use Illuminate\Console\Command;

/**
 * The InfoKamarCommand class.
 *
 * @package Supriyanih\InfoKamar
 * @author  supriyanih <supriyanih@gmail.com>
 */
class InfoKamarCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'supriyanih:info-kamar';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Supriyanih\InfoKamar package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Supriyanih\InfoKamar package');
    }
}
