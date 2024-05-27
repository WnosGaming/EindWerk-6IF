<?php
include 'connection.php';
include 'sessionCheckUser.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css">
    <title>Winkelmandje</title>
    
</head>
<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            /* Stijl voor de navigatiebalk */
        }

        .producten {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            margin-top: 0;
        }

        .product {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .product:not(:first-child) {
            margin-top: 20px;
        }

        #imgSchoenen {
            max-width: 100px;
            margin-right: 10px;
            vertical-align: middle;
        }

        .product-details {
            display: inline-block;
            vertical-align: middle;
        }

        .product-details b {
            display: block;
            margin-bottom: 5px;
        }

        .product-details a {
            text-decoration: none;
            color: red;
            margin-left: 10px;
        }

        .total {
            margin-top: 20px;
            text-align: right;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
    <?php include "navbar.php"; ?>
    <div class="producten">
        <div>
            <br><br><br>
            <h2>Aanvallers</h2>
        </div>
        <?php
        if ($user!="Login") {
            
            if (isset($_GET["productID"])) 
            {
                $product = $_GET['productID'];
                $aantal=1;
                print $klantID;
                
                $sql = "INSERT INTO `tblwinkelmandje` (`ID`, `klantID`, `productID`, `aantal`) VALUES (NULL, '$klantID', '$product', '$aantal')";
                if ($conn->query($sql) === TRUE) {
                    $melding = "Product is toegevoegd";
                    header("location: winkelmandje.php?melding=$melding");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        ?>
        <h3>Winkelmandje <?php echo $user; ?></h3>
        
        <?php
        if ($user!="Login")
         {
            $sql = "SELECT * FROM `tblwinkelmandje` WHERE klantID='$klantID'";
            $totaal = 0;
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            $product = $row['productID'];
            echo "Product: " . $row['productID'];
            $sql2 = "SELECT * FROM `tblproductenaanvallers` WHERE id='$product'";
            $result2 = $conn->query($sql2);
            while ($row2 = $result2->fetch_assoc()) { ?>
            <img id="imgSchoenen" alt="schoenen" src="img/<?php echo $row2['afbeelding'];?>">
            <?php echo $row2['naam']; ?>
            <b>EchteNaam: </b><?php echo $row2['EchteNaam']; ?>
            <b>UniekeVaardigheid: </b><?php echo $row2['UniekeVaardigheid']; ?>
            <b>Prijs: </b>€ <?php echo $row2['prijs']; ?>
            <?php $totaal += $row2['prijs']; ?>
            <b>Aantal: </b><?php echo $row['aantal']; ?>
            <a href="deleteWinkelmandje.php?productID=<?php echo $row['productID']; ?>">Verwijder</a>
            <?php }
            }
            $conn->close(); ?>
            <p>Totaal: € <?php echo $totaal; ?></p>

            
            <h4>Totale prijs: <?php echo $totaal; ?> euro</h4>
            <?php if ($totaal > 0) { ?>
                <button onclick="location.href='orderverwerken.php'">Koop</button>
            <?php } }
            else{
                print"Je moet eerst inloggen om een winkelmandje te gerbuiken.";
            }
            ?>
        
        
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
