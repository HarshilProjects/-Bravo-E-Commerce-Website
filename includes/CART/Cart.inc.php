


<?php
include('../../Helpers/ServerConnect.php'); 
include('Fetch_info.php');
$email=$_SESSION['email'];
$results=$con->query("SELECT * FROM all_carts WHERE EMAIL='$email' AND ITEM_ID='$IID' AND ITEM_COLOR='$IColor' AND SIZE='$ISize'");
// print_r($item);
if ($results->num_rows > 0 )
{
    while ($row = $results->fetch_assoc())
    {
        
        
        

                echo "<script> alert('ALL-READY CART ADDED');
                window.history.go(-3);</script>";

   
        
            
         
    }
}
if($results->num_rows == 0)
{
    $awlbl=0;   
    if($ICast=='cloth')
    {
        $ICast='cloths';

    }
    
    $fetchQuantity="SELECT AWLBL FROM $ICast"."_size_info WHERE ID='$IID' AND SIZE='$ISize' AND COLOR='$IColor'";
    $ThisR=$con->query($fetchQuantity);
    if ($ThisR->num_rows > 0)
        {
            while ($rows = $ThisR->fetch_assoc())
            {
                // echo gettype($row['AWLBL']);
                $awlbl=(int)$rows['AWLBL'];
                // echo $awlbl;
            }
        }
  

        


        $qons=$awlbl-(int)($IQon);
        $total=$IQon*$IPrice;
        $updateQontity="UPDATE $ICast"."_size_info SET AWLBL='$qons' WHERE ID='$IID' AND COLOR='$IColor' AND SIZE='$ISize'";

        $con->query($updateQontity);

        

    $fill="INSERT INTO all_carts VALUES ('$email','$UNAME','$ULName','$Uadd','$Ucontry','$Ucontect','$IID','$INAME','$ITYPE','$ICast','$IColor','$ISize','$IQon','$total','')";
    
    $con->query($fill); 
    

    $TTable="TRUNCATE TABLE add_cart_info";
    // echo $_SERVER['SCRIPT_FILENAME']; 
    $con->query($TTable);
    echo "<script>alert('CART ADDED');

             window.location.href='../../$ITYPE.php';     
            </script>"; 

} 
// echo $email.$UNAME.$ULName;  
?>
