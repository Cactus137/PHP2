<?php

include_once './Models/Product.php';

<<<<<<< HEAD
function listProduct()
{

    $listProduct = getListProduct();
    include_once './Views/layout/header.php';
    include_once './Views/Product/listProduct.php';
    include_once './Views/layout/footer.php';

}

function addProduct()
{
    include_once './Views/Product/addProduct.php';

}

function editProduct()
{
    echo "Edit Product";

}

function deleteProduct()
{
    echo "Delete Product";

}


?>
=======
class ProductController
{
    public function show()
    {
        $product = new Product();
        $products = $product->getListProduct();
        include_once './Views/Product/index.php';
    }

    public function create()
    {
    }

    public function edit()
    {
    }

    public function update()
    {
        echo "Delete Product";
    }

    public function destroy()
    {
    }
}
>>>>>>> 4da4639 (done)
