<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminContactForm extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
      $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('Contact Form Submission')
                    ->view('emails.adminContactForm')
                     ->with(['contact' => $this->contact]);
    }
}
