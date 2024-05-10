<?php
    include 'connection.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        print "id=". $id;
        $sql = "DELETE FROM `tblproducten` WHERE id = '".$id."'";

        if ($conn->query($sql) === TRUE)
        {
            echo "Record deleted successfully";
            header('Location: addPage.php?melding=record verwijderd');

        }
        else 
        {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();

    }

?>