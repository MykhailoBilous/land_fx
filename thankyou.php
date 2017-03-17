<?php

require 'connection.php';

$date = date('Y-m-d H:i:s');
$ip = date('Y-m-d H:i:s') . " - $_SERVER[REMOTE_ADDR]";
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['u_name']);
$email   = $conn->real_escape_string($_POST['u_email']);
$subj    = $conn->real_escape_string($_POST['subj']);
$message = $conn->real_escape_string($_POST['message']);
$query   = "INSERT into tb_cform (u_name,u_email,subj,message,date,ip) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "','" . $date . "','" . $ip . "')";
$success = $conn->query($query);


if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

$conn->close();


echo "Thanks, redirecting....";

?>

<meta http-equiv="refresh" content="0; url=https://www.finexo.com/ru/live-registration?bid=29054" />
<p><a href="https://www.finexo.com/ru/live-registration?bid=29054">https://www.finexo.com/ru/live-registration?bid=29054</a></p>