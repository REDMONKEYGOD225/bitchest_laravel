<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TemporaryPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $temporaryPassword;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($temporaryPassword)
    {
        $this->temporaryPassword = $temporaryPassword;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.temporary_password')
                    ->subject('Your Temporary Password');
    }
}
