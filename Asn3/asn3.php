<?php
    $country_Capital=[];
    $capital=array();
    $length=2;
    $len_Of_Each_Elmnt=2;
    for($x=0;$x<$length;$x++){
        $country_Capital[$x][0]=readline("Enter country name:  ");
        $cntry_name=$country_Capital[$x][0];
        $country_Capital[$x][1]=readline("Enter $cntry_name 's capital:  ");
    }
    for($x=0;$x<$length-1;$x++){
        for($y=0;$y<$length-1-$x;$y++){
            if(strcmp($country_Capital[$y+1][1],$country_Capital[$y][1])<= 0){
                $temp_country_Capital=$country_Capital[$y+1];
                $country_Capital[$y+1]=$country_Capital[$y];
                $country_Capital[$y]=$temp_country_Capital;
            }
        }
    }
    echo("Country       Capital\n");
    for($x=0;$x<$length;$x++){
        $country=$country_Capital[$x][0];
        $capital=$country_Capital[$x][1];
        echo("$country     $capital\n");
    }
?> 