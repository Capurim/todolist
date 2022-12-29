<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo list</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="theme/style.min.css">
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
        <h1>Mes tâches</h1>
        <div class="list">
            <div class="list__header">
                <div class="list__col main">
                    <div class="list__sub-col">Nom de la tâche</div>
                    <div class="list__sub-col date">Échéance</div>
                </div>
                <div class="list__col">Statut</div>
            </div>
            <div class="list__data">
                <div class="list__col main">
                    <div class="list__sub-col">
                        <a href="edit.php" class="task">Lorem ipsum.</a>
                    </div>
                    <div class="list__sub-col date with-icon">
                        1<sup>er</sup> janvier
                    </div>
                </div>
                <div class="list__col"><a class="chip with-icon not-started" href="#">Non démarré</a></div>
            </div>
            <div class="list__data">
                <div class="list__col main">
                    <div class="list__sub-col">
                        <a href="edit.php" class="task">Lorem ipsum.</a>
                    </div>
                    <div class="list__sub-col date with-icon">
                        1<sup>er</sup> janvier
                    </div>
                </div>
                <div class="list__col"><a class="chip with-icon in-progress" href="#">En cours</a></div>
            </div>
            <div class="list__data">
                <div class="list__col main">
                    <div class="list__sub-col">
                        <a href="edit.php" class="task">Lorem ipsum.</a>
                    </div>
                    <div class="list__sub-col date with-icon">
                        1<sup>er</sup> janvier
                    </div>
                </div>
                <div class="list__col"><a class="chip with-icon waiting" href="#">En attente</a></div>
            </div>
            <div class="list__data">
                <div class="list__col main">
                    <div class="list__sub-col">
                        <a href="edit.php" class="task">Lorem ipsum.</a>
                    </div>
                    <div class="list__sub-col date with-icon">
                        1<sup>er</sup> janvier
                    </div>
                </div>
                <div class="list__col"><a href="#" class="chip with-icon completed">Terminé</a></div>
            </div>
        </div>
    </div>
    <div class="footer">
        <a href="https://github.com/capurim" target="_blank" rel="noopener noreferrer"><i class="icon"></i> capurim</a>
    </div>
</body>
</html>