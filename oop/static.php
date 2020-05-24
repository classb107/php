<?php
include_once('Helper.php');

Helper::welcome();

class Animal {
    static public $countt = 0;
    function __construct(){
        self::$countt++;
    }
}

$animal1 = new Animal();
$animal2 = new Animal();
$animal3 = new Animal();
$animal4 = new Animal();
$animal5 = new Animal();

echo Animal::$countt;
?>