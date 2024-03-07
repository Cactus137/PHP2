<?php

namespace App\Models;

use App\Models\BaseModel;

class User extends BaseModel
{
    protected $table = 'user';

    public function getAll()
    {
        $sql = "SELECT * FROM " . $this->table;
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function addUser($name)
    {
        $sql = "INSERT INTO $this->table(name) VALUES (?)";
        $this->setQuery($sql);
        return $this->execute([$name]);
    } 
    
    public function getUserById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function editUser($name, $id)
    {
        $sql = "UPDATE $this->table SET name = ? WHERE id = ?";
        $this->setQuery($sql); 
        return $this->execute([$name, $id]);
    }

    public function deleteUser($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = ?";
        $this->setQuery($sql);
        return $this->execute([$id]);
    }
}
