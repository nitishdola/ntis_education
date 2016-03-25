<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Mail;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
    * Send email
    */

    public function send(Request $req) {

        
        $data = $req->all();
        $name = $data['name'];
        $number = $data['number'];
        $text_message = $data['message'];

        $to = 'ntistechnology@gmail.com';

        $subject = 'Inquery from NTIS Web Potal';

        $from = 'query@ntiseducation.com';


         

        // To send HTML mail, the Content-type header must be set

        $headers  = 'MIME-Version: 1.0' . "\r\n";

        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

         

        // Create email headers

        $headers .= 'From: '.$from."\r\n".

           // 'Reply-To: '.$to."\r\n" .

            'X-Mailer: PHP/' . phpversion();

         

        // Compose a simple HTML email message

        $message = '<html><body>';

        $message .= '<h1 style="color:#f40;">Query for NTIS received :</h1>';

        $message .= '<p style="color:#232323;font-size:14px;"> Name : '.$name.'</p>';
        $message .= '<p style="color:#232323;font-size:14px;"> Number : '.$number.'</p>';
        $message .= '<p style="color:#232323;font-size:14px;"> Message : '.$text_message.'</p>';

        $message .= '</body></html>';

        mail($to, $subject, $message, $headers);

        $status = '';
        $status .= 'Your mail has been send successfully !';

        return redirect('/contact-us')->with('status', $status);
         
    }

    
}
