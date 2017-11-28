<?php
namespace Bantenprov\YankesInfoKamar\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use File;

class CreateViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:create-view {extends=layout.app : extend to }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create view interface';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $stubsKelas = [
        'kelas' => [
            'index.blade.stub',
            'show.blade.stub',
            'create.blade.stub',
            'edit.blade.stub'
        ]
    ];

    protected $stubsRuang = [
        'ruang' => [
          'index.blade.stub',
          'show.blade.stub',
          'create.blade.stub',
          'edit.blade.stub'
        ]
    ];


    protected $stubsBed = [
        'bed' => [
          'index.blade.stub',
          'show.blade.stub',
          'create.blade.stub',
          'edit.blade.stub'
        ]
    ];



    public function __construct()
    {
        parent::__construct();

    }

    protected function strReplaceKelas($fileName)
    {
        $extend = $this->argument('extends');
        return str_replace('[%extend_to%]',$extend,File::get(__DIR__.'/../stubs/Views/kelas/'.$fileName));
    }

    protected function strReplaceRuang($fileName)
    {
        $extend = $this->argument('extends');
        return str_replace('[%extend_to%]',$extend,File::get(__DIR__.'/../stubs/Views/ruang/'.$fileName));
    }

    protected function strReplaceBed($fileName)
    {
        $extend = $this->argument('extends');
        return str_replace('[%extend_to%]',$extend,File::get(__DIR__.'/../stubs/Views/bed/'.$fileName));
    }

    protected function kelasViewCreate()
    {

        foreach($this->stubsKelas['kelas'] as $stub)
        {
            File::put(base_path('resources/views/kelas/').str_replace('stub','php',$stub),$this->strReplaceKelas($stub));
        }

    }

    protected function ruangViewCreate()
    {

        foreach($this->stubsRuang['ruang'] as $stub)
        {
            File::put(base_path('resources/views/ruang/').str_replace('stub','php',$stub),$this->strReplaceRuang($stub));
        }

    }

    protected function bedViewCreate()
    {

        foreach($this->stubsBed['bed'] as $stub)
        {
            File::put(base_path('resources/views/bed/').str_replace('stub','php',$stub),$this->strReplaceBed($stub));
        }

    }



    public function handle()
    {

        File::makeDirectory(base_path('resources/views/kelas'));
        File::makeDirectory(base_path('resources/views/ruang'));
        File::makeDirectory(base_path('resources/views/bed'));

        $this->kelasViewCreate();
        $this->ruangViewCreate();
        $this->bedViewCreate();
        $this->info('Create view success');
    }
}
