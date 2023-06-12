<?php
    $user_name=$_POST["user_name"];
    $user_password=$_POST["user_password"];
    if($user_name === "Anirudha D. Pradhan" && $user_password==="Robin@930"){
        $date=date("D-m-y");
        echo "<script>alert('hello $user_name you logged in at $date');</script>";
    }
    else{
        echo "<script>alert('Not a valid user please try again');</script>";
    }
?>