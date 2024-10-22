<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SpecialBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $specialBooking;

    public function __construct($specialBooking)
    {
      $this->specialBooking = $specialBooking;
    }

    public function build()
    {
        return $this->subject('Special Booking Form')
                    ->view('emails.specialBookingForm')
                     ->with(['specialBooking' => $this->specialBooking]);
    }
}
