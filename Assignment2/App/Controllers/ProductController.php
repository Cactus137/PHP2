<?php

namespace App\Controllers;

use App\Models\Product;
use App\Models\Category;

class ProductController extends BaseController
{
    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function index()
    {
        $products = $this->product->getAll();
        return $this->render('product.list', compact('products'));
    }

    public function addProduct()
    {
        $categories = new Category();
        $listCategory = $categories->getAll();
        return $this->render('product.add', compact('listCategory'));
    }

    public function handleAddProduct()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name_product']);
            $price = trim($_POST['price_product']);
            $id_category = $_POST['id_category'];

            $error = [];
            if (empty($name)) {
                $error['name'] = "Please enter name product";
            }
            if (empty($price)) {
                $error['price'] = "Please enter price product";
            } else if (!is_numeric($price)) {
                $error['price'] = "Price must be a number";
            }
            if (empty($id_category) || $id_category == -1) {
                $error['id_category'] = "Please choose category";
            }

            if (count($error) > 0) {
                flash('errors', $error, 'add-product');
            } else {
                $check = $this->product->addProduct($name, $price, $id_category);
                if ($check) {
                    flash('success', 'Add product success!', 'list-product');
                } else {
                    flash('errors', 'Add product fail!', 'add-product');
                }
            }
        }
    }

    public function editProduct($id)
    {
        $product = $this->product->getProductById($id);
        $categories = new Category();
        $listCategory = $categories->getAll();
        $data = compact('product', 'listCategory');
        return $this->render('product.edit', compact('data'));
    }

    public function handleEditProduct($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name_product']);
            $price = trim($_POST['price_product']);
            $id_category = $_POST['id_category'];

            $error = [];
            if (empty($name)) {
                $error['name'] = "Please enter name product";
            }
            if (empty($price)) {
                $error['price'] = "Please enter price product";
            } else if (!is_numeric($price)) {
                $error['price'] = "Price must be a number";
            }
            if (empty($id_category) || $id_category == -1) {
                $error['id_category'] = "Please choose category";
            }

            if (count($error) > 0) {
                flash('errors', $error, 'edit-product/' . $id);
            } else {
                $check = $this->product->editProduct($id, $name, $price, $id_category);
                if ($check) {
                    flash('success', 'Edit product success!', 'list-product');
                } else {
                    flash('errors', 'Edit product fail!', 'edit-product/' . $id);
                }
            }
        }
    }

    public function deleteProduct($id)
    {
        $check = $this->product->deleteProduct($id);
        if ($check) {
            flash('success', 'Delete category success!', 'list-product');
        } else {
            flash('errors', 'Delete category fail!', 'list-product');
        }
    }
}
