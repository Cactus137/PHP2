<?php

include_once 'db.php';

<<<<<<< HEAD
function getListProduct()
{
    $sql = "SELECT * FROM products";

    return getData($sql);
}



?>
=======
class Product extends DB
{
    public function getListProduct()
    {
        $sql = "SELECT * FROM products";

        return $this->getData($sql); 
    }
}
>>>>>>> 4da4639 (done)
