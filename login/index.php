<?php

require './model.php';

require_once '../helpers/form-helper.php';
require_once '../helpers/auth-helper.php';

$hasError = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_infos = [
        'username' => sanitize_input($_POST['username']),
        'password' => sanitize_input($_POST['password']),
    ];

    $user = checkUser($user_infos['username'], $user_infos['password']);
    if (isset($user)) {
        init_session();
        $_SESSION['login'] = $user;
        
        $redirect = isset($_GET['redirect']) ? urldecode($_GET['redirect']) : '../admin' ;
        redirect($redirect);
    } else {
        $hasError = true;
    }
}


require './view.php';
