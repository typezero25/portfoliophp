<?php

$error = null;

if (isset($_POST['user_name']) && !empty($_POST['user_name']) && isset($_POST['user_password']) && !empty($_POST['user_password'])) {
    $sql = 'SELECT * FROM users WHERE pseudo="'.$_POST['user_name'].'" LIMIT 1';
    echo 'aqwxsz';
    if ($result = $mysqli->query($sql)) {
        echo 'asxxcvd';
        if ($result->num_rows > 0) {

            //echo _dump($result->fetch_assoc());
            $user = $result->fetch_assoc();
            echo 'test';
            if (password_verify($_POST['user_password'], $user['password']) === true) {
                $_SESSION['msg-flash'] = 'Salut '.$user['pseudo'];
                $_SESSION['user'] = $user;

                redirectToRoute('index.php');
                echo var_dump($_SESSION['user']);
            }
        }
        $error = 'Pseudo ou mot de passe incorrect !!';

        /* Libération du jeu de résultats */
        $result->close();
    }
}
