<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
class Tickets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tickets:minute';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('expire', 0)->get();
        foreach ($users as $user){
            $user -> update(['expire'=>1]);
        }

        $this->info('update users expire');
    }
}
