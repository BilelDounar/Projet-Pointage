<?php

/**
 * @param $tableau
 * @return void
 */
function debug($tableau) {
    echo '<pre style="height:200px;overflow-y: scroll;font-size: .5rem;padding: .6rem;font-family: Consolas, Monospace; background-color: #000;color:#fff;">';
    print_r($tableau);
    echo '</pre>';
}

/**
 * @param $admin
 * @return void
 */
function redirectNotFound($admin = false)
{
    header("HTTP/1.0 404 Not Found");
    if($admin) {
        header('Location: ../404.php');
    } else {
        header('Location: 404.php');
    }
}

/**
 * @param $page
 * @param $isAdmin
 * @param $directoryAdmin
 * @return bool
 */
function isWebpack($page, $isAdmin = false, $directoryAdmin = 'admin'): bool
{
    $route = $_SERVER['PHP_SELF'];
    $fileName = basename($_SERVER['PHP_SELF'], '.php');
    if($fileName == $page) {
        if($isAdmin) {
            if(str_contains($route, $directoryAdmin)) {
                return true;
            }
        } else {
            return true;
        }
    }
    return false;
}


/**
 * @param $data
 * @return void
 */
function showJson($data)
{
    header('Content-type: application/json');
    $json = json_encode($data);
    if($json){
        die($json);
    }
    else {
        die('Error in json encoding');
    }
}


/**
 * @param $isAdmin
 * @return true|void
 */
function isAjaxRequest($isAdmin = false)
{
    if (strtolower(filter_input(INPUT_SERVER, 'HTTP_X_REQUESTED_WITH')) === 'xmlhttprequest') {
        return true;
    }
    redirectNotFound($isAdmin);
}