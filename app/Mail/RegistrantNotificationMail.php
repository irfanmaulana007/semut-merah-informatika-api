<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer as Mail;

class RegistrantNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data, $date, $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $date, $event)
    {
        $this->data = $data;
        $this->date = $date;
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Semut Merah Informatika Training';
        $ccEmail = ['irfan@semutmerah-analytics.com'];
        
        return $this->view('emails.registrantNotification')
                    ->to($this->data['email'])
                    ->subject($subject)
                    ->with('data', $this->data)
                    ->with('event', $this->event);
    }
}
