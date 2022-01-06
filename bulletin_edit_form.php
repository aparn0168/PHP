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
        $result=mysqli_query($conn, "select * from bulletin where bid={$_GET['bid']}");
        $row=mysqli_fetch_array($result);
        $checked1="";
        $checked2="";
        $checked3="";
        if ($row['type']==1)
            $checked1="checked";
        if ($row['type']==2)
            $checked2="checked";
        if ($row['type']==3)
            $checked3="checked";
            //利用判斷checked來分辨佈告內容類型
        echo "
        <html>
            <head><title>新增佈告</title></head>
            <body>
                <form method=post action=bulletin_edit.php>
                    佈告編號：{$row['bid']}<input type=hidden name=bid value={$row['bid']}><br>
                    標    題：<input type=text name=title value={$row['title']}><br>
                    內    容：<br><textarea name=content rows=20 cols=20>{$row['content']}</textarea><br>
                    佈告類型：<input type=radio name=type value=1 {$checked1}>系上公告 
                            <input type=radio name=type value=2 {$checked2}>獲獎資訊
                            <input type=radio name=type value=3 {$checked3}>徵才資訊<br>
                    發布時間：<input type=date name=time value={$row['time']}><p></p>
                    <input type=submit value=修改佈告> <input type=reset value=清除>
                </form>
            </body>
        </html>
        ";
          //用post的方法傳送 使用 bulletin_add.php
             //標題為 text 內的文字
             //內容為 text 內的文字
             //佈告內容為 radio  三選一
             //發布時間為 date
             //<input type=submit value=新增> 送出按鈕 修改佈告
             //<input type=reset value=清除> 清除按鈕 清除
    }
?>