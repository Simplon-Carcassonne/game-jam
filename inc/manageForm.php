<?php


if(isset($_POST['name'])){
    
    echo 'on click sur form';
    echo '<br> valeurs récup '.$_POST['name'];
    
    //die();
    require "./sendEmail/ServerPHP/SendConfig.php";
    
    
}