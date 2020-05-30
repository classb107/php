<?php 
    include_once('../models/SinhVien.php');
    $test = new SinhVien();
    $result = $test->getData();
    
    include_once('../views/home.php');
    $view = new Home($result);
    $view->display();
?>