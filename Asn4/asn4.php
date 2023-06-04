<?php
$new_Item=[4,'pearl'];
$insrt_Pos=2;
$data = [
    [5, 'yellow'],
    [14, 'blue'],
    [3, 'green'],
    [22, 'white']
];
// $dlt_Pos=count($data)-1;
$dlt_Pos=4;
echo "Generating first element of ";
print_r($data[0]);
array_splice($data,$insrt_Pos,0,[$new_Item]);
echo "After inserting at $insrt_Pos";
print_r($data);
echo "After deleting $dlt_Pos element";
unset($data[$dlt_Pos]);
print_r($data);
?>