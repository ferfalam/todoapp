<?php

include('./connect.php');

// prepare sql and bind parameters
$stmt = $conn->prepare("UPDATE todo SET
                         title = :title, 
                         description = :description, 
                         priority = :priority, 
                         done = :done
                         WHERE id=:id");

$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':priority', $priority);
$stmt->bindParam(':done', $done);
$stmt->bindParam(':id', $id);


// insert a row
// $title = $_POST["title"];
// $description = $_POST["description"];
// $priority = $_POST["priority"];

extract($_POST);
$done = isset($done) ? 1 : 0;
extract($_GET);

$result = $stmt->execute();

if ($result) {
    header("location:index.php");
} else {
    die('Something wrong');
}

?>