<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class Services extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {serviceName}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = ' This command is used to create a services file';

    /**
     * Execute the console command.
     */

    protected $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();
        $this->files = $files;
    }

    public function handle()
    {
        $name = $this->argument('serviceName');
        $path = base_path("App/Services/{$name}.php");
        if ($this->files->exists($path)) {
            $this->error("Service '{$name}' already exists!");
            return;
        }
        $stub = app_path('/stub/service.stub');
        $sketch = $this->files->get($stub);
        $Content = str_replace('{{ClassName}}', $name, $sketch);
        $this->files->put($path, $Content);
        $this->info("Service '{$name}' created successfully.");
    }
    
// this commented code is to make file without stub
//     public function handle()
//     {
//         $name = $this->argument('serviceName');
//         $path = base_path("app/services/$name.php");
//         if ($this->files->exists($path)) {
//             $this->error("Service '{$name}' already exists!");
//             return;
//         }
//         $this->files->put($path, $this->buildClass($name));
//         $this->info("Service '{$name}' created successfully.");
//     }
//     protected function buildClass($name)
//     {
//         return <<<CLASS
// <?php

// namespace App\Services;

// class {$name}
// {
//     //
// }
// CLASS;
//     }

}