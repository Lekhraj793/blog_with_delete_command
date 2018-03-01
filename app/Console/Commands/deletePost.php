<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Request;
use App\Libraries\AdminLibrary;
use Illuminate\Support\Facades\Log;

class deletePost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deletePost';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete data form post table';

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
        $post= $this->ask('Delete all posts');
        if ($post=="All Post")
        {
            if ($this->confirm("do you want"))
            {
                $del= New AdminLibrary();
                $delete= $del->deleteAll();
                //Log::info($delete);
                if (!$delete)
                {
                    throw new \Exception("Post not deleted");

                }
            }
        }


    }
}
