<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactForm extends Mailable
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
                    ->view('emails.contactForm')
                     ->with(['contact' => $this->contact]);
    }
}
