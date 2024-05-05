<?php
include_once("connection.php");
$result=0;
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);

// $passmd5=md5($pass);

$result = $conn->query("SELECT * FROM users WHERE gebruikersnaam='$user' AND paswoord='$pass'");
if ($result -> num_rows){
    print "Welkom";
    session_start();
    $_SESSION["user"]=$user;
    header("Location: login.php?melding=Ja bent aangemeld");

}
else{
    header("Location: login.php?melding=Gebruikersnaam of paswoord is niet correct");

}
$conn->close();

?>