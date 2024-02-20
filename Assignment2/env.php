<?php
const BASE_URL = "http://localhost/PHP2/Assignment2/";
const DBHOST = 'localhost';
const DBNAME = 'product_asm2';
const DBCHARSET = 'utf8';
const DBUSER = 'root';
const DBPASS = '';

function route($url)
{
    return BASE_URL . $url;
}
// key co the truyen success hoac errors
function flash($key, $msg, $route)
{
    $_SESSION[$key] = $msg;
    switch ($key) {
        case 'success':
            unset($_SESSION['errors']);
            break;
        case 'errors':
            unset($_SESSION['success']);
            break;
    }
    header('location:' . BASE_URL . $route . '?msg=' . $key);
    die;
}
