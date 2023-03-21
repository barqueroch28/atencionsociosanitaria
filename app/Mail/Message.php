<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct($name=null, $email=null, $text=null, $phone=null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->text = $text;
        $this->phone = $phone;
    }

    public function build()
    {
        return $this->from($this->email, $this->name)
            ->subject('Petición contacto de https://curso-atencion-sociosanitaria.com/')
            ->view('mail.contact')
            ->with([
                'text' => $this->text,
                'name' => $this->name,
                'phone' => $this->phone
            ]);
    }
}
