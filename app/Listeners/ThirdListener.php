<?php

namespace App\Listeners;

use App\Events\FirstEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThirdListener
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
     * @param  FirstEvent  $event
     * @return string
     */
    public function handle(FirstEvent $event)
    {
        return 'return from ' . get_class($this);
    }
}
