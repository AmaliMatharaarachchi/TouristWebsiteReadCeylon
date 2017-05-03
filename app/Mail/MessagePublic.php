<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessagePublic extends Mailable
{
    use Queueable, SerializesModels;
    public $message;
    public $publicUser;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($message, $publicUser)
    {
        $this->message=$message;
        $this->publicUser=$publicUser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.message');
    }
}
