<?php
    include_once('../views/timkiem.php');
    $view = new TimKiem();
    $view->display();


    //xu ly tim kiem 
    if(isset($_GET['submit'])){ 
        $name = $_GET['ten'];
        if(!$name) {
            echo "vui long nhap ten";
            die();
        }
        include_once('../models/GiangVien.php');
        $result = GiangVien::timkiem($name);
        $view->dsSinhVien($result);
    }
?>