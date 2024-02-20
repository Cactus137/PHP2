<?php

use MVC\Controllers\CourseController;
use MVC\Controllers\CategoryCourseController;

require __DIR__ . '/Controllers/CourseController.php';
require __DIR__ . '/Controllers/CategoryCourseController.php';

session_start();

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        $categoryCourseController = new CategoryCourseController();
        $categoryCourseController->list();
        break;
    case 'list':
        $categoryCourseController = new CategoryCourseController();
        $categoryCourseController->list();
        break;
    case 'listCourse':
        $id = $_GET['id'];
        $courseController = new CourseController();
        $courseController->list($id);
        break;
    case 'createCategory':
        $categoryCourseController = new CategoryCourseController();
        $categoryCourseController->create if (isset($_POST['create_category'])) {();
        break;
    case 'editCategory':
        $id = $_GET['id'];
        $categoryCourseController = new CategoryCourseController();
        $categoryCourseController->edit($id);
        break;
    case 'deleteCategory':
        $id = $_GET['id'];
        $categoryCourseController = new CategoryCourseController();
        $categoryCourseController->delete($id);
        break;
    case 'createCourse': 
        $courseController = new CourseController();
        $courseController->create();
        break;
    case 'editCourse':
        $id = $_GET['id'];
        $courseController = new CourseController();
        $courseController->edit($id);
        break;
    case 'deleteCourse':
        $id = $_GET['id'];
        $courseController = new CourseController();
        $courseController->delete($id);
        break;
    default:
        $categoryCourseController = new CategoryCourseController();
        $categoryCourseController->list();
        break;
}
