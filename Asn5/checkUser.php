<?php
    $user_name=$_POST["user_name"];
    $user_password=$_POST["user_password"];
    if($user_name === "Anirudha D. Pradhan" && $user_password==="Robin@930"){
        $date=date(DATE_COOKIE);
        echo "<h2>hello $user_name you logged in at $date'</h2>;";
    }
    else{
        echo "<h2>'Not a valid user please try again'</h2>";
    }
?>