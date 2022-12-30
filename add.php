<?php
    require 'app/db.php';
    require 'theme/template/header.php';
    
    $name = '';
    $date = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Crée nos variables.
        $name = $_POST['name'];
        $date = $_POST['date'];
        $state = $_POST['state'];

        // Teste nos données du formulaire.
        if (strlen($name) < 5) {
            $errors['name'] = 'Le nom de votre tâche doit faire au minimum 5 caractères.';
        }
        
        if (empty($date)) { // TODO: modifier avec regex.
            $errors['date'] =  'Vous devez sélectionner une date.';
        }

        // Soit j'affiche mes erreurs, soit j'insers les données dans la base.
        if (isset($errors)) {
            $notification = implode("<br>", $errors);
        } else {
            $query = $db->prepare("INSERT INTO `tasks` (`name`, `date`, `state`) VALUES (?, ?, ?)");
            $query->execute([$_POST['name'], $_POST['date'], $_POST['state']]);
            $query->closeCursor();
        }
    }
?>
        <h1>Ajouter une tâche</h1>
        <form action="" method="post">
            <div class="form">
                <div class="form__group">
                    <label for="name">Nom de la tâche</label>
                    <input type="text" name="name" id="name" value="<?= isset($errors['name']) ? '' : htmlspecialchars($name) ?>">
                </div>
                <div class="form__group">
                    <label for="date">Échéance</label>
                    <input type="date" name="date" id="date" value="<?= isset($errors['date']) ? '' : htmlspecialchars($date) ?>">
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
<?php if (isset($notification) && !empty($notification)): ?>
        <div class="notification"><?= $notification ?></div>
<?php
    endif;
    require 'theme/template/footer.php';
?>