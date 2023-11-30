<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendWelcomeMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $number;

    /**
     * @param $number
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    public function handle(): void
    {
        $user = (new User())
            ->newQuery()
            ->where('email', 'user' . $this->number . '@gmail.com')
            ->first();

        if ($user) {
            $user->notify(new \App\Notifications\WelcomeNotification());
        }

    }
}
