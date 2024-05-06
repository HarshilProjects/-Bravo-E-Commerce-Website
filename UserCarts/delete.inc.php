<?php
include('../Helpers/ServerConnect.php');
if (isset($_GET['RemoveBtn']))
{
    $email=$_GET['EMAIL'];
    $size=$_GET['SIZE'];
    $id=$_GET['ID'];
    $color=$_GET['COLOR'];

   

    
    $con->query("DELETE FROM all_carts WHERE SIZE='$size' AND EMAIL='$email' AND ITEM_COLOR='$color' AND ITEM_ID='$id'");
    if($con)
    {
        echo "<script>
        alert('Dear Costumer Your Cart Are Removed');
        window.history.go(-1);
        </script>";
    }
}
?>