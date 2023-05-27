<?php
    $countryName=array();
    $capital=array();
    $length=10;
    for($x=0;$x<$length;$x++){
        $countryName[$x]=readline("Enter country name:  ");
        $capital[$x]=readline("Enter $countryName[$x] 's capital:  ");
    }
    for($x=0;$x<$length-1;$x++){
        for($y=0;$y<$length-1-$x;$y++){
            if(strcmp($capital[$y+1],$capital[$y])<= 0){
                $tempCap=$capital[$y+1];
                $tempCntry=$countryName[$y+1];
                $capital[$y+1]=$capital[$y];
                $countryName[$y+1]=$countryName[$y];
                $capital[$y]=$tempCap;
                $countryName[$y]=$tempCntry;
            }
        }
    }
    echo("Country       Capital\n");
    for($x=0;$x<$length;$x++){
        echo("$countryName[$x]       $capital[$x]\n");
    }
?>