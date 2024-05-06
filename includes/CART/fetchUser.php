<?php 

$email=$_SESSION['email'];
$fetchUserInfo="SELECT * FROM reg WHERE EMAIL='$email'";
$r=$con->query($fetchUserInfo);

if ($r->num_rows > 0)
{
    while ($row = $r->fetch_assoc())
    {
        // echo $row['EMAIL'];
        $users=array(
            "NAME"=>$row["F_NAME"]." ".$row["L_NAME"],
            "ADDRESS"=>$row["ADD"],
            "CONTACT"=> $row["CONTACT_NO"],
            "COUNTRY"=>$row["COUNTRY"]
        );
    }
}?>