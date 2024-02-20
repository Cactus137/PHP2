<?php

namespace MVC\Controllers;

use MVC\Models\CategoryCourse;

require_once __DIR__ . '/../Models/CategoryCourse.php';

class CategoryCourseController
{
    public function list()
    {
        $categoryCourse = new CategoryCourse();
        $categories = $categoryCourse->getAll();
        require_once __DIR__ . '/../Views/Course/listCourse.php';
    }

    public function create()
    {
        require_once __DIR__ . '/../Views/Course/addCategory.php';
        if (isset($_POST['create_category'])) {
            if (isset($_POST['name_category']) || $_POST['name_category'] != '' || $_POST['name_category'] != null) {
                $new_name_category = trim($_POST['name_category']);
                $categoryCourse = new CategoryCourse();
                $categories = $categoryCourse->getAll();

                // Validates 
                if ($new_name_category == '') {
                    $_SESSION['error'] = 'Tên danh mục không được để trống';
                } else {
                    foreach ($categories as $key) {
                        extract($key);
                        if (strtolower($new_name_category) != strtolower($category[0]['name_category'])) {
                            if (strtolower($new_name_category) == strtolower($name_category)) {
                                $_SESSION['error'] = 'Tên danh mục đã tồn tại';
                            }
                        }
                    }
                }

                if (empty($_SESSION['error'])) {
                    $categoryCourse->create($new_name_category);
                    $_SESSION['success'] = 'Thêm thành công';
                    header('Location: index.php?url=createCategory');
                } else {
                    header('Location: index.php?url=createCategory');
                }
            }
        }
    }

    public function edit($id)
    {
        $categoryCourse = new CategoryCourse();
        $category = $categoryCourse->edit($id);
        require_once __DIR__ . '/../Views/Course/editCategory.php';
        if (isset($_POST['edit_category'])) {
            if (isset($_POST['name_category']) || $_POST['name_category'] != '' || $_POST['name_category'] != null) {
                $new_name_category = trim($_POST['name_category']);
                $categoryCourse = new CategoryCourse();
                $categories = $categoryCourse->getAll();

                // Validates 
                if ($new_name_category == '') {
                    $_SESSION['error'] = 'Tên danh mục không được để trống';
                } else {
                    foreach ($categories as $key) {
                        extract($key);
                        if (strtolower($new_name_category) != strtolower($category[0]['name_category'])) {
                            if (strtolower($name_category) == strtolower($name_category)) {
                                $_SESSION['error'] = 'Tên danh mục đã tồn tại';
                            }
                        }
                    }
                }

                if (empty($_SESSION['error'])) {
                    $categoryCourse->update($id, $new_name_category);
                    $_SESSION['success'] = 'Sửa thành công';
                    header('Location: index.php?url=editCategory&id=' . $id);
                } else {
                    header('Location: index.php?url=editCategory&id=' . $id);
                }
            }
        }
    }

    public function delete($id)
    {
        $categoryCourse = new CategoryCourse();
        $categoryCourse->delete($id);
        echo '<script>alert("Xóa thành công");</script>';
        header('Location: index.php');
    }
}
