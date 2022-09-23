<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class AccountNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public $masage;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($masage)
    {
        $this->masage = $masage;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [LogChanel::class];
        return view('accounts');
    }

    public function toLog($notifiable)
    {
        sleep(10); //имитация задержки
        Log::info("$notifiable: $this->masage");
    }
}
