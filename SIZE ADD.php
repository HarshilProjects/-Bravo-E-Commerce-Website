<?php
include("Helpers/ServerConnect.php");
$SIZE=6;
for ($i = 0; $i<=5; $i++) {
    $con->query("INSERT INTO formal_shoes_size (ID, COLOR) SELECT ID, COLOR FROM formal_shoes");
    // $con->query("UPDATE `formal_shoes_size` SET `SIZE`=$SIZE,`AVLBL`=5");
// echo $SIZE."<br>";
//     $SIZE++;  
//     echo $SIZE."<br>";
}
?>