<?php
    require 'theme/template/header.php';
?>
        <h1>Modifier la tâche «&nbsp;XXX&nbsp;»</h1>
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
                <div class="form__group">
                    <a href="delete.php" class="delete-task">Supprimer la tâche.</a>
                </div>
                <div class="form__submit">
                    <button class="button filled"><i class="icon"></i>Modifier la tâche</button>
                    <a href="index.php" class="button text"><i class="icon"></i>Retour</a>
                </div>
            </div>
        </form>
<?php
    require 'theme/template/footer.php';
?>