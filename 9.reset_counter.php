<?php
    session_start();
    //使用session
    unset($_SESSION["counter"]);
    //重設$_SESSION["counter"]
    echo "counter重置成功....";
    //印出"counter重置成功....";
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
    //跳轉網頁到counter.php 延遲2秒

?>
