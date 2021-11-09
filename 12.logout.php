<?php
    session_start();
    //使用session
    unset($_SESSION["id"]);
    //重設$_SESSION["id"]
    echo "登出成功....";
    //印出"登出成功....";
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";
    //跳轉網頁到login.html 延遲3秒

?>
