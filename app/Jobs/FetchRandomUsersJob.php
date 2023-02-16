<?php

namespace App\Jobs;

use App\Models\RandomUser;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class FetchRandomUsersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $quantity;
    /**
     * Create a new job instance.
     */
    public function __construct(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        Log::debug("Fetching {$this->quantity} random users");
        $response = Http::get("https://random-data-api.com/api/users/random_user?size={$this->quantity}");

        if ($response->status() !== 200) {
            Log::error("Error fetching random users: {$response->body()}");
            return;
        }

        $users = $response->json();
        foreach ($users as $user) {
            RandomUser::create($user);
        }

        Log::debug("Fetched {$this->quantity} random users");


    }
}
