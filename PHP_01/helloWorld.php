<?php
echo "Hello World <br>";
// comment 
/**
 * COMMENT
 * 
 */
$x = 0 ;
function plusX()
{
    global $x;
    $x++;
    echo "giá trị của biến x = ".$x."<br>";
    $x1 = 0;
    $x1++;
    echo "giá trị của biến x1 = ".$x1."<br>";
    static $y = 1;
    $y ++;
    echo "giá trị của biến y = ".$y."<br>";

}
plusX();
plusX();

$a = [1,2,3,4,5,6,7,8];
echo "gia tri cua a[5]".$a[5]."<br>";
$a1 = ["key1" => 1, "key2" => "hello world"];
echo $a1["key2"]
?>