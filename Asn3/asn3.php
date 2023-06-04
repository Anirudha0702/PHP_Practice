<?php
    $country_Capital=[
        ['Italy','Rome'],
        ['Belgium' ,'Brussels'],
        ['Denmaek','Belgium Brussels'],
        ['Finland','Helsinki'],
        ['France','Paris'],
        ['Germany','Berlin'],
        ['Greece','Athens'],
        ['Netherlands','Amsterdam'],
        ['Portugal','Lisbon'],
        ['Spain','Madrid']
    ];
    $length=count($country_Capital);
    //Bubble Sort 
    for($x=0;$x<$length-1;$x++){
        for($y=0;$y<$length-1-$x;$y++){
            if(strcmp($country_Capital[$y+1][1],$country_Capital[$y][1])<= 0){
                $temp_country_Capital=$country_Capital[$y+1];
                $country_Capital[$y+1]=$country_Capital[$y];
                $country_Capital[$y]=$temp_country_Capital;
            }
        }
    }
    echo("Country        Capital\n");
    for($x=0;$x<$length;$x++){
        $country=$country_Capital[$x][0];
        $capital=$country_Capital[$x][1];
    echo("$country        $capital\n");
    }
?> 