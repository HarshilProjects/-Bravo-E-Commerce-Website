
<?php include('Helpers/Serverconnect.php'); 
if(isset($_POST['ProType']))
{
    $ProType=$_POST['ProType'];
}
if(!isset($_SESSION['email']))
{
?>
<script>
    // alert('PLEASE LOGIN');
    window.location.href='signAcc.html';
</script>
<?php 
}

$TTable="TRUNCATE TABLE add_cart_info";
// echo $_SERVER['SCRIPT_FILENAME']; 
$con->query($TTable);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <?php include('Helpers/LinkFiles.php'); 
   include('Helpers/LINKS.php');
   ?>
<style>
    body{
        animation: Fade-in  timing-function delay iteration-count direction fill-mode;
    }
    /* .IMG-BOX 
{   
    width:90%;
} */

.perent-img
        {
           max-width: 100vw;
        }
   .product-info *
        {
         margin: 7px; 
        }
   .perent-img img{
        border-radius: 1rem;
        object-fit: contain;
        width: 40%;
        min-width: 40px !important;
    }
    .product-info h1,h3
    {
        font-family: SAGNORIA;
    }
    .product-info small span
    {
        
        font-family: Azonix ;
    }
    .color-guid span
    {
        
        border: 4px solid;
        background: #000;
        display: block;
        width: 20px !important;
        height: 20px !important;
        border-radius: 50%;
    }
     
    .size-section h5
    {
        
        font-family: FUTURA;
    }
    .size-section .sizes .OPT
    {
        padding-top: 2px;
        height: 2.7rem;
                width: 2.7rem;       
                text-align: center;
                cursor: pointer;
    }
    .sizes >.OPT:hover
    {
        background-color: #000;
        color: white;
    }
    .size-section .sizes .OPT span
{

font-family: FUTURA;
}

.cart-btn button[type="submit"]
{

    background: #97bb77;
    border: 0;
    padding: 0.5rem;
    border-radius: 0.5rem;
}
    @media screen and (max-width: 430px){
        
        
        .perent-img img{
        width: 50%;
        }
        .rating h6 *
        {
            font-size: 7px !important;
       }
        .product-info *
        {
            font-size: 10px !important; 
        }
        .product-info small span
    {
        font-size: 7px !important;        
    }
        .product-info small
         
    {
        font-size: 10px !important; 
        
    }
    .color-guid span
    {
        width: 12px !important;
        height: 12px !important;
    }
    .size-section .sizes
    {
        
        margin-inline-end: auto; 
        margin-inline-start: auto;
        margin: 0% !important; 
        gap: 1px !important; 
    }
    .size-section .sizes .OPT
    {   
        padding-top: 0 ;
        margin: 2% !important;
        
                height: 1rem;
                width: 1rem; 
    }
    .size-section .sizes .OPT span
    {
        margin-inline-end: auto; margin-inline-start: auto;
        
        font-size: 8px  !important;
    }
    .cart-btn button[type="submit"],button[type="submit"] *
{

        font-size: 7px !important;
}
}
</style>
</head>
<body>
<?php include('Helpers/Navbar.php'); ?>
<?php include('includes/CART/FetchData.php'); ?>
<h1 class="border-start-0 border-end-0 text-center" style="border: 4px solid #555555 ;  border-radius: 0.5rem; padding: 1rem; width: 100%; font-family: FUTURA;">
<span class="">  YOUR CART  <i class="bi bi-bag"></i></span> 
</h1>
<div class="m-1">
    <div class=" d-flex  ">
        <div class="IMG-BOX d-flex ">
             <div class="d-grid childs-img gap-2  container-fluid p-1 pt-3" style="background-color: #555555; width: 12rem;" >
                <?php include('includes/CART/FetchChild.php'); ?>
        
            </div>
        <div class="perent-img  d-flex   my-auto"  >
            <?php include('includes/CART/FetchMain.php'); ?>
            <div class="product-info me-auto ms-auto ms-3  ">
            <sup>COMPNEY NAME</sup>
            <h1 class="fs-2 ">
               <?php echo $PRODUCT['NAME']; ?>
            </h1>
            <div class="rating d-flex gap-1">
                    <h6 class="bg-success text-light p-1 px-2" style="border-radius: .4rem; width: fit-content;">3.8<i class="bi bi-star-fill "></i> </h6> <h6 class="mt-1" id="Rating">56 Rattings</h6>
            </div>
            <h3 class="text-center d-grid" >
            ₹<?php $DISPRICE= intval($PRODUCT['PRICE']-$PRODUCT['PRICE']*$PRODUCT['DISCOUNT']/100); echo $DISPRICE ; ?>
            <small class="fs-6 " >
                <small class="text-decoration-line-through">MRP ₹<?php echo $PRODUCT['PRICE'];?></small>(<span class="text-danger"><?php echo $PRODUCT['DISCOUNT']; ?>% OFF</span>)
            </small>
            </h3>
            <div class="color-guid text-center">
                <?php echo $COLOR; ?>
                <span class="mx-auto">
                    <?php
                    $size=array
                    (
                        null,
                        null,
                        null,
                        null,
                        null
                        
                    );
                    $TYPE=strtoupper($LTYPE);
                    if($ProType=='cloth')
                    {
                    $fetchSize="SELECT * FROM cloths_size_info WHERE ID='$ID'  ORDER BY `cloths_size_info`.`SIZE` ASC";

                    }
                    else
                    {
                        $fetchSize="SELECT * FROM shoes_size_info WHERE ID='$ID'  ORDER BY `shoes_size_info`.`SIZE` ASC";

                    }
                    $fetch=$con->query($fetchSize);
                    if ($fetch->num_rows > 0)
                    {
                        $i=0;
                        while ($row=$fetch->fetch_assoc())
                        {

                                    if($row['AWLBL']!=0)
                        {
                                    $size[$i]=$row["SIZE"];

                        }
                        else
                        {
                            $size[$i]=null;
                        }
                            
                            $i++;     
                            
                        }
                    }
                    ?>
                </span>
            </div>
            <div class="size-section mt-3 text-center  mx-auto" style="width:fit-content ;">
                    <h5>
                    Select Size (INDIA)
                    </h5>
                    <div class="  d-flex sizes  gap-1  " >
                    <div class="border OPT  border-dark  rounded-circle" >
                    <span class="fs-4   <?php if($size[0]==null){ echo " text-decoration-line-through ";} ?> "> <?php if(isset($ProType) && $ProType=='cloth'){echo "S";}else { ?>6 <?php } ?></span>
    
                    </div>    
                    <div class="border OPT border-dark rounded-circle" >
                    <span class="fs-4 <?php if($size[1]==null){ echo " text-decoration-line-through ";} ?>"><?php if(isset($ProType) && $ProType=='cloth'){echo "M";}else { ?>7 <?php } ?></span>
    
                    </div>  <div class="border OPT border-dark rounded-circle" >
                    <span class="fs-4 <?php if($size[2]==null){ echo " text-decoration-line-through ";} ?>"><?php if(isset($ProType) && $ProType=='cloth' ){echo "L";}else { ?>8 <?php } ?></span>
    
                    </div>  <div class="border OPT border-dark rounded-circle" >
                    <span class="fs-4 <?php if($size[3]==null){ echo " text-decoration-line-through ";} ?>"><?php if(isset($ProType) && $ProType=='cloth'){echo "XL";}else { ?>9 <?php } ?></span>
    
                    </div>  
                    <div class="border OPT border-dark rounded-circle" >
                    <span class="fs-4 <?php if($size[4]==null){ echo " text-decoration-line-through ";} ?>"><?php if(isset($ProType) && $ProType=='cloth'){echo "XXL";}else { ?>10<?php } ?></span>
    
                    </div>  
                </div>
                </div>
            <div class="cart-btn text-center ">
                <form action="includes/CART/CART.InfoCheck.php" method="post">
                    <input type="hidden" name="Sizeinput" value=''>
                    <input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>">
                    <input type="hidden" name="ProType" value="<?php echo $ProType; ?>">

                    <button type="submit" class="w-75"><i class="bi bi-bag-fill text-light"></i>  ADD TO BUY</button>
                </form>
            </div>
        </div>    
        </div>
    </div>

       
    </div>

<?php include('includes/CART/Similar Main/SFetchMain.php');
?>
</div>
</div>
<?php include('FOOTER.php');  ?>
<?php


//  if(!$set)
//  {
//      echo "error";
//  }
 ?>
<?php include('Helpers/Footer.php'); ?>
<script src="Helpers/Nav.js"></script>
    <script>
        document.getElementById("Rating").textContent=parseInt(Math.random()*1000)+" Rattings";
        let opt=document.getElementsByClassName('OPT');
        let form=document.getElementsByTagName('form')[0];
        let Sizeinput=document.getElementsByName('Sizeinput')[0];
        console.log(opt[0])
        for(var i=0; i<opt.length; i++)
        {
            
            
            opt[i].addEventListener('click',function(){
            for(var j=0; j<opt.length; j++)
            {
opt[j].classList.remove('bg-dark','text-light');
            }
            if(this.children[0].classList[1]!="text-decoration-line-through")
            {
                this.className+= " bg-dark text-light ";

                Sizeinput.value=this.getElementsByTagName('span')[0].textContent;        
            console.log(Sizeinput);

            }
            else
            {
            
                alert(" SORRY SIR, CURRENTLY SIZE " +   this.getElementsByTagName('span')[0].textContent+ " ARE OUTOF STOCK!");
            }
                
            })
        }
        
    </script>
    <!-- for left right  -->
    <script>
        let left=document.getElementById('left');
        // left.style.position="absolute !important";
        let right=document.getElementById('right');
        let Box=document.getElementById('BOX');
        let Rrem=0;
        let Lrem=0;

        left.addEventListener('click',function(){
            
          if(Rrem>0)
          {
            if(window.innerWidth>=430)
          {
            Rrem=Rrem-72;

          }
          else
          {
            Rrem=Rrem-16.5;

          }
          console.log(Box.style.width);
            Box.style.transform=`translateX(-${Rrem}rem)`;
          }
       
        

        })
        right.addEventListener('click',function(){
            if(window.innerWidth>=430)
          {
            if(Rrem<144)
            {
                Rrem=Rrem+72;

            }


          }
           else
           {
            Rrem=Rrem+16.5;

           }
            // Box.style.right=Rrem+"rem";
                // console.log(Box.style.right);
                Box.style.transform=`translateX(-${Rrem}rem)`;



          
            Box.scrollBy({behavior: 'smooth'});

        })

 
    </script>
    <!-- for chnage main  -->
    <script>
        let Main_img =document.getElementsByClassName('Main_img')[0];
let CHILD_img = document.getElementsByClassName('CHILD_IMGS');
for (let i=0; i<CHILD_img.length;i++) {
CHILD_img[i].addEventListener("mouseover", () =>
  {
        console.log(CHILD_img[i].src);
        Main_img.src=CHILD_img[i].src;

  });
}
    </script>
 
</body>
</html>