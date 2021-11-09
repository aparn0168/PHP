
<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   while ($row=mysqli_fetch_array($result)) {
       //如果還能夠抓出資料 那就不斷迴圈
     echo $row["id"]." ".$row["pwd"]."<br>";
     //echo當前這筆的 id + pwd + 換行
   } 
?>
