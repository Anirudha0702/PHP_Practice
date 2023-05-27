<?php
    $color_code=array();
    $color_name=array();
    $length=4;
    for($x=0;$x<$length;$x++){
        $color_code[$x]=readline("Enter colorCode:  ");
        $color_name[$x]=readline("Enter $color_code[$x] 's color_name:  ");
    }

// get First element
echo "colorcode of $color_name[0] $color_code[0]\n";
// Delete the last iteam
unset($color_code[3]);
unset($color_name[3]);
for($x=0;$x<$length-1;$x++){
    echo("$color_code[$x]\n");
    echo("$color_name[$x]\n")   ;
}