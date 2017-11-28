<?php

namespace Bantenprov\YankesInfoKamar\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use File;

class CreateModelCommand extends Command
{

    protected $signature = 'bantenprov:create-model';


    protected $description = 'Create model';

    protected $stubsModel = [
        'models' => [
            'Kelasrawat.stub',
            'Ruangrawat.stub',
            'Tempattidur.stub'
        ]
    ];



    public function __construct()
    {
        parent::__construct();

    }

    protected function modelViewCreate()
    {

        foreach($this->stubsModel['models'] as $stub)
        {
            File::put(base_path('app/').str_replace('stub','php',$stub),File::get(__DIR__.'/../stubs/Models/'.$stub));
        }

    }


    public function handle()
    {
        $this->modelViewCreate();
        $this->info('Create model success');
    }
}
