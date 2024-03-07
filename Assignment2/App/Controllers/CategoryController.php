<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController
{
    public $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        $categories = $this->category->getAll();
        return $this->render('category.list', compact('categories'));
    }

    public function detailCategory($id)
    {
        $category = $this->category->getCategoryById($id);
        return $this->render('category.detail', compact('category'));
    }

    public function addCategory()
    {
        return $this->render('category.add');
    }

    public function postCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name_category']);

            $error = [];
            if (empty($name)) {
                $error['name'] = "Please enter name category";
            }

            if (count($error) > 0) {
                flash('errors', $error, 'add-category');
            } else {
                $check = $this->category->addCategory($name);
                if ($check) {
                    flash('success', 'Add category success!', '');
                } else {
                    flash('errors', 'Add category fail!', 'add-category');
                }
            }
        }
    }

    public function editCategory($id)
    {
        $category = $this->category->getCategoryById($id);
        return $this->render('category.edit', compact('category'));
    }

    public function handleEditCategory($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name_category']);

            $error = [];
            if (empty($name)) {
                $error['name'] = "Please enter name category";
            }

            if (count($error) > 0) {
                flash('errors', $error, 'edit-category/' . $id);
            } else {
                $check = $this->category->editCategory($name, $id);
                if ($check) {
                    flash('success', 'Edit category success!', '');
                } else {
                    flash('errors', 'Edit category fail!', 'edit-category/' . $id);
                }
            }
        }
    }

    public function deleteCategory($id)
    {
        $check = $this->category->deleteCategory($id);
        if ($check) {
            flash('success', 'Delete category success!', '');
        } else {
            flash('errors', 'Delete category fail!', '');
        }
    } 
}
