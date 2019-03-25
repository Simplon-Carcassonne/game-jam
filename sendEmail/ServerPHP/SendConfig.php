<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";


	//is it an real application call ??
	function verifyKey($keyExpected) 
	{
		$salt = "d0nn3Le5el";
		$keys = array("_TheKeyM4ckFly_");
		
		if($keyExpected == null)
			return false;
		
		foreach($keys as $key)
		{
			$keyTemporary = md5($key . $salt);
			if($keyTemporary == $keyExpected)
				return true;
		}
		
		return false;
	}

	function preprareMailParams($mail){
		//Server settings
		$mail->SMTPDebug = 2;//2                                 // Enable verbose debug output
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'ssl0.ovh.net';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'contact@makeyourgame.fun';                 // SMTP username
		$mail->Password = '2018contactfun';                           // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to
	}

	function prepareMailAdresses($from,$to,$client,$mail){
		$mail->setFrom($from, 'Mailer');
		$mail->addAddress($to, 'event orizon');     // Add a recipient
		$mail->addReplyTo($client, 'Client');
		#$mail->addAddress('ellen@example.com');               // Name is optional
        #$mail->addCC('cc@example.com');
        #$mail->addBCC('bcc@example.com');

        //Attachments
        #$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	}

	function prepareBody(){
		//var_dump($_POST);
		$body = "<h2>Vous avez une nouvelle demande de configuration </h2>".
			" <br/> ".
			" <br/>" .
			"<h5>TVA :  ".(isset($_POST["name"])? $_POST["name"]."%": "20%")." </h5> ";

		return $body;
	}

	function sendEmail($mail){
		try {
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Nouvelle configuration';
            $mail->Body    = prepareBody();
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			//send
			$mail->send();
			http_response_code(200);
            echo 'Message has been sent';
        } catch (Exception $e) {
			http_response_code(500);
            echo 'Message could not be sent.';
		}
	}

	// PARAMS
	$isValid = false;
	$errorLog = "";
	$mail = null;
	$storeEmail = 'mafabrik2jeux@gmail.com';//'jean@macflyparamoteur.com';
	$mxEmail = 'contact@makeyourgame.fun';

	//DEV Mode FROM Unity only ?
	if(isset($_POST["dev"])){ // || !isset($_POST["key"])   //allow direct url test without unity
		$mail = new PHPMailer\PHPMailer\PHPMailer(true); // Passing `true` enables exceptions
		preprareMailParams($mail);
		prepareMailAdresses($mxEmail,'mafabrik2jeux@gmail.com',(isset($_POST["email"])? $_POST["email"]: "mafabrik2jeux@gmail.com"),$mail);//from - to - mailObject
		sendEmail($mail);

        $errorLog .= "Mode DEV";
	}
	else{
        //process security
        /*if(!verifyKey($_POST["key"]))
        {
            http_response_code(401);
            print_r("Wrong identification");
            return;
        }*/
        
        if(!isset($_POST["name"]))
        {
            print_r ("la variable n'existe pas");
            $isValid = false;

        }
        else {
            print_r ("la variable existe ".$_POST["name"] );
            $isValid = true;
		}
		
		//all is OK
		if($isValid) 
		{
			$mail = new PHPMailer\PHPMailer\PHPMailer(true); // Passing `true` enables exceptions
			preprareMailParams($mail);
			prepareMailAdresses($mxEmail,$storeEmail,(isset($_POST["email"])? $_POST["email"]: "mafabrik2jeux@gmail.com"),$mail);//from - to - mailObject
			sendEmail($mail);
		}
		else 
		{
			http_response_code(400);
			print_r("<br/> Erreur dans le message : <br/>" . $errorLog);
		}
    }

	
	
?>