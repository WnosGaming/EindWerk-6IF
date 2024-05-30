<?php 
    if(isset($_GET['melding'])){
        $melding=$_GET['melding'];
       ?><script>alert ("<?php print $melding;?>")</script> 
       <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten toevoegen</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/HomePage.css">
	<link rel="stylesheet" href="css/addPage.css">
    <link rel="shortcut icon" href="img/Favicon.png" type="image/png">
    
</head>
<body>
    
<?php 
      include 'navbar.php';
    ?>
    
<div class="container">
    <br><br><br>
    <h2>Product toevoegen</h2>
    <div class="add">
        <form action="add2.php" method="post" enctype="multipart/form-data">
            <table >
             
                <tr>
                    <td>Naam:  </td>
                    <td><input type="text" name="naam" id="naam"></td>
                </tr>
                <tr>
                    <td>Echte naam: </td>
                    <td><input type="text" name="EchteNaam" id="EchteNaam"></td>
                </tr>
                <tr>
                    <td>Unieke vaardighed:  </td>
                    <td><input type="text" name="UniekeVaardigheid" id="UniekeVaardigheid"></td>
                </tr>
                <tr>
                    <td>Prijs: </td>
                    <td><input type="number" name="prijs" id="prijs"> EUR</td>
                </tr>
                <td>Afbeelding: </td>
                <td><input type="text" name="afbeelding" id="afbeelding"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="Toevoegen"></td>
                </tr>
               
            </table>
        </form>
    </div>
    <h2>Producten</h2>
        <table id="producten">
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM `tblproductenverdedigers`";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id']; ?></td></p>
                    <td><img src="img/<?php echo $row['afbeelding'];?>" ></td>
                    <td><?php echo $row['naam']; ?></td>
                    <td><?php echo $row['EchteNaam']; ?></td>
                    <td><?php echo $row['UniekeVaardigheid']; ?></td>
                    <td><?php echo $row['prijs']; ?></td>
                    <td><button id="del" onclick="location.href='del2.php?id=<?php echo $row['id']?>'">DELETE</button></td>
                </tr>

                <?php
                    };
                    $conn->close();
                ?>
        </table>
        </div>
        <br>
        <!------------------------------ FOOTER ------------------------------>
   

<?php 
     include 'footer.php';
    ?>
</body>
</html>