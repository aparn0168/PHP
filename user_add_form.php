<html>
    <head>                              <!-- 程式重點 登入  -->
        <meta charset="utf-8" /> 
        <!-- 用來指定網頁內容是用什麼編碼  -->
        <title>登入範例</title>
        <!-- <title> 網頁標題 </title>  -->
    </head>
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
            echo "
            <form method=post action=user_add.php>
            帳號：<input type=text name=id><br/>
            密碼：<input type=text name=pwd><p></p>
            <input type=submit value=新增> <input type=reset value=清除>
            </form>           
            ";
             //用post的方法傳送 使用user_add.php
             //帳號為 text 內的文字
             //密碼為 text 內的文字
             //<input type=submit value=新增> 送出按鈕 新增
             //<input type=reset value=清除> 清除按鈕 清除
        }        
        ?>
       
    </body>
</html>