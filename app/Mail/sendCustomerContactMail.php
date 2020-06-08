<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendCustomerContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Contact')
            ->markdown('email.sendContact')
            ->with([
                'name' => $this->name,
                'email' => $this->email
            ]);
    }
}
