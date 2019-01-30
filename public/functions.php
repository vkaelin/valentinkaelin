<?php

function getURL($path) {
    return 'https://valentinkaelin.ch/' . $path;
}

function verifyInput($var) {
    $var = trim($var); // Enlève les espaces, retour à la ligne etc
    $var = stripslashes($var); // Enlève tous les backslashs
    $var = htmlspecialchars($var);
    return $var;
}

function console_log($data){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}

function getUser($user, $chat) {
    if ($chat) {
        if (file_exists('../img/' . basename($user. '.png'))) {
            return $user;
        }
        else {
            return 'user';
        }
    }
    else {
        if (file_exists('./img/' . basename($user. '.png'))) {
            return $user;
        }
        else {
            return 'user';
        }
    }

}

function getClassChangelog($number) {
    switch ($number) {
        case 1:
            return "is-a";
            break;
        case 2:
            return "is-f";
            break;
        case 3:
            return "is-u";
            break;
        case 4:
            return "is-d";
            break;
    }
    return "Le nombre entré n'est pas valide";
}

function getIp()
{
    if ( isset($_SERVER['HTTP_X_FORWARDED_FOR']) )
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $ip = $_SERVER['REMOTE_ADDR'];

    return $ip;
}
