<?php

namespace App\Listeners;

use App\Event\OrderCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendOrderCreatedEmail
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
     * @param  \App\Event\OrderCreated  $event
     * @return void
     */
    public function handle(OrderCreated $event)
    {
        Log::info($event->order_id);
        //التعامل مع المتغيرات الممررة من الحدث

        Mail::to($event->user_email);
        // هنا يمكنك معالجة إرسال الإيميل

    }
}
