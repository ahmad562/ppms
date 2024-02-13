<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
	
	
/*	$config = array();
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'mail.officestationary.net'; // Replace 'mail.yourdomain.com' with Hostinger's SMTP server address
$config['smtp_user'] = 'info@officestationary.net'; // Replace with your email address
$config['smtp_pass'] = 'Pakistan@47'; // Replace with your email password
$config['smtp_port'] = 587; // Hostinger SMTP port for TLS
$config['smtp_crypto'] = 'tls'; // Use TLS encryption
$config['mailtype'] = 'html'; // Set email format to HTML
$config['charset'] = 'utf-8'; // Set email character set to UTF-8
$config['newline'] = "\r\n"; // Set newline character

$this->email->initialize($config);

	    $from_email = "kifayatullahkhan2051@gmail.com";
        $to_email = "kifayatullahkhan@gmail.com";
        //Load email library
        $this->load->library('email');
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if($this->email->send())
           // $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
           echo "email Send!!!!!!!!!";
        else
          echo "Problem";
    }
     */
     ////////////////////////email//////////////////////////////////////////
     
/*
$this->load->library('email');
$this->load->library('postmark');

$this->postmark->from('mispmu@kpcip.gov.pk','Sameer Ali');
$this->postmark->to('kifayatullahkhan@gmail.com');
$this->postmark->cc('kifayatullahkhan2051@gmail.com');
$this->postmark->bcc('kifayatjobs@gmail.com');

$this->postmark->subject( 'Email Test' );
$this->postmark->message('Testing the email class.');

$this->postmark->send();
*/
///////////////////////////////////////////////
/*
$this->load->library('email');
$this->load->library('postmark');
$config['api_key'] = 'a14813b9-e075-4a89-9a79-a52943c8f515';
$config['from_address'] = '1f@gogle.com';
$config['from_name'] = 'Jarrod HJena3';

$config['validation'] = TRUE;
$config['strip_html'] = TRUE;
$config['develop'] = FALSE;

$this->postmark->initialize($config);

// option, you can set these in config/postmark.php
$this->postmark->from('mispmu@kpcip.gov.pk', 'Sameer');

$this->postmark->to('kifayatullahkhan@gmail.com', 'Kifayat');

//$this->postmark->cc('cc@example.com', 'Cc Name');
//$this->postmark->bcc('bcc@example.com', 'BCC Name');
//$this->postmark->reply_to('us@us.com', 'Reply To');

// optional
$this->postmark->tag('Some Tag');

$this->postmark->subject('Example subject');
$this->postmark->message_plain('Testing...');
$this->postmark->message_html('kifayat');

// add attachments (optional)
//$this->postmark->attach(PATH TO FILE);
//$this->postmark->attach(PATH TO OTHER FILE);

// add headers (optional)
$this->postmark->header('Name', 'Value');

// send the email

if($this->postmark->send()){
    
    echo "Send";
    
}else{
    
    echo "Failed";
}

*/

 /*
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$done=mail("sameerali355@gmail.com","My subject",$msg);


*/

$to =  "kifayatullahkhan@gmail.com";
$subject = "CW01-Lot02 IPC03 (NOTIFICATION)";

$message = "
This is IPC Generated
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <mis@kpcip.pk>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

$done=mail($to,$subject,$message,$headers);
if($done){
    echo "email Send";
}else{
    echo "Problem";
}
 

}







	
	
}
