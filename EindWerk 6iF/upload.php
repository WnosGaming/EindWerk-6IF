<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include_once("connection.php");

        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Controleer of het bestand een afbeelding is
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Controleer het bestandstype
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Controleer of uploadOk 0 is gezet door een fout
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // Probeer het bestand te uploaden
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                $filename = htmlspecialchars(basename($_FILES["fileToUpload"]["name"]));
                echo "The file ". $filename . " has been uploaded.";

                // Update de database
                $id = intval($_POST['id']); // Zorg dat je een ID-veld hebt in je formulier en valideer het
                $sql = "UPDATE tblproducten SET file='$filename' WHERE id=$id";
                
                if (mysqli_query($conn, $sql)) {
                    echo "Record updated successfully.";
                } else {
                    echo "Error updating record: " . mysqli_error($conn);
                }
            } else {
                echo "Sorry, there was an error uploading your file. Please try again.";
            }
        }

        // Sluit de databaseverbinding
        mysqli_close($conn);
    }
    ?>
    