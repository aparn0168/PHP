<html>  
    <head><tittle>使用者管理</tittle></head>
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

        echo"
            <h1>使用者管理</h1>
            <a href=bulletin.php>回布告欄列表</a> 
             <table border = 1>
             <tr><td></td><td>帳號</td><td>密碼</td></tr>   
            ";
            //回佈告欄的按鈕(連結到bulletin.php)
             $conn=mysqli_connect("localhost","root","","mydb");
              #mysqli_connect() 建立資料庫連結
             $result = mysqli_query($conn, "select * from user");
             #mysqli_query() 從資料庫查詢user資料 
             while($row=mysqli_fetch_array($result)){
                //如果還能夠抓出資料 那就不斷迴圈
                echo "<tr><td><a href=user_edit_form.php?id={$row['id']}>修改</a>
                ||<a href=user_delete.php?id={$row['id']}>刪除</a>
                </td><td>{$row['id']}</td><td>{$row['pwd']}</td></tr>";
                //修改 || 刪除 帳號內容{$row['id']} 密碼內容{$row['pwd']} 放在表格內 
            }
            echo "</table>";
        }        
        
        ?>
    </body>
    </html>