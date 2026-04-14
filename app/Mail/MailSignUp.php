<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSignUp extends Mailable
{
    use Queueable, SerializesModels;
    
    public $signup;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($signup)
    {
        $this->signup= $signup;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      
        return $this->subject('Correspondence from the Portal of the 7th African Union-European Union Summit')
        ->view('mail.signup.index');

    }
}
