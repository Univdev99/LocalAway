<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class sendRequestAccessMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $url, $access_code;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $url, $access_code)
    {
        $this->name = $name;
        $this->url = $url;
        $this->access_code = $access_code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this
        //     ->subject('Request Access')
        //     ->markdown('ai.sendLink')
        //     ->with([
        //         'name' => $this->name,
        //         'link' => $this->url,
        //         'access_code' => $this->access_code
        //     ]);
        return $this->view('ai.mailSent');
    }

}
