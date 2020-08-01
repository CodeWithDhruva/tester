<?php
// This for sending Data to the server
$name = _REQUEST['id'];
$pass = _REQUEST['pass'];
$message = _REQUEST['message'];


if (empty($name) || empty($pass) ) {
    echo "PLease Fill all the details";
}
else {
    mail("itworldcs@gmail.com", "THis is only for Practise Purpose", $message, "From: $name <$name> ");
    echo "<script type = 'text/javascript'> alert('Your details has been sent')
    window.history.log(-1);   
    
    </script>";
}

?>