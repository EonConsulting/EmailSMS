<?php

namespace EONConsulting\EmailSMS\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

 

class Reminder extends Mailable
{
    use Queueable, SerializesModels;
    public $subject;
   public $body;
   

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject)
    {
        $this->subject=$subject; //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('b.mmuffy@gmail.com','UNISA Mail')->view('ph::mail.newemail');
    }
}
