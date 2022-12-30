<?php
    require 'theme/template/header.php';
?>
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
<?php
    require 'theme/template/footer.php';
?>