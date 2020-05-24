<?php 
class Point {
    public $ten;
    public $diemlancan;
    function __construct($ten, $diemlancan){
        $this->ten = $ten;
        $this->diemlancan = $diemlancan;
    }

}

class Map {
    //nhung diem tren ban do
    public $danhsachdiem;
    //luu nhung diem da di qua
    public $duonghientai;
    function __construct($danhsachdiem){
        //tao index cho mang
        foreach($danhsachdiem as $point) {
            $this->danhsachdiem[$point->ten] = $point;    
        }
    }
    
    public function timduong($start, $end) {
        $this->nextPoint($start,$end);
    }
    public function nextPoint($current, $end){
        $this->duonghientai[] = $current;
        // print_r($this->duonghientai);
        if($current == $end) {
            print_r($this->duonghientai);
            // die('tim duoc duong di den diem cuoi cung');
        } 
        foreach ($this->danhsachdiem[$current]->diemlancan as $tendiem) {      
            if (!in_array($tendiem, $this->duonghientai)) {
                $this->nextPoint($tendiem,$end);
                array_pop($this->duonghientai);
            }
        }
        
        // bo diem current ra khoi duong di
    }
}
$diemA = new Point('A',['G','D']);
$diemB = new Point('B',['G']);
$diemC = new Point('C',['G','H']);
$diemD = new Point('D',['A','F','G','I','E']);
$diemE = new Point('E',['D','F','I','K']);
$diemF = new Point('F',['D','E']);
$diemG = new Point('G',['A','B','C','D']);
$diemH = new Point('H',['C','I']);
$diemI = new Point('I',['D','E','H']);
$diemK = new Point('K',['E']);

$danhsachdiem = [$diemA,$diemB,$diemC,$diemD,$diemE,$diemF,$diemG,$diemH,$diemI,$diemK];


$map = new Map($danhsachdiem);
echo "<pre>";

$map->timduong('A','K');
?>