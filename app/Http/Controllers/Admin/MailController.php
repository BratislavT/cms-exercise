<?php

namespace App\Http\Controllers\Admin;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use App\Admin\Mail;
use Auth;


class MailController extends AdminController
{

    public function index()
    {
//        $broj = Auth::user() -> id;
//        echo $broj;
//	die();

//	$mails=Mail::all();  //valjda ovim šaljemo podatke iz baze u tabelu/formu za prikaz na ekranu
//		$mails=Mail::paginate(8);
        $mails=Mail::where('user_id','=',Auth::user()->id)->paginate(8);
        return view('admin.mailer')->with('mails', $mails);
    }
  
    public function store(Request $request)
    {

     	$this->validate($request, [
             'recipient' => 'required|email',
             'subject'  => 'required',
             'message'  => 'required', 
        ]); 
		
        $mail = new MailController();
        $status = $mail->mailAction($_POST);

        $mail = new Mail;
        $mail->id = $request->id;
        $mail->user_id = Auth::user()->id;
        $mail->recipient = $request->recipient;
        $mail->subject = $request->subject;
        $mail->message = $request->message;
        $mail->status = $status;

        $mail->save();
	
       	return redirect()->route('mailer.index');
    }

   public function mailAction($data)
   {
        # require 'class/class.phpmailer.php';
        require '/var/www/template.com/vendor/autoload.php';

        $mail = new PHPMailer;
        $mail->IsSMTP();        //Sets Mailer to send message using SMTP
	$mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts
        $mail->Port = '587';        //Sets the default SMTP server port
        $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
        $mail->Username = 'bracabracatrajkovic@gmail.com';     //Sets SMTP username
        $mail->Password = 'bracabraca29x';     //Sets SMTP password
        $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
        $mail->From = 'bracabracatrajkovic@gmail.com';
        $mail->FromName = 'Braca';
        $mail->AddAddress($data["recipient"]); //Adds a "To" address
        $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
        $mail->IsHTML(true);       //Sets message type to HTML
        $mail->Subject = $data["subject"];    //Sets the Subject of the message
        $mail->Body = $data["message"];    //An HTML or plain text message body

	if ($mail->Send())        //Send an Email. Return true on success or false on error
            {
	        $data["status"] = 'sent'; 			
		\Session::flash('flash_message1','Your message has been sent!');
	    }
            else
            {
		$data["status"] = 'not sent';   
		\Session::flash('flash_message2','There is an error. Your message has not been sent!');
            }

	    return $data["status"];
    }
}
