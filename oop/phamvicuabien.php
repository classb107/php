<?php
class ParentTest {
    public $var1;
    private $var2;
    protected $var3;
    //protected cung nhu private 
    // nhung class con van co the thua ke
    function __construct() {
        $this->var1 = 'gia tri public';
        $this->var2 = 'gia tri private';
        $this->var3 = 'gia tri protected';
    }

    public function showTest(){
        echo $this->format($this->var1);
        echo $this->format($this->var2);
        echo $this->format($this->var3);
        echo "<br/>";
    }

    public function getVar2() {
        return $this->var2;
    }
    public function setVar2($value) {
        $this->var2 = $value;
    }

    private function format($value){
        return "FF".$value;
    }
}

class ChildTest extends ParentTest {
    public function test(){
        echo $this->var1;
        //khong the ke thua private
        // echo $this->var2;
        echo $this->var3;
        echo "<br/>";
    }
}

$child = new ChildTest();
$child->test();

$parent = new ParentTest();

// khong the truy xuat thuoc tinh private tu ben ngoai
//echo $parent->var2;
$parent->var1 = 'gan lai var1';
$parent->setVar2('gan lai var2');
echo $parent->getVar2();
$parent->showTest();

//echo $parent->var3;