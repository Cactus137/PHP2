<?php

namespace MVC\Models;

use MVC\Config\DatabaseConnect;

require_once __DIR__ . '/DatabaseConnect.php';

class Course extends DatabaseConnect
{
    public function getCourse($id)
    {
        if ($id == 0) {
            $query = "SELECT * FROM courses";
            return $this->getData($query);
        } else {
            $query = "SELECT * FROM courses WHERE id_category = $id";
            return $this->getData($query);
        }
    }

    public function create($id_category, $name_course, $image, $price)
    {
        $query = "INSERT INTO courses(id_category, name_course, image, price) VALUES ('$id_category', '$name_course', '$image', '$price');";
        $this->getData($query, false);
    }

    public function edit($id)
    {
        $query = "SELECT * FROM courses WHERE id = $id";
        return $this->getData($query);
    }

    public function update($id, $id_category, $name_course, $image, $price)
    {
        $query = "UPDATE courses SET id_category = '$id_category', name_course = '$name_course', image = '$image', price = '$price' WHERE id = $id";
        $this->getData($query, false);
    }

    public function delete($id)
    {
        $query = "DELETE FROM courses WHERE id = $id";
        $this->getData($query, false);
    }
}
