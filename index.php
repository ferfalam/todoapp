<?php 
    include("./connect.php");

    $stmt = $conn->prepare("SELECT * FROM todo");
    $stmt->execute();
    $todos =$stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TodoApp</title>


    <style>
        table{
            border: 2px solid #000000;
            border-collapse: collapse;
        }

        table td, table th{
            border: 2px solid #000000;
            padding: 10px;
        }

        tr.done{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Liste des tâches à faire</h1>
    <hr>
    <a href="create.php" class="">Créer une tâche</a>
    <hr>
    <table>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Niveau de priorité</th>
            <th>Action</th>
        </tr>
        
        <?php foreach ($todos as $todo) { ?>
            <tr class="<?php if($todo["done"] == "1") echo("done") ?>">
                <td><?php echo($todo["title"]) ?></td>
                <td>
                    <p><?php echo($todo["description"]) ?></p>
                </td>
                <td>
                    <?php echo($todo["priority"]) ?>
                </td>
                <td>
                    <a href="edit.php?id=<?php echo($todo["id"]) ?>">Modifier</a>
                    <a href="delete.php?id=<?php echo($todo["id"]) ?>" onclick="return confirm('Are you sure?')">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>