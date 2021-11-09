<?php 
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))  //程式重點(判斷帳密是否正確)
    //如果接收到的 id資料 = "john" 同時(而且) 接收到的pwd資料 = "john1234"
        echo "Welcome";
        //那就 echo "Welcome";
    else
    // 如果不符合 那就 echo "fail login";
        echo "fail login";
?>
