<?php
if(isset($_POST['name'])){
    require "./sendEmail/ServerPHP/FormContactManager.php";
    $mailManager = new FormContactManager;
    $result = $mailManager->tryToSendMail();
    if($result['status'] == 0){
        $error = $result['message'];
    }
    else{
        $success = $result['message'];
    }
}