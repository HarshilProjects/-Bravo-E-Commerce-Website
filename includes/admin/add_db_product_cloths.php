<?php
include('../../Helpers/ServerConnect.php');



if(isset($_POST['CLOTH']) && $_POST['SUB'] && $_POST['CLOTH'])
{
    print_r($_POST); 
    // echo "no ID COLOR  SIZE AVLBL<br>";
    $id=$_POST['ID'];
    $FLAG;
// FOR IMG INFORMATION 
$table;
    if(isset($_POST['PName']) && isset($_POST['ID']) && isset($_POST['PRICE'])  && isset($_POST['DISCOUNT'])  )
    {
        
        $NAME=$_POST['PName'];
        $MCOLOR=$_POST['Maincolor'];
        $MPhoto=$_POST['MainPhoto'];
        $PRICE=$_POST['PRICE'];
        $DISCOUNT=$_POST['DISCOUNT'];
        $TYPE=$_POST['CLOTH'];
        $table=strval($TYPE);
        $PSubType=$_POST['PSubType'];
        
        $con->query("INSERT INTO cloth_info VALUES('$NAME','$id','$PRICE','$TYPE',$DISCOUNT,'CLOTHS','$PSubType')");

        $con->query("INSERT INTO ".$table."_cloths VALUES('$NAME','$id','$MCOLOR','$MPhoto','')");     
    }




    // FOR SIZE STORE 
    
    for($i=0;$i<count($_POST['color']);$i++)
{

// echo $_POST['color'][$i]."<br>";
for($j=0;$j<count($_POST['size']);$j++)
     {
        $color=$_POST['color'][$i];
        $size=$_POST['size'][$j];
        $AVLBL=$_POST['AVLBL'][$j];
        echo $color.' '.$size.' '.$AVLBL.'';
        $TABLE=strtoupper($table);
        $result=$con->query("SELECT *  FROM cloths_size_info WHERE COLOR='$color' AND size='$size' AND ID='$id'");
        if($result->num_rows ==0)
        {
            $con->query("INSERT INTO cloths_size_info VALUES('','$id','$color','$size','$AVLBL','$TABLE')");

        }
       
    }

}

// FOR MAIN PHOTO STORE
for($i=0;$i<count($_POST['additionalPhotos']);$i++)
{
    $color=$_POST['color'][$i];
    $childPhoto=$_POST['additionalPhotos'][$i];
    $con->query("INSERT INTO child_".$table."_cloths VALUES ('$id','$color','$childPhoto','')");

}
$admin=$_SESSION['admin'];
echo $admin;
echo "<script> alert('dear sir,$admin Poducts Are added in $table')</script>";
echo "<script> window.location='../../$table C.php';</script>";
}


?>
