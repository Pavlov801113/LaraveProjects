<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}s';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create new blade template';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $view = $this->argument('view');
        $path = $this->viewPath($view);
        $this->createDir($path);
        if(File::exists($path)){
            $this->error("File {$path} created.");
            return;
        }
        File::put($path, $path);
        $this->info("File {$path} created.");
    }
    public function viewPath($view)
    {
        $view = str_replace('.', '/', $view) . '.blade.php';
        $path = "resource/views/{$view}";
        return $path;
    }
    public function createDir($path)
    {
        $dir = dirname($path);
        if(!file_exists($dir)){
            mkdir($dir, 0777, true);
        }
    }
}
