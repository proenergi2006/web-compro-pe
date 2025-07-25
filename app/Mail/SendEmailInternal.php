<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailInternal extends Mailable
{
    use Queueable, SerializesModels;
  public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->from($this->data['email'], $this->data['name'])
        //         ->to($this->data['email']) 
        //         ->subject($this->data['subject'])
        //         ->view('company.pages.email');

            return $this->from('support@proenergi.com') // bisa tetap pakai email internal
                ->subject($this->data['subject'])
                ->view('company.layout.emailpe');

    }
}
