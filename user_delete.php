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
//新增資料SQL命令:inser into 表格名稱(欄位1,欄位2) values(欄位1的值,欄位2的值)
$sql="delete from user where id='{$_GET['id']}'";
#echo $sql
if (!mysqli_query($conn,$sql)){
    //如果刪除失敗
    echo "使用者刪除錯誤";
}else{
    //如果刪除成功
    echo "使用者刪除成功";
}
echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
//跳轉網頁到 user.php 延遲3秒
}
?>

