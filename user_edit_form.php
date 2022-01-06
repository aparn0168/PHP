<html>  
    <head><tittle>修改使用者</tittle></head>
    <body>
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
        $result = mysqli_query($conn, "select * from user where id ='{$_GET['id']}'");
        $row = mysqli_fetch_array($result);
        echo"
        <form method=post action=user_edit.php>
            <input type=hidden name=id value={$row['id']}>
            帳號：{$row['id']}<br> 
            密碼：<input type=text name=pwd value={$row['pwd']}><p></p>
            <input type=submit value=修改>
        </form>     
        ";
        //用post的方法傳送 使用user_edit.php
        //帳號為{$row['id']}
        //密碼為{$row['pwd']} 放在text可以修改
        //<input type=submit value=修改> 送出按鈕 修改

        }        
        
        ?>
    </body>
    </html>