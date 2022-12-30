<?php
    require 'theme/template/header.php';
?>
        <h1>Supprimer la tâche <q>Xxx</q></h1>
        <form action="" method="post">
            <div class="form">
                <div class="form__group">
                    <p>Êtes-vous sûr de vouloir supprimer la tâche <q>Xxx</q> ?</p>
                    <p>Attention, cette action est irréversible.</p>
                </div>
                <div class="form__submit">
                    <button class="button filled"><i class="icon"></i>Supprimer définitivement</button>
                    <a href="index.php" class="button text"><i class="icon"></i>Retour</a>
                </div>
            </div>
        </form>
<?php
    require 'theme/template/footer.php';
?>