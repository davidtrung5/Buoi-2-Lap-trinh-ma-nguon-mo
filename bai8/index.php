<?php
require 'autoload.php';

use App\Students\Student;

$student1 = new Student("Tran Thi B", 21, "200123456");
$student1->showInfo();
?>