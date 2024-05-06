    <div class="  d-flex overflow-hidden my-4 rounded"  > 
        <button class="btn p-0 fs-1 position-sticky " style="left: 7%; z-index: 100;"  id="left"><</button>
        <div class="overflow-hidden w-75 container">
        <div class="d-flex  mx-auto gap-2 justify-content-between position-relative   "  id="BOX"  >
        <?php
    $SMainFetch="SELECT * FROM $LTYPE"."_shoes WHERE ID!='$ID'";
    $SMainResult=$con->query($SMainFetch);
    if($SMainResult->num_rows> 0){
        
    while($SMainResults  =$SMainResult->fetch_assoc()){
    ?>
    <form action="" method="post">
    <button class="btn">
    <img class="  " style="width: 10.3rem !important;"  src="<?php echo $SMainResults['I_ADD'] ?>"  alt="" >
    <h6>
        <?php echo $SMainResults['NAME']; ?>
        <?php  ?>
    </h6>
    </button>
    <input type="hidden" name="ID" value="<?php echo $SMainResults['ID']; ?>">
    </form>





    <?php 

    }
    }

    ?>  

    </div>


    </div>
        <button class="btn p-0 fs-1 position-relative "  style="right: 7%;" id="right">></button>

    </div>
