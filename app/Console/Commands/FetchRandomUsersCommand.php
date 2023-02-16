<?php

namespace App\Console\Commands;

use App\Jobs\FetchRandomUsersJob;
use Illuminate\Console\Command;

class FetchRandomUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:random_users {quantity}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $quantity = $this->argument('quantity');
        FetchRandomUsersJob::dispatch($quantity);

    }
}
