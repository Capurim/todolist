<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link rel="stylesheet" href="theme/style.min.css" as="style" onload="this.rel='stylesheet'">
    <script async src="theme/main.min.js"></script>
</head>
<body>
    <div class="header">
        <div class="header__left">
            <a class="header__title" href=".">Todo list</a>
        </div>
        <div class="header__right">
            <a href="add.php" class="button filled new-task" title="Nouvelle tâche"><i class="icon"></i><span>Nouvelle tâche</span></a>
        </div>
    </div>
    <div class="content">
        <h1>Ajouter une tâche</h1>
        <form action="" method="post">
            <div class="form">
                <div class="form__group">
                    <label for="name">Nom de la tâche</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="form__group">
                    <label for="date">Échéance</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="form__group">
                    <label for="state">Statut</label>
                    <select name="state" id="state">
                        <option value="0">Non commencé</option>
                        <option value="1">En cours</option>
                        <option value="2">En attente</option>
                        <option value="3">Terminé</option>
                    </select>
                </div>
                <div class="form__submit">
                    <button class="button filled"><i class="icon"></i>Créer la tâche</button>
                    <a href="index.php" class="button text"><i class="icon"></i>Retour</a>
                </div>
            </div>
        </form>
    </div>
    <div class="notification">
        Erreur, vous devez compléter tous les champs.
    </div>
</body>
</html>