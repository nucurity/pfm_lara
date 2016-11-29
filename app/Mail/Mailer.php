<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $address;
    public $message;

    public function __construct($address)
    {
        $this->address = $address;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        /*
        $address = $this->address;
        $name = "support team";
        $subject = "Forgot password";
        return $this->view('mail.productinfo')
            ->from ($address, $name)
            ->cc($address, $name)
            ->subject($subject);
        */
    }

}
