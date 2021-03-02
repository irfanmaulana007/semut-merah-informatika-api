<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PaymentMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data, $date, $occupation, $payment_amount;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data, $date, $occupation, $payment_amount)
    {
        $this->data = $data;
        $this->date = $date;
        $this->occupation = $occupation;
        $this->payment_amount = $payment_amount;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = 'Payment Instruction #' . $this->data['code'] . ' | Semut Merah Analytics';
        $ccEmail = 'irfanmaulana695@gmail.com';
        
        return $this->view('emails.payment')
                    ->to($this->data['email'])
                    ->cc($ccEmail)
                    ->subject($subject)
                    ->with('data', $this->data)
                    ->with('payment_amount', $this->payment_amount);
    }
}
