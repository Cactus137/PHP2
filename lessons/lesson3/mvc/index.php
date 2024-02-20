<?php

include_once 'Controllers/ProductController.php';

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
<<<<<<< HEAD
        listProduct();
        break;
    case 'addProduct':
        addProduct();
        break;
    case 'editProduct':
        editProduct();
        break;
    case 'delProduct':
        deleteProduct();
=======
        break;
    case 'addProduct':
        break;
    case 'editProduct':
        break;
    case 'delProduct':
>>>>>>> 4da4639 (done)
        break;
    default: 
        break;
} 
?>