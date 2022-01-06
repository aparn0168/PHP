<?php
   #mysqli_connect() 建立資料庫連結
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   while ($row=mysqli_fetch_array($result)) {
       //如果還查詢到的資料還有 那就不斷迴圈
       if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) {
          //如果接收到的 id資料 = 當前抓到的資料庫id 同時(而且) 接收到的pwd資料 = 當前抓到的資料庫pwd
       $login=TRUE;
       //那麼$login=TRUE;
       }
   } 
   if ($login==TRUE) {
       //如果$login=TRUE;
    session_start();
    //使用session
    $_SESSION["id"]=$_POST["id"];
    //$_SESSION["id"] = 當前抓到的資料庫id
    echo "welcome!!";
    //印出"welcome!!";
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
    //跳轉網頁到7.bulletin.php 延遲3秒
   }

  else{
      //否則
    echo "id/pwd wrong!!";
    //印出"id/pwd wrong!!"
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    //跳轉網頁到2.login.html 延遲3秒
  }
?>
