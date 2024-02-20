<?php

namespace App\Models;

use App\Models\BaseModel;

class Category extends BaseModel
{
    protected $table = 'categories';

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addCategory($name)
    {
        $sql = "INSERT INTO $this->table(name) VALUES (?)";
        $this->setQuery($sql);
        return $this->execute([$name]);
    }

    public function getCategoryById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function editCategory($name, $id)
    {
        $sql = "UPDATE $this->table SET name = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $id]);
    }

    public function deleteCategory($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
