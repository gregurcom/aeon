<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\Registration;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\SendWelcomeEmail as SendEmail;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\Registration  $event
     * @return void
     */
    public function handle(Registration $event)
    {
        Mail::to($event->user->email)->send(new SendEmail($event->user));
    }
}
