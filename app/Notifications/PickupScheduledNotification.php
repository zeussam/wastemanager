<?php

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\NexmoMessage;

class PickupScheduledNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail', 'nexmo']; // Use the 'mail' and 'nexmo' channels for this notification
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Scheduled Pickup')
            ->line('A waste pickup has been scheduled for you.')
            ->line('Please make sure to have your waste ready for collection.')
            ->action('View Schedule', url('/schedule'));
    }

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage)
            ->content('A waste pickup has been scheduled for you. Please make sure to have your waste ready for collection.');
    }
}
