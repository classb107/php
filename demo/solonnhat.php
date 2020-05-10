<?php 
$result = 'vui lòng nhập số rồi nhấn nút xem';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        nhập vào 4 số
        <input name='so1'>
        <input name='so2'>
        <input name='so3'>
        <input name='so4'>
        <input type = 'submit' name='submit' value='xem'>
    </form>

    <div>
        <h1><?php
            if(isset($_GET['submit'])) {
                $arr = [
                        $_GET['so1'],
                        $_GET['so2'],
                        $_GET['so3'],
                        $_GET['so4']
                    ];
                
                $max = 0;
                foreach($arr as $item) {
                    if($item > $max) {
                        $max = $item;
                    }  
                }
                echo " số lớn nhất là:" , $max;

                //sắp xếp
                $sapxep = $arr;
                for($i = 0; $i < count($sapxep)-1; $i++) {
                    for($j = $i+1; $j< count($sapxep); $j++) {
                        if($sapxep[$j]<$sapxep[$i]) {
                            $temp = $sapxep[$j];
                            $sapxep[$j] = $sapxep[$i];
                            $sapxep[$i] = $temp;
                        }
                    }
                }
                echo "<pre>";
                print_r($sapxep);
                echo "</pre>";
            } else {
                echo $result;
            }
         ?>
         </h1>
    </div>
</body>
</html>