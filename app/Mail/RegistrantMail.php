<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailer as Mail;

class RegistrantMail extends Mailable
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
        $subject = 'New Registrant | Semut Merah Analytics';
        $recevierEmail = 'irfanmaulana695@gmail.com';
        $ccEmail = ['irwan@semutmerah-analytics.com', 'benny@semutmerah-analytics.com'];
        
        return $this->view('emails.registrant')
                    ->to($recevierEmail)
                    // ->cc($ccEmail)
                    ->subject($subject)
                    ->with('data', $this->data)
                    ->with('event', $this->event);
    }
}
