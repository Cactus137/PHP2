<?php

use labs\nsp\Student;

require_once 'nsp1.php';

$student = new Student(1, "John");
$student->printInfo();