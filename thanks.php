<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<?php
$errors = [];
if ($_SERVER['REQUEST_METHOD']==='POST') {
    if (!isset($_POST['user_firstName']) || $_POST['user_firstName'] === '')
        $errors[] = "Le prénom est obligatoire";
    if (!isset($_POST['user_lastName']) || $_POST['user_lastName'] === '')
        $errors[] = "Le nom est obligatoire";
    if (!isset($_POST['user_subject']) || $_POST['user_subject'] === 'Please select a subject')
        $errors[] = "Le choix d'un sujet est obligatoire";
    if (!isset($_POST['user_email']) || $_POST['user_email'] === '')
        $errors[] = "Le mail est obligatoire";
    if (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL))
        $errors[] = "Le format du mail n'est pas valide";
    if (!isset($_POST['user_phone']) || $_POST['user_phone'] === '')
        $errors[] = "Le téléphone est obligatoire";
    if(!isset($_POST['user_message'])||$_POST['user_message']==='')
        $errors[] = "Le message est obligatoire";
}
?>

<body>
<?php // Affichage des éventuelles erreurs
if (count($errors) > 0) : ?>
    <div>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php else: ?>
<p>Merci <?=$_POST['user_firstName']?> <?=$_POST['user_lastName']?> de nous avoir contacté à propos de “<?=$_POST['user_subject']?>”.<br><br>
Un de nos conseillers vous contactera soit à l’adresse <?=$_POST['user_email']?> ou par téléphone au <?='user_phone'?>
dans les plus brefs délais pour traiter votre demande :<br><br>
<?=$_POST['user_message']?>
</p>
<?php endif;?>
</body>
</html>
