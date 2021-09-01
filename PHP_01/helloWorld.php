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
plusX();
plusX();
plusX();
plusX();
plusX();
plusX();
?>