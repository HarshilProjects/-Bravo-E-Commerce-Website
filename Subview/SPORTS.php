<?php 
      $fatchFormals="SELECT *
      FROM shoe_info
      NATURAL JOIN sports_shoes WHERE shoe_info.ID=sports_shoes.ID AND shoe_info.TYPE='SPORTS'";
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
                        $fetchChilds="SELECT * FROM child_sports WHERE ID = '$ID'";
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
                        <img class="IMG float-end me-5"style="border-radius:10px; position:; left:6rem;  height: 12rem ; width: 12rem; margin-top: 6rem; object-fit:contain;" src="<?php echo $row['I_ADD']; ?>" alt="">
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
          
            ?>
      </div>
        </main>