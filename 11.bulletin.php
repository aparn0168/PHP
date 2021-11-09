<?php
    error_reporting(0);
    session_start();
    if (!$_SESSION["id"]) {
        //相反符號(如果有$_SESSION["id"])
        echo "please login first";
        //那就印出"please login first";
        echo "<meta http-equiv=REFRESH content='3, url=2.login.html'>";
        //跳轉網頁到2.login.html 延遲3秒
    }
    else{
        echo "Welcome, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";
        //印出"Welcome, + $_SESSION["id"] +一個logout的連結 使用logout.php 來登出"
        $conn=mysqli_connect("localhost","root","", "mydb");
        #mysqli_connect() 建立資料庫連結
        $result=mysqli_query($conn, "select * from bulletin");
        #mysqli_query() 從資料庫查詢資料
        echo "<table border=2><tr><td>佈告編號</td><td>佈告類別</td><td>標題</td><td>佈告內容</td><td>發佈時間</td></tr>";
        //做一個表格
        while ($row=mysqli_fetch_array($result)){
            //如果還查詢到的資料還有 那就不斷迴圈
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
            //把這一筆查詢到的資料echo 用表格的方式
        }
        echo "</table>";
    
    }

?>
