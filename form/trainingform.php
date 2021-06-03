<?php

require_once 'configuration.php';
$error = null;
if (isset($_POST) && !empty($_POST)) {
    $error = [];
    if (empty($_POST['user_email']) && $_POST['user_email'] !== $_POST['confirm_user_email'] && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL) === false) {
        $error['email'] = 'Les emails ne sont pas identiques !!';
    }
    if (empty($_POST['user_password']) && $_POST['user_password'] !== $_POST['confirm_user_password']) {
        $error['password'] = 'Les mots de passe ne sont pas identiques !!';
    }
    if (strlen($_POST['user_password']) < 3 && strlen($_POST['user_password']) > 30) {
        $error['user_password'] = 'Votre password dois comporter 3 caractères minimum et 30 maximum !!';
    }
    if (empty($error)) {
        $email = $_POST['user_email'];
        $password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
        $adresse = $_POST['user_adresse'];
        $ville = $_POST['user_ville'];
        $region = $_POST['user_region'];
        $postal = $_POST['user_postal'];        
        $sql = "INSERT INTO training(email,password,adresse,ville,region,postal) VALUES ('$email','$password','$adresse','$ville','$region','$postal')";
        if ($mysqli->query($sql) === true) {
            $_SESSION['msg-flash'] = 'Votre compte à été créer avec succès !!';
            redirectToRoute('index.php');
        } else {
            $error = 'Une erreur est survenue, compte non créer !!';
        }
    }
}