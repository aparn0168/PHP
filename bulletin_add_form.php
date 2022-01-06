<html>
    <head>                             
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
            echo"
            <form method=post action=bulletin_add.php>
            標    題：<input type=text name=title><br>
            內    容：<br><textarea name=content rows=20 cols=20></textarea><br>
            佈告內容:<input type=radio name=type value=1>系上公告
                    <input type=radio name=type value=2>獲獎資訊
                    <input type=radio name=type value=3>徵才資訊<br>
            發布時間:<input type=date name=time><p></p>
            <input type=submit value=新增佈告><input type=reset value=清除>
            </form>           
            ";
             //用post的方法傳送 使用 bulletin_add.php
             //標題為 text 內的文字
             //內容為 text 內的文字
             //佈告內容為 radio  三選一
             //發布時間為 date
             //<input type=submit value=新增> 送出按鈕 新增布告
             //<input type=reset value=清除> 清除按鈕 清除
        }      

        ?>  
        
       
    </body>
</html>