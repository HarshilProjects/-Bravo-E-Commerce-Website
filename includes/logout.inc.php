<?php
session_start();

// CHANGE THE
    $servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';
$con= new mysqli($servername,$username,$pass,$dbname);
   // truncate {
    $TTable="TRUNCATE TABLE add_cart_info";
    if(basename(__FILE__) != 'MAIN_CART.php') {
 $con->query($TTable);
     } 
     // truncate}

$flag=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
    
        if(isset($_SESSION['email']) || isset($_SESSION['admin']))
        {
    if(!$con)
    {
        die("connection faild".$con->connect_error);
    }
    else
    


    // for LOGOUT
    if(isset($_POST['LOGOUT']))
    {
        unset($_SESSION['email']);
        unset($_SESSION['pass']);   
        unset($_SESSION['cart']);
        unset($_SESSION['admin']);
        unset($_COOKIE['Uname']);
        unset($_COOKIE['Upwd']);
        unset($_SESSION['Uname']);
        $page=$_POST['PName'];

        echo 
        "
            <script>
             alert('LOGOUTED'); 
            window.history.go(-1);
             </script>
        ";
    }
}
        }
?>