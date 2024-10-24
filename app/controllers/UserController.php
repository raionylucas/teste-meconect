<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(filter_input(INPUT_POST, 'username'));
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $code = htmlspecialchars(filter_input(INPUT_POST, 'code'));
    $password = password_hash(filter_input(INPUT_POST, 'password'), PASSWORD_DEFAULT);

}
