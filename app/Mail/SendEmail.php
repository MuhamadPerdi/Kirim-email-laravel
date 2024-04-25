<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    
    public function envelope() : Envelope 
    {
        return new Envelope(
            subject : 'Demo Mail'
        );
    }
    public function content() : Content
    {
       return new Content(
        view: 'send_email'
       ); // Ganti 'emails.send_data_template' dengan nama tampilan email Anda
    }

    public function attachments() : array
    {
        return [];
    }
}