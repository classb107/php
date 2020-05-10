<?php

$a = 5;
$b = 10;
$c = $a + $b;
$a = 'aaaaa';
$font_size = 50;
$array = ['phantu1','phantu2','phantu3'];

echo $a;
//echo $c;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    p {
        font-size: <?php echo $font_size ?>px;
    }
    </style>
</head>
<body>
    <p>đây là file date_modify<p>

    <?php 
        echo $c;
    ?>

    <span>đây là mảng</span>
    <?php 
        echo "<pre>";
        print_r($array);
        echo "</pre>"
    ?>

    <div>
     đây là cái hình
     <?php 
        echo "<img src ='image1.png'>";
     ?>
    </div>

    <?php 
    for($i =1; $i<5 ; $i ++) {
        echo $i;
    }
    echo " duyệt mảng";
    foreach($array as $item) {
        echo $item;
    }
    ?>
</body>
</html>