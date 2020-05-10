<?php

if(isset($_GET['so1'])) {
    echo " co so1";
}
if(isset($_GET['so2'])) {
    echo " co so2";
}
echo "<br/>";
if (isset($_GET['so1']) && isset($_GET['so2'])) {
    echo 'kq là' . ($_GET['so1']+$_GET['so2']);
} else {
    echo " số 1 hoặc số 2 ko tồn tại";
}
?>