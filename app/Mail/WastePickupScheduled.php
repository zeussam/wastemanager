<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WastePickupScheduled extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
public $name;
public $email;


public function __construct($name, $email)
{
    $this->name = $name;
    $this->email = $email;
 
}

   

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Waste Pickup Scheduled',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.waste_pickup_scheduled',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
    public function build()
    {
        return $this->subject('Waste Pickup Scheduled')
            ->view('emails.waste_pickup_scheduled');
    }
}
