<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\CoreController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Mail;
use App\ICS;

use App\Mail\Contact as ContactMail;

class MailController extends CoreController
{
    private function isSpam( $request )
    {
        if ( $request->url != '' ) :
            $this->addData('request' , 'success' );
            return true;
        endif;
        if ( ( time() - $request->website  ) < 2 ) :
            $this->addData('request' , 'success' );
            return true;
        endif;
        if ( str_contains( $request->message, 'http://bit' ) ) :
            $this->addData('request' , 'success' );
            return true;
        endif;
        return false;
    }
    public function contact( Request $request )
    {
        if ( $this->isSpam( $request ) ) :
            return $this->result();
        endif;


        $take = [ 'name' , 'company' , 'telephone' , 'email' , 'subject' , 'message' ];
        $input = $request->only( $take );
        $data = [
            'from'      => 'info@promogaza.com',
            'origin'    => 'Contáctenos',
            'name'      => $input['name'],
            'company'   => $input['company'],
            'telephone' => $input['telephone'],
            'email'     => $input['email'],
            'email_bcc'       => [
                // 'webmaster@promogaza.com'
                'genesis.guzman@promogaza.com',
                'marketing@promogaza.com',
            ],
            'subject'   => $input['subject'],
            'message'   => $input['message']
        ];
        
        // Mail::to( $input['email'] )
        //     ->bcc( $data['email_bcc'] )
        //     ->send( new ContactMail( $data ) );
        $this->addData('request' , $request->all() );
        return $this->result();
    }
    public function school( Request $request )
    {
        if ( $this->isSpam( $request ) ) :
            return $this->result();
        endif;
        $take = [ 'first_name' , 'last_name' , 'company' , 'telephone' , 'email' , 'subject' , 'message' ];

        $input = $request->only( $take );
        $data = [
            'from'      => 'info@promogaza.com',
            'origin'    => 'Escuela Trade',
            'name'      => $input['first_name'] . ' ' . $input['last_name'],
            'company'   => $input['company'],
            'telephone' => $input['telephone'],
            'email'     => $input['email'],
            'email_bcc'       => [
                'gabriela.montesdeoca@promogaza.com',
                'marketing@promogaza.com'
            ],
            'subject'   => 'Escuela Trade',
            'message'   => 'Estoy interesado en Escuela Trade'
        ];

        // Mail::to( $input['email'] )
        //     ->bcc( $data['email_bcc'] )
        //     ->send( new ContactMail( $data ) );
        $this->addData('request' , $request->all() );
        return $this->result();
    }
    public function schedule( Request $request )
    {
        if ( $this->isSpam( $request ) ) :
            return $this->result();
        endif;
        
        $take = [ 'name' , 'date' , 'service' , 'telephone' , 'email' , 'message' ];

        $input = $request->only( $take );

        $body = 'Tipo de servicio: ' . $input['service'].'\n' . 'Mensaje: '.$input['message'];
        $event = new ICS( $input['date']." 14:00", $input['date']." 15:00","Agendar reunión", $body ,"UTC");
        $event->save();
        $data = [
            'from'      => 'info@promogaza.com',
            'origin'    => 'Agendar reunión',
            'name'      => $input['name'],
            'telephone' => $input['telephone'],
            'service'   => $input['service'],
            'email'     => $input['email'],
            'email_bcc'       => [
                // 'webmaster@promogaza.com'
                'genesis.guzman@promogaza.com',
                'marketing@promogaza.com',
                'karen.alcivar@promogaza.com'
            ],
            'subject'   => 'Agendar reunión',
            'message'   => $input['message'],
            'file'      => $event->data
        ];

        // Mail::to( $input['email'] )
        //     ->bcc( $data['email_bcc'] )
        //     ->send( new ContactMail( $data ) );
        $this->addData('request' , $request->all() );
        return $this->result();

    }
    public function quotation( Request $request )
    {
        if ( $this->isSpam( $request ) ) :
            return $this->result();
        endif;
        
        $take = [ 'name' , 'subject' , 'telephone' , 'email' , 'message' ];

        $input = $request->only( $take );

        $body = 'Tipo de servicio: ' . $input['subject'].'\n' . 'Mensaje: '.$input['message'];
        $data = [
            'from'      => 'info@promogaza.com',
            'origin'    => 'Cotización',
            'name'      => $input['name'],
            'telephone' => $input['telephone'],
            'service'   => $input['subject'],
            'email'     => $input['email'],
            'email_bcc'       => [
                // 'webmaster@promogaza.com'
                'genesis.guzman@promogaza.com',
                'marketing@promogaza.com',
                'karen.alcivar@promogaza.com'
            ],
            'subject'   => 'Cotización',
            'message'   => $input['message']
        ];

        // Mail::to( $input['email'] )
        //     ->bcc( $data['email_bcc'] )
        //     ->send( new ContactMail( $data ) );
        $this->addData('request' , $request->all() );
        return $this->result();

    }
}
