<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Esse comando exibe uma mensagem de boas vindas.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info("World!");
    }
}
