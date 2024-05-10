<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/HomePage.css">
	<link rel="stylesheet" href="css/AanvallersEnVerdedigers.css">
    <!-- <link rel="shortcut icon" href="img/Icon.png" type="image/png"> -->
    <link rel="shortcut icon" href="img/Favicon.png" type="image/png">
    <title>Producten Webshop</title> 
    
</head>
<body>
<!------------------------------ NAVIGATIEBALK ------------------------------>
<?php 
     include 'navbar.php';
    ?>
<!------------------------------ PRODUCTEN  ------------------------------>

    
    

    <br><br><br>
	<h1 style="text-align: center;">Winkelmandje</h1>
    <main>
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM `tblproducten`";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    ?>
    </main>
    <div class="product">
        <img id="imgSchoenen" alt="schoenen" src="img/<?php echo $row['afbeelding']; ?> ">
        <h2><?php echo $row['naam']; ?></h2>
        <p><b>Echte Naam:</b><?php echo $row['EchteNaam']; ?></p>
        <p><b>Unieke Vaardigheid:</b> <?php echo $row['UniekeVaardigheid']; ?> </p>
        <p class="prijs"><b>Prijs: </b> <?php echo $row['prijs']; ?> </p>
        <button class="btn">Meer info</button>
    </div>
    
    <?php };
    $conn->close();?>
   
<!------------------------------ FOOTER ------------------------------>
    
<?php 
     include 'footer.php';
    ?>


</body>
</html>