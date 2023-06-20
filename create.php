<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une tâches</title>
</head>
<body>
    <h1>Créer une tâche</h1>
    <!-- 
        Titre : title
        Description : description
        Priorité : priority
        Déjà fait  : done 
     -->

     <form action="store.php" method="post">
        <div>
            <label for="title">Titre</label> <br>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Description</label> <br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="title">Priorité</label> <br>
            <input type="radio" name="priority" id="" value="haut" required> <b>Haut</b> <br>
            <input type="radio" name="priority" id="" value="moyen" required> <b>Moyen</b> <br>
            <input type="radio" name="priority" id="" value="bas" required> <b>Bas</b> <br>
        </div>

        <input type="submit" value="Envoyer">
     </form>
</body>
</html>