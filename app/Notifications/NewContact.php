<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class NewContact extends Notification
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data = null)
    {
        $this->data = (object) $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject("New Contact: {$this->data->subject}")
            ->line(new HtmlString("You got a new contact message.<br /><br />"))
            ->line(new HtmlString("<h3>Name: {$this->data->name}</h3>"))
            ->line(new HtmlString("<h3>Email: {$this->data->email}</h3>"))
            ->line(new HtmlString("<h3>Phone: {$this->data->phone}</h3>"))
            ->line(new HtmlString("<h3>Subject: {$this->data->subject}</h3>"))
            ->line(new HtmlString("<h3>Message: {$this->data->message}</h3>"));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
