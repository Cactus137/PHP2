<?php

namespace MVC\Models;

use MVC\Config\DatabaseConnect;

require_once __DIR__ . '/DatabaseConnect.php'; 

class CategoryCourse extends DatabaseConnect
{
    public function getAll()
    {
        $query = "SELECT * FROM categories";
        return $this->getData($query);
    }

    public function create($name_category)
    {
        $query = "INSERT INTO categories(name_category) VALUES ('$name_category');";
        $this->getData($query, false);
    }

    public function edit($id)
    {
        $query = "SELECT * FROM categories WHERE id = $id";
        return $this->getData($query);
    }

    public function update($id, $name_category)
    {
        $query = "UPDATE categories SET name_category = '$name_category' WHERE id = $id";
        $this->getData($query, false);
    }

    public function delete($id)
    {
        $query = "DELETE FROM categories WHERE id = $id";
        $this->getData($query, false);
    }
}
