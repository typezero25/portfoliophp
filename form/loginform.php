<?php

$error = null;

if (isset($_POST['user_name']) && !empty($_POST['user_name']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $sql = 'SELECT * FROM users WHERE pseudo="'.$_POST['user_name'].'" LIMIT 1';
    if ($result = $mysqli->query($sql)) {
        if ($result->num_rows > 0) {
            //echo _dump($result->fetch_assoc());
            $user = $result->fetch_assoc();
            if (password_verify($_POST['password'], $user['password']) === true) {
                $_SESSION['msg-flash'] = 'Salut '.$user['pseudo'];
                $_SESSION['user'] = $user;

                redirectToRoute('index.php');
            }
        }
        $error = 'Pseudo ou mot de passe incorrect !!';

        /* Libération du jeu de résultats */
        $result->close();
    }
}
