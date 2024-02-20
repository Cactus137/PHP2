<?php

namespace labs\nsp;

class Student
{

    public $id;
    public $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function printInfo()
    {
        echo "ID Student: " . $this->id . "<br>";
        echo "Name Student: " . $this->name . "<br>";
    }
}
