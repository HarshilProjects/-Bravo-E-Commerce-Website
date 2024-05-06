<?php 
include('Helpers/ServerConnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="MAIN UI/UI.css">
    <style>
     @keyframes slideInLeft {
         0% {
             transform: translateX(-100%);
         }

         100% {
             transform: translateX(0);
         }
     }
     /* for user info */
@keyframes U_I_S{
    0%
    {
        top: -300px; opacity: 0%;
    }
  75%
{
    top: 50px; opacity: 25%;
}
    100%
    {
        top: 9%; opacity: 100%;
        
    }

}
/* for usser info */
@keyframes U_I_N {
    0%
    {
        top: 9%; opacity: 100%;

    }
    75%
{
    top: 50px; opacity: 50%;
}
100%
{
    top: -300px; opacity:100%;

}

}
     @keyframes STEMP {
         0% {
             /* width:225px;  right: 195px; top: 230px ; height:180px; opacity: 0%; */
             width: 200x;
             right: -120px;
             opacity: 0%;

         }

         75% {
             right: 10px;
             opacity: 35%;
         }

         100% {

             /* width: 320px; */

         }
     }

     .animation {
         /* animation: STEMP 0.2s normal forwards ease-in-out  ; */
     }

     header {
         animation: 1s ease-out 0s 1 slideInLeft;
         background: #666;
         padding: 40px;
     }
     </style>
     <style>
     .BLACK {
         height: 15px;
         width: 15px;
         background-color: black;
         border-radius: 50%;
         display: inline-block;
     }

     .WHITE {
         height: 15px;
         width: 15px;
         background-color: white;
         border-radius: 50%;
         display: inline-block;
     }

     .GREY {
         height: 15px;
         width: 15px;
         background-color: GREY;
         border-radius: 50%;
         display: inline-block;
     }

     .GRADIANT {
         height: 15px;
         width: 15px;
         background: rgb(121, 90, 173);
         background: linear-gradient(90deg, rgba(121, 90, 173, 1) 0%, rgba(128, 153, 187, 1) 48%, rgba(97, 144, 67, 1) 100%);
         font-weight: 700;
         color: black;
         border-radius: 50%;
         display: inline-block;
     }

     .NAVY {
         height: 15px;
         width: 15px;
         background: NAVY;
         border-radius: 50%;
         display: inline-block;
     }

     .GREEN_BLACK {
         height: 15px;
         width: 15px;
         background: rgb(142, 235, 28);
         background: linear-gradient(0deg, rgba(142, 235, 28, 1) 0%, rgba(0, 0, 0, 1) 100%);
         border-radius: 50%;
         display: inline-block;
     }

     .WHITE_BLUE {
         height: 15px;
         width: 15px;
         background: rgb(41, 222, 214);
         background: linear-gradient(0deg, rgba(41, 222, 214, 1) 2%, rgba(255, 255, 255, 1) 50%);
         border-radius: 50%;
         display: inline-block;


     }

     .GREEN_BLACK {
         height: 15px;
         background: rgb(142, 222, 41);
         background: linear-gradient(0deg, rgba(142, 222, 41, 1) 13%, rgba(148, 162, 30, 1) 27%, rgba(0, 0, 0, 1) 65%);
         border-radius: 50%;
         display: inline-block;

     }

     .WHITE_BLACK {
         height: 15px;
         width: 15px;
         background: rgb(255, 255, 255);
         background: linear-gradient(0deg, rgba(255, 255, 255, 1) 13%, rgba(0, 0, 0, 1) 65%);
         border-radius: 50%;
         display: inline-block;
     }

     .GREY_SKYBLUE {
         height: 15px;
         width: 15px;
         border-radius: 50%;
         display: inline-block;


         background: rgb(192, 192, 192);
         background: linear-gradient(0deg, rgba(192, 192, 192, 1) 13%, rgba(112, 200, 245, 1) 65%);
     }

     .MULTI {

         height: 15px;
         width: 15px;
         border-radius: 50%;

         display: inline-block;

         background: rgb(112, 245, 214);
         background: radial-gradient(circle, rgba(112, 245, 214, 1) 0%, rgba(255, 186, 55, 1) 45%, rgba(240, 9, 9, 1) 100%);
     }
     
.letter-image {
	position: absolute;
	top: 20%;
	left: 45%;
	width: 10px;
	height: 10px;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	cursor: pointer;
}

.animated-mail {
	position: absolute;
	height: 150px;
	width: 200px;
	-webkit-transition: .4s;
	-moz-transition: .4s;
	transition: .4s;
	
	.body {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 0 100px 200px;
		border-color: transparent transparent #e95f55 transparent;
		z-index: 2;
	}
	
	.top-fold {
		position: absolute;
		top: 50px;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 100px 0 100px;
		-webkit-transform-origin: 50% 0%;
		-webkit-transition: transform .4s .4s, z-index .2s .4s;
		-moz-transform-origin: 50% 0%;
		-moz-transition: transform .4s .4s, z-index .2s .4s;
		transform-origin: 50% 0%;
		transition: transform .4s .4s, z-index .2s .4s;
		border-color: #cf4a43 transparent transparent transparent;
		z-index: 2;
	}
	
	.back-fold {
		position: absolute;
		bottom: 0;
		width: 200px;
		height: 100px;
		background: #cf4a43;
		z-index: 0;
	}
	
	.left-fold {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 0 50px 100px;
		border-color: transparent transparent transparent #e15349;
		z-index: 2;
	}
	
	.letter {
		left: 20px;
		bottom: 0px;
		position: absolute;
		width: 160px;
		height: 60px;
		background: white;
		z-index: 1;
		overflow: hidden;
		-webkit-transition: .4s .2s;
		-moz-transition: .4s .2s;
		transition: .4s .2s;
		
		.letter-border {
			height: 10px;
			width: 100%;
      background: repeating-linear-gradient(
        -45deg,
        #cb5a5e,
        #cb5a5e 8px,
        transparent 8px,
        transparent 18px
      );
		}
		
		.letter-title {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 40%;
			background: #cb5a5e;
		}
		.letter-context {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 20%;
			background: #cb5a5e;
		}
		
		.letter-stamp {
			margin-top: 30px;
			margin-left: 120px;
			border-radius: 100%;
			height: 30px;
			width: 30px;
			background: #cb5a5e;
			opacity: 0.3;
		}
	}
}


	.letter-image:hover {
		.animated-mail {
			transform: translateY(50px);
			-webkit-transform: translateY(50px);
			-moz-transform: translateY(50px);
		}
		
		.animated-mail .top-fold {
			transition: transform .4s, z-index .2s;
			transform: rotateX(180deg);
			-webkit-transition: transform .4s, z-index .2s;
			-webkit-transform: rotateX(180deg);
			-moz-transition: transform .4s, z-index .2s;
			-moz-transform: rotateX(180deg);
			z-index: 0;
		}
		
		.animated-mail .letter {
			height: 180px;
		}
		
	} 
    .cta {
  border: none;
  background: none;
  cursor: pointer;
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 4px;
  font-size: 14px;
  padding-right: 15px;
  text-transform: uppercase;
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: white;
  padding-bottom: 5px;
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
.card1{
  position: relative;
  width: 240px;
  height: 254px;
  background-color: #000;
  display: flex;
  flex-direction: column;
  /* justify-content: end; */
  padding: 12px;
  /* gap: 12px; */
  border-radius: 8px;
  cursor: pointer;
}

.card1::before {
  content: '';
  position: absolute;
  inset: 0;
  left: -5px;
  margin: auto;
  width: 250px;
  height: 264px;
  border-radius: 10px;
  background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100% );
  z-index: -10;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card1::after {
  content: "";
  z-index: -1;
  position: absolute;
  inset: 0;
  background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );
  transform: translate3d(0, 0, 0) scale(0.95);
  filter: blur(20px);
}

.heading {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 700;
}

.card1 p:not(.heading) {
  font-size: 14px;
}

.card1 p:last-child {
  color: #e81cff;
  font-weight: 600;
}

.card1:hover::after {
  filter: blur(30px);
}

.card1:hover::before {
  transform: rotate(-90deg) scaleX(1.34) scaleY(0.77);
}

     </style>
    <?php
include('Helpers/LINKS.php');
?>
</head>

<body>
    <?php 
  include('Helpers/Navbar.php');
  ?>
    <main>
    <?php
    $fatchFormals="SELECT *
    FROM shoe_info
    NATURAL JOIN crocs_shoes WHERE shoe_info.ID=crocs_shoes.ID AND shoe_info.TYPE='CROCS'";
    $result=mysqli_query($con,$fatchFormals);
    if(mysqli_num_rows($result)>0)
    {?>
    <ul class="container  LIST_UL border border-top-0 border-dark  border-top-0 list-group p-0" style="height: 5rem !important; overflow: scroll !important; overflow-x: hidden !important; display: none; position: relative; z-index: 10; right: 14.2rem; bottom: 5rem; float: inline-end; width: fit-content;  ">

    <?php 
    while($row=mysqli_fetch_assoc($result))
    {
      
    ?>
      <li class="list-group-item Search_list" onmouseover="maketext(this);" style="width: 12rem; display: none;">
        <h6>
          <?php echo $row['NAME']; ?>
        </h6>
      </li>
    <?php
    }
  ?>
    </ul>
  
  <?php } ?>
  <?php if(isset($_POST['searchBtn']) && $_POST['search']!=""  )
  {
  
  
    $search=$_POST['search'];
    $fatchFormals="SELECT *
    FROM shoe_info
    NATURAL JOIN crocs_shoes WHERE shoe_info.ID=crocs_shoes.ID AND shoe_info.TYPE='crocs' AND shoe_info.NAME='$search'";
    $result=$con->query($fatchFormals);
    ?>
    
    <div class="">
       <div class="row col-2  p-4  ms-auto m-2" style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: all 1s; background-color: #555; border-radius:10px;width:80%; ">
       <?php 
       $j=0;
       $a=0;
       if($result->num_rows > 0)
       {
while($row = $result->fetch_assoc())
{
       
       ?> 
       <div class="col  pb-4" style="width: fit-content; transform: scale(100%); " >
    
       <div class="p-1 mb-5 PARTS " style="  border:#335c67 solid 2px ;  box-shadow: 0 0 10px rgba(100, 100, 100, 1); border-radius: 10px; background-color: #403d39; width: 420px;">
                <div class="d-flex" style="width:fit-content ;">

                    <div class=" CARD m-1 "
                        style="  border:#dee2e6 solid 2px; border-radius:10px ; background:white ; height: 25rem; width: 400px;">
                        <div class="ShoeChild" style="cursor: pointer;  width: fit-content; position:absolute;">
                        <div class="CHILD_IMGS" style="overflow: hidden; height: 0px; background: #403d39; border-radius: 2px  ; width: 90px; position:relative; top: -2px;">
                        <img src="<?php echo $row['I_ADD'];?>" onmouseover="popAudio();" class="d-block " style="aspect-ratio: 6/8;  border-radius: 10px;  padding: 4px; margin-inline-start: auto; margin-inline-end: auto;  width: 65px;" alt="">
                        
                        <?php 
                        $ID=$row['ID'];
                        $fetchChilds="SELECT * FROM child_crocs WHERE ID = '$ID'";
                        $thisresults=$con->query($fetchChilds);
                        if ($thisresults->num_rows > 0)
                          {
                            while($rows= $thisresults->fetch_assoc()) 
                            {

                        ?>
                        <input type="hidden" name=""value="<?php echo $row['NAME']; ?>" id="P_  NAME">
                        <img src="<?php $photo=$rows['I_ADD']; echo $rows['I_ADD']; ?>" name="COLORIMG" onmouseover="SendImg('<?php echo $photo;?>',this);"  class="d-block CHILDIMG " style=" border-radius: 10px; padding: 2px; margin-top:5px; aspect-ratio:  6/8 ;   margin-inline-start: auto; margin-inline-end: auto;  width: 65px;" alt="">
                        <input type="hidden" name="color" value="<?php echo $rows['COLOR'];?>" class="COLOR">
                       
                        <?php }} ?>
                      </div>
                        <div class="triangle-down " onmouseover="playSound();"style="position: relative; bottom: 2px;"  ></div>

                        <h6 style="position:relative; bottom: 2.5rem; left: 1.9rem; color:#ccd5ae ; font-size: 12px; ">more</h6>
                        </div>
                        <img class="IMG float-end me-5 "style="border-radius:20px ; position:; left:6rem;  height:fit-contant ; width: 15rem; margin-top: 3rem; object-fit:contain;" src="<?php echo $row['I_ADD']; ?>" alt="">

                      </div>

                    <div name="informations" id="informations" style="position: relative;   display: none; left: 1rem; opacity: 0%; height: fit-content; width:fit-content ;"  class=" box1 p-1 m-2">
                        <ul class="list-group rounded-3 " >
                            <li id="ProductInfo " class="border-0 list-group-item">
                            NAME : <span><?php echo $row['NAME']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            ID : <span><?php echo $row['ID']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            COLOR : <span><?php echo $row['COLOR']; ?> </span>
                            </li>
                            <li id="ProductInfo " style="gap: 5px;" class="d-flex border-0 list-group-item">
                            PRICE :
                            <span class="text-decoration-line-through " style="font-size: 10px; margin: 0px; margin-top: 8px; ">
                            
                            <?php echo  $row['PRICE']; ?>/-
                            </span>
                            <span> 
                               <span><?php $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice;  ?>/-</span>
                            </span>  
                          </li>
                        
                            <!-- <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li> -->
                        </ul>
                        <form action="CART_INFO.php" method="post">
                         
                                 <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                                 <input type="hidden" name="ProType" value="Shoes">
                                 <button type="submit" name="ADD" class=" btn btn-warning ms-3 mt-2">ADD TO CART <i
                                         class="bi bi-cart-plus-fill"></i></button>
                                </form>

                    </div>
                </div>
            </div>
            
            </div>
       <?php $j++;
        if($j==$a+2)
       {
        $a=$j;
        ?>
       </div>
       <div class="row p-4  ms-auto m-2" style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: all 1s; background-color: #faedcd; border-radius:10px;width:80%; ">
       
<?php
       } ?>
       

            <?php
 } }



  } 
  else{

 
  ?>
      <?php 
      $fatchFormals="SELECT *
      FROM shoe_info
      NATURAL JOIN crocs_shoes WHERE shoe_info.ID=crocs_shoes.ID AND shoe_info.TYPE='crocs'";
      $result=$con->query($fatchFormals);
      ?>
      <div class="">
       <div class="row col-2  p-4  ms-auto m-2" style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: all 1s; background-color: #faedcd; border-radius:10px;width:80%; ">
       <?php 
       $j=0;
       $a=0;
       if($result->num_rows > 0)
       {
while($row = $result->fetch_assoc())
{
       
       ?> 
       <div class="col  pb-4" style="width: fit-content; transform: scale(100%); " >
    
       <div class="p-1 mb-5 PARTS " style="  border:#335c67 solid 2px ;  box-shadow: 0 0 10px rgba(100, 100, 100, 1); border-radius: 10px; background-color: #403d39; width: 420px;">
                <div class="d-flex" style="width:fit-content ;">

                    <div class=" CARD m-1 "
                        style="  border:#dee2e6 solid 2px; border-radius:10px ; background:white ; height: 25rem; width: 400px;">
                        <div class="ShoeChild" style="cursor: pointer;  width: fit-content; position:absolute;">
                        <div class="CHILD_IMGS" style="overflow: hidden; height: 0px; background: #403d39; border-radius: 2px  ; width: 90px; position:relative; top: -2px;">
                        <img src="<?php echo $row['I_ADD'];?>" onmouseover="popAudio();" class="d-block " style="aspect-ratio: 6/8;  border-radius: 10px;  padding: 4px; margin-inline-start: auto; margin-inline-end: auto;  width: 65px;" alt="">
                        
                        <?php 
                        $ID=$row['ID'];
                        $fetchChilds="SELECT * FROM child_crocs WHERE ID = '$ID'";
                        $thisresults=$con->query($fetchChilds);
                        if ($thisresults->num_rows > 0)
                          {
                            while($rows= $thisresults->fetch_assoc()) 
                            {

                        ?>
                        <input type="hidden" name=""value="<?php echo $row['NAME']; ?>" id="P_  NAME">
                        <img src="<?php $photo=$rows['I_ADD']; echo $rows['I_ADD']; ?>" name="COLORIMG" onmouseover="SendImg('<?php echo $photo;?>',this);"  class="d-block CHILDIMG " style=" border-radius: 10px; padding: 2px; margin-top:5px; aspect-ratio:  6/8 ;   margin-inline-start: auto; margin-inline-end: auto;  width: 65px;" alt="">
                        <input type="hidden" name="color" value="<?php echo $rows['COLOR'];?>" class="COLOR">
                       
                        <?php }} ?>
                      </div>
                        <div class="triangle-down " onmouseover="playSound();"style="position: relative; bottom: 2px;"  ></div>

                        <h6 style="position:relative; bottom: 2.5rem; left: 1.9rem; color:#ccd5ae ; font-size: 12px; ">more</h6>
                        </div>
                        <img class="IMG float-end me-5 "style="border-radius:20px ; position:; left:6rem;  height:fit-contant ; width: 15rem; margin-top: 3rem; object-fit:contain;" src="<?php echo $row['I_ADD']; ?>" alt="">

                    </div>


                    <div name="informations" id="informations" style="position: relative;   display: none; left: 1rem; opacity: 0%; height: fit-content; width:fit-content ;"  class=" box1 p-1 m-2">
                        <ul class="list-group rounded-3 " >
                            <li id="ProductInfo " class="border-0 list-group-item">
                            NAME : <span><?php echo $row['NAME']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            ID : <span><?php echo $row['ID']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            COLOR : <span><?php echo $row['COLOR']; ?> </span>
                            </li>
                            <li id="ProductInfo " style="gap: 5px;" class="d-flex border-0 list-group-item">
                            PRICE :
                            <span class="text-decoration-line-through " style="font-size: 10px; margin: 0px; margin-top: 8px; ">
                            
                            <?php echo  $row['PRICE']; ?>/-
                            </span>
                            <span> 
                               <span><?php $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice;  ?>/-</span>
                            </span>  
                          </li>
                        
                            <!-- <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li> -->
                        </ul>
                        <form action="CART_INFO.php" method="post">
                          <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                                 
                                 <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
                              <input type="hidden" name="COLOR" value="<?php echo $row['COLOR']; ?>">
                                 <input type="hidden" name="price" id="DPSI1" value="<?php echo $row['PRICE']-$Dprice;; ?>">
                                 <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                                 <input type="hidden" name="ProType" value="Shoes">
                                 
                                 <button type="submit" name="ADD" class=" btn btn-warning ms-3 mt-2">ADD TO CART <i
                                         class="bi bi-cart-plus-fill"></i></button>
                                </form>

                    </div>
                </div>
            </div>
            
            </div>
       <?php $j++;
        if($j==$a+2)
       {
        $a=$j;
        ?>
       </div>
       <div class="row p-4  ms-auto m-2" style=" box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: all 1s; background-color: #faedcd; border-radius:10px;width:80%; ">
       
<?php
       } ?>
       

            <?php
 } } else{
            ?> NO DATA <?php 
           }
          }
            ?>
      </div>


    </main>
    <?php
    
  include('FOOTER.php');
  include('Helpers/Footer.php');
  ?>

<script>
  
let info=document.getElementsByName('informations');
let Col=document.getElementsByClassName('PARTS');
for (let i = 0; i < Col.length; i++) {
  // const element = array[i];
//  console.log( Col[i] );
Col[i].addEventListener("mouseover", ()=>{
info[i].style.display="";
});
Col[i].addEventListener("mouseout", ()=>{
info[i].style.display="none";
}); 
}


let Cimg=document.getElementsByClassName("CHILDIMG");
let Color=document.getElementsByName('color');
let ChildImg=document.getElementsByClassName('CHILD_IMGS');

console.log( Cimg.length );
for (let i = 0; i < Cimg.length; i++) {
// console.log(Cimg[j].parentElement.parentElement.nextElementSibling.src); 

Cimg[i].addEventListener("mouseover",()=>{
    
  Cimg[i].parentElement.parentElement.nextElementSibling.src=Cimg[i].src;
  console.assert(Cimg[i].src)
  document.getElementsByName("COLOR")[0].value=Color[i].value;
  console.log(document.getElementsByName("COLOR")[0]);

});
//  console.log(ChildImg[i].children[0]);
ChildImg[i].children[0].addEventListener('mouseover', ()=>{

// 
console.log();
document.getElementsByClassName('CHILD_IMGS')[i].parentElement.nextElementSibling.src=document.getElementsByClassName('CHILD_IMGS')[i].children[0].src;
console.log(document.getElementsByClassName('CHILD_IMGS')[i].parentElement.nextElementSibling.src);    
}
);
}

function SendImg(e,element)
{

let mainSrc=  element.parentElement.parentElement.nextElementSibling;
mainSrc.src=e;
// console.log(element.parentElement.parentElement.nextElementSibling.src=);
console.log(mainSrc);
let Audioo= new Audio('sounds/pop-39222.mp3');
Audioo.play();
}

function playSound() {
var audio = new Audio('sounds/shh.mp3');
audio.play();
}
function popAudio() {
var PlayAudio = new Audio('sounds/pop-39222.mp3');
playSound.play();

}
</script>
<script>
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  ul = document.getElementsByClassName("LIST_UL")[0];
  li = ul.getElementsByTagName('li');

function Seach() {
  input = document.getElementById('search');
  filter = input.value.toUpperCase();
  ul = document.getElementsByClassName("LIST_UL")[0];
  li = ul.getElementsByTagName('li');
  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("h6")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "block";
      li[i].style.cursor = "pointer";
      ul.style.display = "block";
    } else {
        // ul.style.height = "fit-content";
      li[i].style.display = "none";
      
    }
    if(filter ==="" || filter ===" ")
    {
      li[i].style.display = "none";
      ul.style.display = "none";
      document.getElementsByTagName("form")[0].method=" ";
    }

 
  }
}

input.addEventListener("focusout", ()=>{
  ul.style.display="none";
});

function maketext(el) { 
  console.log(el.getElementsByTagName("h6"));
  let input=document.getElementById("search");
  let text=el.getElementsByTagName("h6")[0].innerText;
  input.value=text;
}
</script>
</body>

</html>