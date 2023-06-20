<?php 
    include("./connect.php");
    $id = $_GET["id"];

    $stmt = $conn->prepare("SELECT * FROM todo WHERE id=$id");
    $stmt->execute();
    $todo = $stmt->fetchAll()[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une tâches</title>
</head>
<body>
    <h1>Modifier une tâche</h1>
    <!-- 
        Titre : title
        Description : description
        Priorité : priority
        Déjà fait  : done 
     -->

     <form action="update.php?id=<?php echo($todo["id"]) ?>" method="post">
        <div>
            <label for="title">Titre</label> <br>
            <input type="text" name="title" id="title" value="<?php echo($todo["title"]) ?>" required>
        </div>
        <div>
            <label for="description">Description</label> <br>
            <textarea name="description" id="description" cols="30" rows="10"><?php echo($todo["description"]) ?></textarea>
        </div>
        <div>
            <label for="title">Priorité</label> <br>
            <input type="radio" name="priority" id="" value="haut" <?php if($todo["priority"] == "haut"){ ?> checked <?php } ?> required> <b>Haut</b> <br>
            <input type="radio" name="priority" id="" value="moyen" <?php if($todo["priority"] == "moyen"){ ?> checked <?php } ?> required> <b>Moyen</b> <br>
            <input type="radio" name="priority" id="" value="bas" <?php if($todo["priority"] == "bas"){ ?> checked <?php } ?> required> <b>Bas</b> <br>
        </div>

        <div>
            <label for="done">Déjà fait ?</label> <input type="checkbox" name="done" id="done" <?php if($todo["done"] == "1"){ ?> checked <?php } ?> value="yes">
        </div>
        <br> <br>
        <input type="submit" value="Envoyer">
     </form>
</body>
</html>