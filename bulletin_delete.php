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
        $sql="delete from bulletin where bid='{$_GET['bid']}'";
        #echo $sql;
        if (!mysqli_query($conn,$sql)){
            echo "佈告刪除錯誤";
        }else{
            echo "佈告刪除成功";
        }
        echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
        //回到 bulletin.php
    }
?>