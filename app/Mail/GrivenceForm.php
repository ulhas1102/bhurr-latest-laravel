<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class GrivenceForm extends Mailable
{
    use Queueable, SerializesModels;

    public $grivence;

    public function __construct($grivence)
    {
      $this->grivence = $grivence;
    }

    public function build()
    {
        return $this->subject('Grievance Form Submission')
                    ->view('emails.grivenceForm')
                     ->with(['grivence' => $this->grivence]);
    }
}
