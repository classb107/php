<?php
include_once('models/BaseModel.php');
include_once('models/SinhVien.php');
$test = new SinhVien();
//get all method of class
$class_methods = get_class_methods('SinhVien');
echo "<pre>";
print_r($class_methods);
//
$result = $test->getData();
echo "<pre>";
print_r($result);