<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VaccineReminder extends Notification
{
    use Queueable;
    protected $kidName;
    protected $vaccine;
    /**
     * Create a new notification instance.
     */
    public function __construct($vaccine,$kidName)
    {
        $this->vaccine = $vaccine;
        $this->kidName = $kidName;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->line('The introduction to the notification.')
            ->action('Notification Action', url('/'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
        'title'   => 'Vaccine Appointment Reminder',
        'message' => "There is an upcoming vaccine for " . $this->kidName . ". Please check your kids list.",         ];
    }
}
