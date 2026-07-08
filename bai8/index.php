<?php
require 'autoload.php';

use App\Students\Student;

$student1 = new Student("Mai Duc Trung", 21, "2001231002");
$student1->showInfo();
?>