<?php
$COLOR;
if($_POST['ProType']=="cloth")
{
    $fetchMain="SELECT * FROM $LTYPE"."_cloths WHERE ID='$ID'";

}
else
{
    $fetchMain="SELECT * FROM $LTYPE"."_shoes WHERE ID='$ID'";

}
$MainResults=$con->query($fetchMain);
if($MainResults ->num_rows > 0)
{
    while($MainRow = $MainResults->fetch_assoc())
    {
?>
            <img  src="<?php echo $MainRow['I_ADD']; ?>"  alt=""  class="d-block mx-auto  Main_img img-fluid">

<?php        
$COLOR=$MainRow['COLOR'];
    }
}
?>