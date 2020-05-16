<?php 
    session_start();
    if(isset($_GET['reset'])) {
        unset($_SESSION['dung']);
        unset($_SESSION['sai']);
    }
    if(!isset($_SESSION['dung'])) {
        $_SESSION['dung'] = 0;
    }
    if(!isset($_SESSION['sai'])) {
        $_SESSION['sai'] = 0;
    }
    $result = rand(1,10);
    if(isset($_GET['tai'])) {
        if($result>5) {
            $_SESSION['dung']++;
        } else {
            $_SESSION['sai']++;
        }
    }
    if(isset($_GET['xiu'])) {
        if($result>5) {
            $_SESSION['sai']++;
        } else {
            $_SESSION['dung']++;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .line1, .line2 {
        display: grid;
        grid-template-columns: 48% 48%;
        grid-gap: 2%;
        background: gray;
        margin-top: 20px;
        min-height: 50px;
        padding: 20px;
    }
    .line1 div {
        border: 2px solid black;
        padding: 10px;
    }
    </style>
</head>
<body>
    <div class='container'>
        <div class='line1'>
            <div>
                <?= $result?>
            </div>
            <div>
                đoán đúng: <?= $_SESSION['dung']?> <br/>
                đoán sai: <?= $_SESSION['sai']?>
            </div>
        </div>
        <form>
        <div class='line2'>
                <div>
                    <input type='submit' name ='tai' value='Lớn hơn 5'>
                </div>
                <div>
                    <input type='submit' name ='xiu' value='Nhỏ Hơn 5'>
                </div>
        </div>
        <input type="submit" name="reset" value='reset'>
        </form>
    </div>
</body>
</html>