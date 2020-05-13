<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendBoutiquePasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $email, $access_code, $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $access_code, $url)
    {
        $this->name = $name;
        $this->email = $email;
        $this->access_code = $access_code;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.boutique_approve',[
            "name" => $this->name,
            "email" => $this->email,
            "access_code" => $this->access_code,
            "url" => $this->url
        ])->subject("You're In!");
    }
}
