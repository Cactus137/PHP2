<?php

namespace App\Controllers;

use App\Models\Student;

class StudentController extends BaseController
{
    public $student;
    public function __construct()
    {
        $this->student = new Student();
    }
    public function getStudent()
    {
        $students = $this->student->getListStudent();
        return $this->render('student.index', compact('students'));
    }
    public function addStudent()
    {
        return $this->render('student.add');
    }
    public function postStudent()
    {
        if (isset($_POST['btn-submit'])) {
            $error = [];
            $name = $_POST['name'];
            $year_of_birth = $_POST['year_of_birth'];
            $phone_number = $_POST['phone_number'];

            if (empty($name)) {
                $error[] = 'Vui lòng nhập tên sinh viên';
            }
            if (empty($year_of_birth)) {
                $error[] = 'Vui lòng nhập năm sinh';
            }
            if (empty($phone_number)) {
                $error[] = 'Vui lòng nhập số điện thoại';
            }

            if (count(($error)) > 0) {
                redirect('errors', $error, "add-student");
            } else {
                $check = $this->student->addStudent(NULL, $name, $year_of_birth, $phone_number);
                if ($check) {
                    redirect('success', "Thêm thành công", "add-student");
                }
            }
        }
    }
    public function detailStudent($id)
    {
        $student = $this->student->detailStudent($id);
        return $this->render('student.edit', compact('student'));
    }
    public function editStudent($id)
    {
        if (isset($_POST['btn-submit'])) {
            $error = [];
            $name = $_POST['name'];
            $year_of_birth = $_POST['year_of_birth'];
            $phone_number = $_POST['phone_number'];

            if (empty($name)) {
                $error[] = 'Vui lòng nhập tên sinh viên';
            }
            if (empty($year_of_birth)) {
                $error[] = 'Vui lòng nhập năm sinh';
            }
            if (empty($phone_number)) {
                $error[] = 'Vui lòng nhập số điện thoại';
            }

            if (count(($error)) > 0) {
                redirect('errors', $error, "detail-student/" . $id);
            } else {
                $check = $this->student->editStudent($id, $name, $year_of_birth, $phone_number);
                if ($check) {
                    redirect('success', "Sửa thành công", "detail-student/" . $id);
                }
            }
        }
    }
    public function deleteStudent($id)
    {
        $check = $this->student->deleteStudent($id);
        if ($check) {
            redirect('success',  "Xóa thành công", '/');
        }
    }
}
