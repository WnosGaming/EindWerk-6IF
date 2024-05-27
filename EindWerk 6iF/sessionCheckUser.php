
<?php 
session_start();
if ((isset($_SESSION["user"])) AND (isset($_SESSION["klantID"]))) 
{
    $user = $_SESSION["user"];
    $klantID = $_SESSION["klantID"];
} else {
    $user = "Login";
    $klantID = "";
}
?>