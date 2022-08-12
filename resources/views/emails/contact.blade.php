<style>
    a {
        display: inline-block;
        text-decoration: none;
        color: #00A7AE;
        margin: 0;
        padding: 0;
    }
</style>
<table style="background: #FFFFFF;" width="100%" style="width: 100%; max-width: 640px;">
    <tbody>
        <tr>
            <td style="text-align: center; padding: 30px 0;">
                <img style="margin: auto; width: 200px;" src="{{ asset('/imgs/mail/logo.png') }}" alt="Platino Marketing Promocional">
            </td>
        </tr>
    </tbody>
</table>
<table style="background: #FFFFFF;" width="100%" style="width: 100%; max-width: 640px;">
    <tbody>
        <tr>
            <td style="text-align: center; padding: 15px 0; font-size: 24px; color: #1A1A1A;">
                Hola, {{ $data['name'] }}
            </td>
        </tr>
        <tr style="text-align: center; padding: 10px 0; font-size: 18px; color: #1A1A1A;">
            <td>
            @if (  isset( $data['origin'] ) AND $data['origin'] == 'Cotización' )
                Tu solicitud ha sido enviada.
            @else
                Hemos recibido tus datos
            @endif
            </td>
        </tr>
    </tbody>
</table>
<table style="background: #FFFFFF;" width="100%" align="center" style="width: 100%; max-width: 640px; margin: auto;">
    <tr>
        <td>&nbsp;</td>
        <td width="480px" style="width: 480px;">
            <table style="background: #FFFFFF;" width="100%" align="center" style="width: 100%; max-width: 480px; margin: auto;">
                <tbody>
                    @if ( isset( $data['company'] ) )
                    <tr>
                        <td width="15px">&nbsp;</td>
                        <td style="padding: 0 20px 15px;">
                            <h2 style="margin: 0 0 5px; font-weight: 400; color: #666666; font-size: 12px;">Empresa</h2>
                            <h3 style="margin: 0; font-weight: 500; padding: 8px 0px; border-bottom: 1px solid #666666; color: #00A7AE;">{{ $data['company'] }}</h3>
                        </td>
                        <td width="15px">&nbsp;</td>
                    </tr>
                    @endif
                    @if (  isset( $data['service'] ) )
                    <tr>
                        <td width="15px">&nbsp;</td>
                        <td style="padding: 0 20px 15px;">
                            <h2 style="margin: 0 0 5px; font-weight: 400; color: #666666; font-size: 12px;">Servicio</h2>
                            <h3 style="margin: 0; font-weight: 500; padding: 8px 0px; border-bottom: 1px solid #666666; color: #00A7AE;">{{ $data['service'] }}</h3>
                        </td>
                        <td width="15px">&nbsp;</td>
                    </tr>
                    @endif
                    <tr>
                        <td width="15px">&nbsp;</td>
                        <td style="padding: 0 20px 15px;">
                            <h2 style="margin: 0 0 5px; font-weight: 400; color: #666666; font-size: 12px;">Correo electrónico</h2>
                            <h3 style="margin: 0; font-weight: 500; padding: 8px 0px; border-bottom: 1px solid #666666; color: #00A7AE;">{{ $data['email'] }}</h3>
                        </td>
                        <td width="15px">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="15px">&nbsp;</td>
                        <td style="padding: 0 20px 15px;">
                            <h2 style="margin: 0 0 5px; font-weight: 400; color: #666666; font-size: 12px;">Teléfono</h2>
                            <h3 style="margin: 0; font-weight: 500; padding: 8px 0px; border-bottom: 1px solid #666666; color: #00A7AE;">{{ $data['telephone'] }}</h3>
                        </td>
                        <td width="15px">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="15px">&nbsp;</td>
                        <td style="padding: 0 20px 30px;">
                            <h2 style="margin: 0 0 5px; font-weight: 400; color: #666666; font-size: 12px;">Mensaje</h2>
                            <h3 style="margin: 0; font-weight: 500; padding: 8px 0px; border-bottom: 1px solid #666666; color: #00A7AE;">{{ $data['message'] }}</h3>
                        </td>
                        <td width="15px">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </td>
        <td>&nbsp;</td>
    </tr>
</table>
@if (  isset( $data['origin'] ) AND $data['origin'] == 'Agendar reunión' )
<table style="background: #FFFFFF;" width="100%" style="width: 100%; max-width: 640px;">
    <tbody>
        <tr>
            <td style="text-align: center; padding: 15px 0; font-size: 24px; color: #1A1A1A;">
                Gracias por contactarnos.
            </td>
        </tr>
        <tr style="text-align: center; padding: 10px 0; font-size: 18px; color: #1A1A1A;">
            <td>
                En breves minutos confirmaremos tu cita.
            </td>
        </tr>
    </tbody>
</table>
@endif
@if (  isset( $data['origin'] ) AND $data['origin'] == 'Cotización' )
<table style="background: #FFFFFF;" width="100%" style="width: 100%; max-width: 640px;">
    <tbody>
        <tr>
            <td style="text-align: center; padding: 15px 0; font-size: 24px; color: #1A1A1A;">
                Estamos trabajando en tu cotización.
            </td>
        </tr>
        <tr style="text-align: center; padding: 10px 0; font-size: 18px; color: #1A1A1A;">
            <td>
                Pronto un asesor se contactará contigo.
            </td>
        </tr>
    </tbody>
</table>
@endif
@if (  isset( $data['origin'] ) AND $data['origin'] == 'Escuela Trade' )
<table style="background: #FFFFFF;" width="100%" style="width: 100%; max-width: 640px;">
    <tbody>
        <tr>
            <td style="text-align: center; padding: 15px 0; font-size: 24px; color: #1A1A1A;">
                En breve recibirás mayor información.
            </td>
        </tr>
    </tbody>
</table>
@endif


<table style="background: #002062;" width="100%" style="width: 100%; max-width: 640px;">
    <tbody>
        <tr>
            <td style="text-align: center; padding: 20px 0 10px; ">
                <a style="color: #00A7AE;" href="http://demo.platinomkt.com" target="_blank">
                    &nbsp;Platino&nbsp;
                </a>
                &nbsp;
                <a style="color: #00A7AE;" href="http://demo.platinomkt.com/#service" target="_blank">
                    &nbsp;Servicios&nbsp;
                </a>
                &nbsp;
                <a style="color: #00A7AE;" href="http://demo.platinomkt.com/cobertura" target="_blank">
                    &nbsp;Cobertura&nbsp;
                </a>
                &nbsp;
                <a style="color: #00A7AE;" href="http://demo.platinomkt.com/escuela-trade" target="_blank">
                    &nbsp;Escuela Trade&nbsp;
                </a>
                &nbsp;
                <a style="color: #00A7AE;" href="http://demo.platinomkt.com/contactenos" target="_blank">
                    &nbsp;Contáctenos&nbsp;
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 10px 0;">
                <a href="https://ec.linkedin.com/company/platinomkt" target="_blank">
                    <img src="{{ asset('/imgs/mail/icon-in.png') }}" />
                </a>
                <a href="https://www.facebook.com/platinomkt" target="_blank">
                    <img src="{{ asset('/imgs/mail/icon-fb.png') }}" />
                </a>
                <a href="https://www.instagram.com/platinomkt/" target="_blank">
                    <img src="{{ asset('/imgs/mail/icon-ig.png') }}" />
                </a>
                <a href="https://twitter.com/platinomkt" target="_blank">
                    <img src="{{ asset('/imgs/mail/icon-tw.png') }}" />
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 10px 0;">
                <h6 style="color: #00A7AE; font-size: 24px; font-weight: 500; margin: 0;">¡Ahora más conectados!</h6>
            </td>
        </tr>
        <tr>
            <td style="text-align: center; padding: 10px 0;  font-size: 14px; color: white; font-size: 14px;">    
                © 2019 Platino Marketing Promocional
            </td>
        </tr>
    </tbody>
</table>