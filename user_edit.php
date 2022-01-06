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
        $conn=mysqli_connect("localhost","root","","mydb");
         #mysqli_connect() 建立資料庫連結
        if (!mysqli_query($conn, "update user set pwd='{$_POST['pwd']}' where id='{$_POST['id']}'")){
            //如果修改設定沒有成功
            echo "修改錯誤";
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
            //回到 user.php
        }else{
            //如果修改成功
            echo "修改成功，三秒鐘後回到網頁";
            echo "<meta http-equiv=REFRESH content='3, url=user.php'>";
            //回到 user.php
        }
    }

?>
