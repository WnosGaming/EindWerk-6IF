<?php
    include 'connection.php';
    
    $naam = $_POST['naam'];
    $UniekeVaardigheid = $_POST['UniekeVaardigheid'];
    $prijs = $_POST['prijs'];
    $EchteNaam = $_POST['EchteNaam'];
    $afbeelding = $_POST['afbeelding'];

    $sql = "INSERT INTO `tblproducten` (`id`, `naam`,`EchteNaam`, `prijs`, `UniekeVaardigheid`, `afbeelding`) VALUES (NULL, '$naam','$EchteNaam', '$prijs', '$UniekeVaardigheid', '$afbeelding')";


    if ($conn->query($sql) === TRUE){
        header("Location: addPage.php?melding=Record toegevoegd");
    } else {
        echo "Error: " .$sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>