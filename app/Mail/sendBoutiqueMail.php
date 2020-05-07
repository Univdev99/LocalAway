<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendBoutiqueMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $access_code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $access_code)
    {
        $this->name = $name;
        $this->access_code = $access_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.boutique', [
            'name' => $this->name,
            'access_code' => $this->access_code
        ])->subject("You're In!");
    }
}
