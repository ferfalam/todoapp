<?php

include('./connect.php');

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO todo (title, description, priority) VALUES (:title, :description, :priority)");
$stmt->bindParam(':title', $title);
$stmt->bindParam(':description', $description);
$stmt->bindParam(':priority', $priority);


// insert a row
// $title = $_POST["title"];
// $description = $_POST["description"];
// $priority = $_POST["priority"];

extract($_POST);

$result = $stmt->execute();

if ($result) {
    header("location:index.php");
} else {
    die('Something wrong');
}

?>