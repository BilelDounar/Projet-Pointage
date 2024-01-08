<?php


function getPostValue($key)
{
    if (!empty($_POST[$key])) {
        echo $_POST[$key];
    }
}

function viewError($err, $key)
{
    if (!empty($err[$key])) {
        echo $err[$key];
    }
}

function cleanXss($key)
{
    return trim(strip_tags($_POST[$key]));
}



function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

function isLogged()
{
    if (!empty($_SESSION['user']['id'])) {
        if (!empty($_SESSION['user']['nom'])) {
            if (!empty($_SESSION['user']['prenom'])) {
                if (!empty($_SESSION['user']['mail'])) {
                    if (!empty($_SESSION['user']['token'])) {
                        return true;
                    }
                }
            }
        }
    }
    return false;
}

function isAdmin()
{
    if (isLogged()) {
        if ($_SESSION['user']['role'] == 'admin') {
            return true;
        }
    }
    return false;
}
