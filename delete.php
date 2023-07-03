<?php

    # Modification dans master

    include('./connect.php');

    $id=$_GET['id'];

    $sql = "DELETE FROM todo WHERE id=$id";

    if ($conn->exec($sql)) {
        echo "Record deleted successfully";
        header("location:index.php");
    } else {
        die("Error deleting record");
    }

    # Modiification faite dans new branch