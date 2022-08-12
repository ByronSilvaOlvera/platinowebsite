<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject($this->data['subject']);
        if ( isset( $this->data['file'] ) ) :
            $this->from($this->data['from'], $this->data['origin'].' - Platino Marketing Promocional')
                    ->attachData($this->data['file'],  'agendar-evento.ics' , [
                        'mime' => 'text/calendar'
                    ]);
        else : 
            $this->from($this->data['from'], $this->data['origin'].' - Platino Marketing Promocional');

        endif;
        return $this->markdown('emails.contact');
    }
}
