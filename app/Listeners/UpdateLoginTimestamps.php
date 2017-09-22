<?php

namespace App\Listeners;

use Carbon\Carbon;
use Illuminate\Auth\Events\Login;

class UpdateLoginTimestamps
{
    /**
     * @var \Carbon\Carbon
     */
    protected $carbon;

    /**
     * UpdateLoginTimestamps constructor.
     *
     * @param  \Carbon\Carbon  $carbon
     */
    public function __construct(Carbon $carbon)
    {
        $this->carbon = $carbon;
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     */
    public function handle(Login $event)
    {
        $time = $this->carbon->now();
        $user = $event->user;

        // Make sure is set only time.
        if (empty($user->first_login)) {
            $user->setAttribute('first_login', $time);
        }

        $user->setAttribute('last_login', $time)->save();
    }
}
