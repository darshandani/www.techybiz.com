<?php

namespace App\Mail;

use App\Models\ContactModel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;



    /**
     * Create a new message instance.
     */
    public $contact;

    public function __construct(ContactModel $contact)
    {
        $this->contact = $contact;
    }


    public function build()
    {
        return $this->subject('New Contact Information')
            ->view('frontend.emails.contact')
            ->with(['contact' => $this->contact]);
    }
    //this code execute on controlller
     // Mail::to('darshan.svipl@gmail.com')->send(new \App\Mail\ContactMailable($contact));


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Mailable',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
}
