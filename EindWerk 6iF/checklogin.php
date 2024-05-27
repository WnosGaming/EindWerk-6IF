<?php

include_once("connection.php");
session_start(); 

$result = 0;
$user = htmlspecialchars($_POST['username']);
$pass = htmlspecialchars($_POST['password']);


$stmt = $conn->prepare("SELECT klantID, gebruikersnaam, paswoord FROM users WHERE gebruikersnaam = ? AND paswoord = ?");
$stmt->bind_param("ss", $user, $pass);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows) {
    $row = $result->fetch_assoc();
    print "Welkom";
    $_SESSION["user"] = $user;
    $_SESSION["klantID"] = $row['klantID'];
    header("Location: login.php?melding=Je bent aangemeld");
    exit(); 
} else {
    header("Location: login.php?melding=Gebruikersnaam of paswoord is niet correct");
    exit(); 
}

$stmt->close();
$conn->close();
?>
