<?php
error_reporting(-1);
ini_set('display_errors', 'On');

require "PHPMailer/src/PHPMailer.php";
require "PHPMailer/src/SMTP.php";
require "PHPMailer/src/Exception.php";

class FormContactManager
{

	// PARAMS
	private $isValid = false;
	private $result = array();
	private $mail = null;
	private $storeEmail = 'mafabrik2jeux@gmail.com';
	private $mxEmail = 'contact@makeyourgame.fun';
	private $name;
	private $message;

	//is it an real application call ??
	function verifyKey($keyExpected)
	{
		$salt = "d0nn3Le5el";
		$keys = array("_TheKeyM4ckFly_");

		if ($keyExpected == null)
			return false;

		foreach ($keys as $key) {
			$keyTemporary = md5($key . $salt);
			if ($keyTemporary == $keyExpected)
				return true;
		}

		return false;
	}

	function preprareMailParams()
	{
		//Server settings
		$this->mail->SMTPDebug = false;  //2 only for debug  
		$this->mail->isSMTP();                                      // Set mailer to use SMTP
		$this->mail->Host = 'ssl0.ovh.net';  							// Specify main and backup SMTP servers
		$this->mail->SMTPAuth = true;                               // Enable SMTP authentication
		$this->mail->Username = 'contact@makeyourgame.fun';                 // SMTP username
		$this->mail->Password = '2018contactfun';                           // SMTP password
		$this->mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$this->mail->Port = 465;                                    // TCP port to connect to
	}

	function prepareMailAdresses($from, $to, $client)
	{
		$this->mail->setFrom($from, 'Formulaire de la GameJam');
		$this->mail->addAddress($to, 'Event Orizon');     // Add a recipient
		$this->mail->addReplyTo($client, 'Infos sur la GameJam - Contact');
		#$mail->addAddress('ellen@example.com');               // Name is optional
	}

	function prepareBody()
	{
		//var_dump($_POST);
		$body = "<h2>Une personne est intéressée par la GameJame !! </h2>" .
			" <br/> " .
			"<h3>Nom :  " . $this->name." </h3> ".
			"<h3>Email :  " . $_POST["email"]." </h3> ".
			"<h3>Sujet :  " . $_POST["subject"]." </h3> ".
			"<p>Message :  " . $this->message." </p> ";

		return $body;
	}

	function sendEmail()
	{
		try {
			//Content
			$this->mail->isHTML(true);                                  // Set email format to HTML
			$this->mail->Subject = 'Nouveau message de la GameJam';
			$this->mail->Body    = $this->prepareBody();
			$this->mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

			//send
			$this->mail->send();
			http_response_code(200);
			//echo 'Message has been sent';
			return true;
		} catch (Exception $e) {
			http_response_code(500);
			echo 'Message could not be sent.'.$e;
			$this->result = array('status' => 0, 'message' => "Erreur ! Veuillez réessayer plus tard ou nous contacter par téléphone.");
			return false;
		}
	}

	function tryToSendMail()
	{
		//DEV Mode FROM Unity only ?
		if (isset($_POST["dev"])) { // || !isset($_POST["key"])   //allow direct url test without unity
			$this->mail = new PHPMailer\PHPMailer\PHPMailer(true); // Passing `true` enables exceptions
			$this->preprareMailParams();
			$this->prepareMailAdresses($this->mxEmail, 'mafabrik2jeux@gmail.com', (isset($_POST["email"]) ? $_POST["email"] : "mafabrik2jeux@gmail.com")); //from - to - mailObject
			$this->sendEmail();

			$this->errorLog .= "Mode DEV";
		} else {
			//process Application security
			/*if(!verifyKey($_POST["key"]))
			{
				http_response_code(401);
				print_r("Wrong identification");
				return;
			}*/

			//all is OK ??
			if ($this->checkInput()) {
				$this->sanitizeInput();
				if($this->checkCaptcha()){
					$this->mail = new PHPMailer\PHPMailer\PHPMailer(true);
					$this->preprareMailParams();
					$this->prepareMailAdresses($this->mxEmail, $this->storeEmail, (isset($_POST["email"]) ? $_POST["email"] : "mafabrik2jeux@gmail.com")); //from - to - mailObject
					if($this->sendEmail()){
						$this->result = array('status' => 1, 'message' => "l'email a bien été envoyé ! Votre demande sera traitée sous 48h");
					}
				}
				else{
					$this->result = array('status' => 0, 'message' => "Système anti-bot activé !!");
				}
			} else {
				http_response_code(400);
			}
		}
		return $this->result;
	}

	private function checkInput()
	{
		$inputOK = $this->checkEmptiness();
		if ($inputOK && !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
			$this->result = array('status' => 0, 'message' => $_POST["email"]."Veuillez renseigner un email valide svp !");
			$inputOK = false;
		} 
		if($inputOK && strlen($_POST["message"]) <= 15){
			$this->result = array('status' => 0, 'message' => "Le message doit contenir plus de 15 caractères");
			$inputOK = false;
		}
		return $inputOK;
	}

	private function checkEmptiness(){
		if (empty($_POST["name"])) { 
			$this->result = array('status' => 0, 'message' => "Veuillez entrer votre Nom");
			return false;
		}
		else if(empty($_POST["email"])){
			$this->result = array('status' => 0, 'message' => "Veuillez entrer votre email");
			return false;
		}
		else if(empty($_POST["message"]) ){
			$this->result = array('status' => 0, 'message' => "Indiquez un message complémentaire svp ...");
			return false;
		}
		return true;
	}
	private function sanitizeInput(){
		$this->message = strip_tags($_POST["message"]);
		$this->name = strip_tags($_POST["name"]);
	}

	private function checkCaptcha(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

			// Build POST request:
			$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
			$recaptcha_secret = '6LeeBJoUAAAAAEXkH-BJu16gH77Zp4ZQSAyQUZ16';
			$recaptcha_response = $_POST['recaptcha_response'];
		
			// Make and decode POST request:
			$recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
			$recaptcha = json_decode($recaptcha);
		
			// Take action based on the score returned:
			if ($recaptcha->score >= 0.5) {
				// Verified - send email
				return true;
			} else {
				// Not verified - show form error
				return false;
			}
		
		}
	}
}
