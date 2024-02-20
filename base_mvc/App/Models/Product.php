<?php

namespace App\Models;

use App\Models\BaseModel;

class Product extends BaseModel
{
    protected $table = 'products';

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addProduct($name, $price)
    {
        $sql = "INSERT INTO $this->table(name, price) VALUES (?, ?)"; 
        $this->setQuery($sql);
        return $this->execute([$name, $price]);
    }

    public function detailProduct($id) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function editProduct($name, $price, $id)
    {
        $sql = "UPDATE $this->table SET name = ?, price = ? WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$name, $price, $id]);
    }
    
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
