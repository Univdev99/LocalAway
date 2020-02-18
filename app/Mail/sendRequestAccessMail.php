<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class sendRequestAccessMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $url)
    {
        $this->name = $name;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Request Access')
            ->markdown('comsite.sendLink')
            ->with([
                'name' => $this->name,
                'link' => $this->url
            ]);
    }

}
