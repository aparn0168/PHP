<?php
    session_start();
    //使用session
    if (!isset($_SESSION["counter"]))
    //相反符號(如果之前有用過$_SESSION["counter"])
        $_SESSION["counter"]=1;
        //那就$_SESSION["counter"]=1; 宣告一個SESSION 名子是counter 初值 1
    else
    //否則
        $_SESSION["counter"]++;
        //每次 $_SESSION["counter"] = $_SESSION["counter"] +1

    echo "counter=".$_SESSION["counter"];
    //印出 "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";
    //做一個重製的連結 使用reset_counter.php 來重製
?>
