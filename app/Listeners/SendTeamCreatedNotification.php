<?php

namespace App\Listeners;

use App\Mail\TeamAdded;
use App\Providers\TeamCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendTeamCreatedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TeamCreated  $event
     * @return void
     */
    public function handle(TeamCreated $event)
    {
        Mail::to(request()->user())->send(new TeamAdded($event->team));
    }
}
