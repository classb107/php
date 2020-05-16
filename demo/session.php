<?php 
// Start the session
session_start();

$result = 0;

if(isset($_GET['submit1'])) {
    if(isset($_SESSION['result'])){
        $_SESSION['result'] = $_SESSION['result']+1;    
    } else {
        $_SESSION['result'] = 1;
    }
    
}
if(isset($_GET['submit2'])) {
    $result = $result-1;
}
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
    <input type='submit' name = 'submit1' value='+'>
    <input type='submit'name = 'submit2' value='-'>
    </form>

    <h1>
        <?php 
            if(isset($_SESSION['result'])) {
                echo $_SESSION['result'];
            } else {
                echo 0;
            }
        ?>
        
        <?php /*<?= tuong duong voi <? echo  */ ?>
    </h1>
</body>
</html>