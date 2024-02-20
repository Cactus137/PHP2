<?php

namespace App\Models;

use App\Models\BaseModel;

class Product extends BaseModel
{
    protected $table = 'products';

    public function getProductByCategoryId($id_category)
    {
        $sql = "SELECT * FROM $this->table WHERE id_category = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id_category]);
    }

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addProduct($name, $price, $id_category)
    {
        $sql = "INSERT INTO $this->table(name, price, id_category) VALUES (?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$name, $price, $id_category]);
    }

    public function getProductById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function editProduct($name, $price, $id_category, $id)
    {
        $sql = "UPDATE $this->table SET name = ?, price = ?, id_category = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $price, $id_category, $id]);
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
