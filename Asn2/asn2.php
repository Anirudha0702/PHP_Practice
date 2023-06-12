<?php
// "\u{00B2}", => 2 in superscript
for($x=1;$x<=20;++$x){
    $val=pow($x,2);
    echo "$x\u{00B2}    = $val\n";
}
?>