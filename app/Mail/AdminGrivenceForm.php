<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminGrivenceForm extends Mailable
{
    use Queueable, SerializesModels;

    public $grievance;

    public function __construct($grievance)
    {
      $this->grievance = $grievance;
    }

    public function build()
    {
        return $this->subject('Grivence Form Submission')
                    ->view('emails.adminGrivenceForm')
                     ->with(['grievance' => $this->grievance]);
    }
}
