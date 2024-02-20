<?php

namespace MVC\Controllers;

use MVC\Models\Course;
use MVC\Models\CategoryCourse;

require_once __DIR__ . '/../Models/Course.php';
require_once __DIR__ . '/../Models/CategoryCourse.php';

class CourseController
{
    public function list($id)
    {
        $course = new Course();
        $courses = $course->getCourse($id);
        $categoryCourse = new CategoryCourse();
        $categories = $categoryCourse->getAll();
        require_once __DIR__ . '/../Views/Course/listDetailCourse.php';
    }

    public function create()
    {
        $categoryCourse = new CategoryCourse();
        $categories = $categoryCourse->getAll();
        require_once __DIR__ . '/../Views/Course/addCourse.php';
        if (isset($_POST['create_course'])) {
            $name_course = $_POST['name_course'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            // Check image
            if ($_FILES['image']['name'] != null) {
                $image = $_FILES['image']['name'];
                $target_dir = "Public/images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
            } else {
                $image = 'default.png';
            }
            // Validates
            if ($name_course == '') {
                $_SESSION['error']['name_course'] = 'Vui lòng nhập tên khóa học';
            }
            if ($price == '') {
                $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học';
            } else {
                if (!is_numeric($price)) {
                    $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học là số';
                } else {
                    if ($price < 0) {
                        $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học lớn hơn 0';
                    }
                }
            }
            if ($id_category == '') {
                $_SESSION['error']['id_category'] = 'Vui lòng chọn danh mục';
            }

            if (empty($_SESSION['error'])) {
                $course = new Course();
                $course->create($id_category, $name_course, $image, $price);
                echo '<script>alert("Thêm thành công");</script>';
            } else {
                header('Location: index.php?url=createCourse');
            }
        }
    }

    public function edit($id)
    {
        $course = new Course();
        $course = $course->edit($id);
        $categoryCourse = new CategoryCourse();
        $categories = $categoryCourse->getAll();
        require_once __DIR__ . '/../Views/Course/editCourse.php';

        if (isset($_POST['edit_course'])) {
            $name_course = $_POST['name_course'];
            $price = $_POST['price'];
            $id_category = $_POST['id_category'];
            // Check image
            if ($_FILES['image']['name'] != null) {
                $image = $_FILES['image']['name'];
                $target_dir = "Public/images/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                move_uploaded_file($_FILES['image']['tmp_name'], $target_dir . $image);
            } else {
                $image = $course[0]['image'];
            }
            // Validates
            if ($name_course == '') {
                $_SESSION['error']['name_course'] = 'Vui lòng nhập tên khóa học';
            }
            if ($price == '') {
                $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học';
            } else {
                if (!is_numeric($price)) {
                    $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học là số';
                } else {
                    if ($price < 0) {
                        $_SESSION['error']['price'] = 'Vui lòng nhập giá khóa học lớn hơn 0';
                    }
                }
            }
            if ($id_category == '') {
                $_SESSION['error']['id_category'] = 'Vui lòng chọn danh mục';
            }

            if (empty($_SESSION['error'])) {
                $course = new Course();
                $course->update($id, $id_category, $name_course, $image, $price);
                echo '<script>alert("Sửa thành công");</script>';
            } else {
                header('Location: index.php?url=editCourse&id=' . $id);
            }
        }
    }

    public function delete($id)
    {
        $course = new Course();
        $course->delete($id);
        echo '<script>alert("Xóa thành công");</script>';
    }
}
