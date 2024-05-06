<?php 

$ID=$_POST['ID'];
if($_POST['ProType']=="cloth")
{
$Q="SELECT * FROM cloth_info WHERE ID='$ID'";

}
else
{
    $Q="SELECT * FROM shoe_info WHERE ID='$ID'";
}
$result=$con->query($Q);
    if($result->num_rows> 0){
    while($row=$result->fetch_assoc()){
       
    $PRODUCT=array(
        "NAME"=>$row["NAME"],
        "PRICE"=>$row["PRICE"],
        "TYPE"=>$row["TYPE"],
      
        
        "DISCOUNT"=>$row["DISCOUNT"]
    );
    }
    }

?>