<?php 

$LTYPE=strtolower($PRODUCT['TYPE']);
$COLOR;
if($_POST['ProType']=="cloth")
{
$fetchMain="SELECT * FROM $LTYPE"."_cloths WHERE ID='$ID'";
$fetchChilds="SELECT * FROM child_".$LTYPE."_cloths WHERE ID='$ID'";

}
else
{
    $fetchMain="SELECT * FROM $LTYPE"."_shoes WHERE ID='$ID'";
    $fetchChilds="SELECT * FROM child_$LTYPE WHERE ID='$ID'";

}
$MainResults=$con->query($fetchMain);
if($MainResults ->num_rows > 0)
{
    while($MainRow = $MainResults->fetch_assoc())
    {
?>
            <img  src="<?php echo $MainRow['I_ADD']; ?>" alt="" style="cursor: pointer;" class=" CHILD_IMGS  img-fluid w-75 mx-auto">

<?php        
$COLOR=$MainRow['COLOR'];
    }
}
$childResult=$con->query($fetchChilds);
if ($childResult->num_rows > 0) {
while ($childResults = $childResult->fetch_assoc()) {
$add=$childResults['I_ADD'];
?>

             <img src="<?php echo $childResults['I_ADD']; ?>" alt="" style="cursor: pointer;" class=" CHILD_IMGS img-fluid w-75 mx-auto" >

<?php 
}
}
?>