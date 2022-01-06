<?php
error_reporting(0);
session_start();
if (!$_SESSION["id"]) {
    //相反符號(如果有$_SESSION["id"])
    echo "請登入帳號";
    //那就印出"please login first";
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    //跳轉網頁到2.login.html 延遲3秒
}
else{
#mysqli_connect() 建立資料庫連結
$conn=mysqli_connect("localhost","root","","mydb");
#mysqli_query() 從資料庫查詢資料
//新增資料SQL命令:inser into 表格名稱(欄位1,欄位2,欄位3,欄位4) values(欄位1的值,欄位2的值,欄位3的值,欄位4的值)
$sql = "insert into bulletin(tittle, content, type, time) 
values('{$_POST['tittle']}', '{$_POST['content']}', {$_POST['type']},  '{$_POST['time']}')";
if(!mysqli_query($conn, $sql)){
    echo "新增命令錯誤";
}
else{
    echo"新增佈告成功，三秒鐘後回到網頁";
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
    //跳轉網頁到bulletin.php 延遲3秒
}
}

?>