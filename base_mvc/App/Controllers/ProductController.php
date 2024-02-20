<?php

namespace App\Controllers;

use App\Models\Product;

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
        return $this->render('product.list', ['products' => $products]);
    }
    // view add product
    public function addProduct()
    {
        return $this->render('product.add');
    }
    // add product handle
    public function postProduct()
    {
        if (isset($_POST['btn-add'])) {
            // Get value
            $name = trim($_POST['name']);
            $price = trim((int)$_POST['price']);

            // Check validate
            $error = [];
            if (empty($name)) {
                $error['name'] =  'Please fill in the product name!';
            }
            if (empty($price)) {
                $error['price'] =  'Please fill in the product price!';
            } else if (!is_numeric($price)) {
                $error['price'] =  'Product price is number!';
            }

            if (count($error) >= 1) {
                flash('errors', $error, 'add-product');
            } else {
                $check = $this->product->addProduct($name, $price);

                if ($check) {
                    flash('success', 'Add product success!', 'list-product');
                } else {
                    flash('errors', 'Add product fail!', 'add-product');
                }
            }
        }
    }

    public function detail($id)
    {
        $product = $this->product->detailProduct($id);
        return $this->render('product.edit', compact('product'));
    }

    public function editProduct($id)
    {
        if (isset($_POST['btn-edit'])) {
            // Get value
            $name = trim($_POST['name']);
            $price = trim((int)$_POST['price']);

            // Check validate
            $error = [];
            if (empty($name)) {
                $error['name'] =  'Please fill in the product name!';
            }
            if (empty($price)) {
                $error['price'] =  'Please fill in the product price!';
            } else if (!is_numeric($price)) {
                $error['price'] =  'Product price is number!';
            }

            if (count($error) >= 1) {
                flash('errors', $error, 'add-product');
            } else {
                $check = $this->product->editProduct($name, $price, $id);

                if ($check) {
                    flash('success', 'Add product success!', 'list-product');
                } else {
                    flash('errors', 'Add product fail!', 'detail-product');
                }
            }
        }
    }

    public function deleteProduct($id)
    {
        $check = $this->product->deleteProduct($id);
        if ($check) {
            flash('success', 'Delete product success!', 'list-product');
        } else {
            flash('errors', 'Delete product fail!', 'list-product');
        }
    }
}
