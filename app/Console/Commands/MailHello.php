<?php

namespace App\Console\Commands;

use App\Mail\MailTest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:hello {name}';

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
        // $this->info($this->argument("name"));
        Mail::queue(new MailTest($this->argument("name")));
    }
}
