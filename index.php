<?php session_start();
$servername = "localhost";
$pass = "";
$username = "root";
$dbname = 'add_to_cart';
$con = new mysqli($servername, $username, $pass, $dbname);
// truncate {
$TTable = "TRUNCATE TABLE add_cart_info";
if (basename(__FILE__) != 'MAIN_CART.php') {
  $con->query($TTable);
}
// truncate}
?>

<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="index.css">

<?php
include('Helpers/LINKS.php');
?>
<style>
  @media all and (min-width: 992px) {
    .navbar .nav-item .dropdown-menu {
      display: none;
    }

    .navbar .nav-item:hover .nav-link {}

    .navbar .nav-item:hover .dropdown-menu {
      display: block;
    }

    .navbar .nav-item .dropdown-menu {
      margin-top: 0;
    }
  }

  body {
    background-color: beige !important;

  }


  .btn1 {
    width: 130px;
    height: 40px;
    font-size: 1.1em;
    cursor: pointer;
    background-color: whitesmoke;
    color: black !important;
    border: none;
    border-radius: 5px;
    transition: all .4s;
  }

  .btn1:hover {
    border-radius: 5px;
    transform: translateY(-10px);
    box-shadow: 0 7px 0 -2px #f85959,
      0 15px 0 -4px #39a2db,
      0 16px 10px -3px #39a2db;
  }

  .btn1:active {
    transition: all 0.2s;
    transform: translateY(-5px);
    box-shadow: 0 2px 0 -2px #f85959,
      0 8px 0 -4px #39a2db,
      0 12px 10px -3px #39a2db;
  }
</style>


<!-- main Section  -->
<style>
  .img {
    aspect-ratio: 3/3;

  }
  @media only screen and (max-width:600px){
    .MainResponcive
    {
      flex-flow: column nowrap !important;
      margin-inline-start: auto!important;
      width: min-content !important;
      margin-inline-end: auto !important;
    }
    .MainResponcive *
    {
      width: min-content !important;

    }
    .MainResponcive img
    {
      width: 5rem !important; 
    }
    
  }
</style>
<?php
include('Helpers/LinkFiles.php');
?>
</head>

<body style="overflow-x: hidden;">

  <?php

  include('Helpers/Navbar.php'); ?>
  <main class="">
    <div style="height: fit-content; margin-bottom: auto;" class="d-grid">
      <div style="height: 80rem;">
        <!-- <h1 class="py-0  position-relative px-3 textAnimation  rounded" style="filter: drop-shadow(10px 10px 5px #999999); box-shadow: 2px 2px 10px #999999,inset 2px 2px 10px #999999; font-size: 5rem; margin-inline-start: auto; margin-inline-end: auto; width: 60rem; top: 5rem; font-family: DRAMITIC; ">
      <marquee class="mt-2" behavior="" direction="" scrollamount="25">Elevate Your Style: Bravo for the Best Deals on Clothing, Shoes, and Men's Accessories!</marquee>
       </h1> -->

        <div class="d-flex h-50 MainResponcive " style=" position: relative; bottom:0rem; align-items: center; overflow: hidden;">
          <div class="text-light text-center box-left " style="align-items: center; overflow: hidden;">
          <h4 class="mt-2 text-light text-center " style="font-family: FUTURA;">
                Big Sale <span class="fw-bolder px-2 text-light bg-danger rounded">50% Up</span> DISCOUNT! <span class="d-inline-block fw-bolder px-1" style=" color: #d90429; background: #f8edeb; border-radius: 0.5rem;">
                  On Cloths</span> Hurry Up....
              </h4>
            <div class="mt-0 pt-0 d-flex " style="align-items: space-between;">
            <div id="carouselExampleAutoplaying" class="carousel slide w-50 m-2  IMG" style="border-radius: 1rem; width: 15rem !important; opacity: 0; object-fit: cover; height: 15rem;" data-bs-ride="carousel">
                  <div class="carousel-inner ">
                    <?php
                    $i = 0;
                    $fetchNewArrival = "SELECT * FROM `cloth_info` NATURAL JOIN sports_cloths WHERE TYPE='SPORTS' AND DISCOUNT>=50 ";
                    $runNewArrival = mysqli_query($con, $fetchNewArrival);
                    if ($runNewArrival->num_rows > 0) { ?>
                      <?php while ($rowNewArrival = mysqli_fetch_array($runNewArrival)) {
                      ?>
                        <div class="carousel-item  <?php if ($i == 0) {
                                                    echo 'active';
                                                  } ?>">

                          <img src="<?php echo  $rowNewArrival['I_ADD']; ?>" class="d-block w-50" alt="..." style=" object-fit: cover;  object-position: ;   bottom: 0rem; position: relative; border-radius: 1rem; ">
                          <div class=" position-absolute " style="left:4rem; bottom: -0.3rem;">
                            <h5 class="text-danger" style="font-family: FUTURA;">
                              Flat
                              <span class="ps-2 pe-1 fw-bolder text-danger  rounded" style="color: black !important; background-color: #f85959;">
                                <?php echo $rowNewArrival['DISCOUNT']; ?>%

                              </span>
                              Off
                            </h5>
                          </div>
                        </div>


                    <?php
                        $i++;
                        if ($i == 3) {
                          break;
                        }
                      }
                    }
                    ?>

                    <button class="carousel-control-prev bg-dark  " style="height: 3rem; width: fit-content; margin: 0.2rem;  margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                      <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark    " style="height: 3rem; width: fit-content; margin: 0.2rem; margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


                </div>
                <div id="carouselExampleAutoplaying1" class="carousel slide w-50 m-2  IMG" style="border-radius: 1rem; width:10rem !important; opacity: 0; object-fit: cover; height: 15rem !important; " data-bs-ride="carousel">
                  <div class="carousel-inner ">
                    <?php
                    $i = 0;
                    $fetchNewArrival = "SELECT * FROM `cloth_info` NATURAL JOIN casual_cloths WHERE DISCOUNT>=10 ";
                    $runNewArrival = mysqli_query($con, $fetchNewArrival);
                    if ($runNewArrival->num_rows > 0) { ?>
                      <?php while ($rowNewArrival = mysqli_fetch_array($runNewArrival)) {
                      ?>
                   <div class="carousel-item   <?php if ($i == 0) {
                                                    echo 'active';
                                                  } ?>"  >

                          <img src="<?php echo  $rowNewArrival['I_ADD']; ?>" class="d-block w-50" alt="..." style=" object-fit: cover;   bottom: 0rem; position: relative; border-radius: 1rem; ">
                          <div class=" position-absolute " style="left:1rem; bottom: -0.3rem;">
                            <h5 class="text-danger" style="font-family: FUTURA;">
                              Flat
                              <span class="ps-2 pe-1 fw-bolder text-danger  rounded" style="color: black !important; background-color: #f85959;">
                                <?php echo $rowNewArrival['DISCOUNT']; ?>%

                              </span>
                              Off
                            </h5>
                          </div>
                        </div>


                    <?php
                        $i++;
                        if ($i == 3) {
                          break;
                        }
                      }
                    }
                    ?>

                    <button class="carousel-control-prev bg-dark  " style="height: 3rem; width: fit-content; margin: 0.2rem;  margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                      <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark    " style="height: 3rem; width: fit-content; margin: 0.2rem; margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


                </div>
                <div id="carouselExampleAutoplaying3" class="carousel slide w-25 m-2  IMG" style="border-radius: 1rem; width: 20rem !important; opacity: 0; object-fit: contain; height: 15rem;" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                    $i = 0;
                    $fetchNewArrival = "SELECT * FROM `shoe_info` NATURAL JOIN casual_shoes WHERE TYPE='CASUAL' AND DISCOUNT>=50 ";
                    $runNewArrival = mysqli_query($con, $fetchNewArrival);
                    if ($runNewArrival->num_rows > 0) { ?>
                      <?php while ($rowNewArrival = mysqli_fetch_array($runNewArrival)) {
                      ?>
                        <div class="carousel-item  <?php if ($i == 0) {
                                                      echo 'active';
                                                    } ?>">

                          <img src="<?php echo  $rowNewArrival['I_ADD']; ?>" class="d-block w-100 " alt="..." style="bottom: 0rem; height: 15rem; object-fit: cover; position: relative; border-radius: 1rem; ">
                          <div class=" position-absolute " style="left:6.5rem; bottom: 0.5rem;">
                            <h5 class="text-danger" style="font-family: FUTURA;">
                              Flat
                              <span class="ps-2 pe-1 fw-bolder text-danger  rounded" style="color: black !important; background-color: #f85959;">
                                <?php echo $rowNewArrival['DISCOUNT']; ?>%

                              </span>
                              Off
                            </h5>
                          </div>
                        </div>


                    <?php
                        $i++;
                        if ($i == 3) {
                          break;
                        }
                      }
                    }
                    ?>

                    <button class="carousel-control-prev bg-dark  " style="height: 3rem; width: fit-content; margin: 0.2rem;  margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying3" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                      <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark    " style="height: 3rem; width: fit-content; margin: 0.2rem; margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying3" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


                </div>

 </div>
          </div>



          <?php
          $FirstVideo = "SELECT * FROM index_contant WHERE PLACE='TOP Video'";
          $FetchVideo = $con->query($FirstVideo);
          if ($FetchVideo->num_rows > 0) {
            while ($row = $FetchVideo->fetch_assoc()) {
          ?>
              <video class="boxCenter me-auto ms-auto   " muted autoplay style=" height: 60rem;  width: 20rem;    border-radius: 1rem; position: relative; object-fit:  cover;  transform: rotate(-90deg) !important;">
                <Source src="<?php echo $row['VIDEO']; ?>.mp4" style="position: relative; bottom:2rem;" type="video/mp4">
                </Source>
                <!-- <source src.ogg" type="video/ogg"> -->

              </video>
          <?php
            }
          }
          ?>

          <div class="boxRight float-end">
            <div class="">
              <h4 class="mt-2 text-light text-center" style="font-family: FUTURA;">
                Big Sale <span class="fw-bolder px-2 text-light bg-danger rounded">50% Up</span>  DISCOUNT! <span class="d-inline-block px-1 fw-bolder" style=" margin-top: 20px; color: #d90429; background: #f8edeb; border-radius: 0.5rem;">
                  On Shoes</span> Hurry Up....
              </h4>


              <div class="d-flex  " style="flex-direction:row; transform: scale(90%); ">

                <div id="carouselExampleAutoplaying1\" class="carousel slide w-25 m-2  IMG" style="border-radius: 1rem; width: 20rem !important; opacity: 0; object-fit: cover; height: 15rem;" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                    $i = 0;
                    $fetchNewArrival = "SELECT * FROM `shoe_info` NATURAL JOIN sports_shoes WHERE TYPE='SPORTS' AND DISCOUNT>=50 ";
                    $runNewArrival = mysqli_query($con, $fetchNewArrival);
                    if ($runNewArrival->num_rows > 0) { ?>
                      <?php while ($rowNewArrival = mysqli_fetch_array($runNewArrival)) {
                      ?>
                        <div class="carousel-item <?php if ($i == 0) {
                                                    echo 'active';
                                                  } ?>">

                          <img src="<?php echo  $rowNewArrival['I_ADD']; ?>" class="d-block w-100 " alt="..." style="bottom: 2rem; position: relative; border-radius: 1rem; ">
                          <div class=" position-absolute " style="left:6.5rem; bottom: 5rem;">
                            <h5 class="text-danger" style="font-family: FUTURA;">
                              Flat
                              <span class="ps-2 pe-1 fw-bolder text-danger  rounded" style="color: black !important; background-color: #f85959;">
                                <?php echo $rowNewArrival['DISCOUNT']; ?>%

                              </span>
                              Off
                            </h5>
                          </div>
                        </div>


                    <?php
                        $i++;
                        if ($i == 3) {
                          break;
                        }
                      }
                    }
                    ?>

                    <button class="carousel-control-prev bg-dark  " style="height: 3rem; width: fit-content; margin: 0.2rem;  margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                      <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark    " style="height: 3rem; width: fit-content; margin: 0.2rem; margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


                </div>
                <div id="carouselExampleAutoplaying1" class="carousel slide w-25 m-2  IMG" style="border-radius: 1rem; width: 20rem !important; opacity: 0; object-fit: cover; height: 15rem;" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                    $i = 0;
                    $fetchNewArrival = "SELECT * FROM `shoe_info` NATURAL JOIN formal_shoes WHERE TYPE='FORMAL' AND DISCOUNT>=50 ";
                    $runNewArrival = mysqli_query($con, $fetchNewArrival);
                    if ($runNewArrival->num_rows > 0) { ?>
                      <?php while ($rowNewArrival = mysqli_fetch_array($runNewArrival)) {
                      ?>
                        <div class="carousel-item <?php if ($i == 0) {
                                                    echo 'active';
                                                  } ?>">

                          <img src="<?php echo  $rowNewArrival['I_ADD']; ?>" class="d-block w-100 " alt="..." style="bottom: 10rem; position: relative; border-radius: 1rem; ">
                          <div class=" position-absolute " style="left:6.5rem; bottom: 11.5rem;">
                            <h5 class="text-danger" style="font-family: FUTURA;">
                              Flat
                              <span class="ps-2 pe-1 fw-bolder text-danger  rounded" style="color: black !important; background-color: #f85959;">
                                <?php echo $rowNewArrival['DISCOUNT']; ?>%

                              </span>
                              Off
                            </h5>
                          </div>
                        </div>


                    <?php
                        $i++;
                        if ($i == 3) {
                          break;
                        }
                      }
                    }
                    ?>

                    <button class="carousel-control-prev bg-dark  " style="height: 3rem; width: fit-content; margin: 0.2rem;  margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                      <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark    " style="height: 3rem; width: fit-content; margin: 0.2rem; margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying1" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


                </div>
                <div id="carouselExampleAutoplaying2" class="carousel slide w-25 m-2  IMG" style="border-radius: 1rem; width: 20rem !important; opacity: 0; object-fit: contain; height: 15rem;" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <?php
                    $i = 0;
                    $fetchNewArrival = "SELECT * FROM `shoe_info` NATURAL JOIN casual_shoes WHERE TYPE='CASUAL' AND DISCOUNT>=50 ";
                    $runNewArrival = mysqli_query($con, $fetchNewArrival);
                    if ($runNewArrival->num_rows > 0) { ?>
                      <?php while ($rowNewArrival = mysqli_fetch_array($runNewArrival)) {
                      ?>
                        <div class="carousel-item  <?php if ($i == 0) {
                                                      echo 'active';
                                                    } ?>">

                          <img src="<?php echo  $rowNewArrival['I_ADD']; ?>" class="d-block w-100 " alt="..." style="bottom: 0rem; height: 15rem; object-fit: cover; position: relative; border-radius: 1rem; ">
                          <div class=" position-absolute " style="left:6.5rem; bottom: 0.5rem;">
                            <h5 class="text-danger" style="font-family: FUTURA;">
                              Flat
                              <span class="ps-2 pe-1 fw-bolder text-danger  rounded" style="color: black !important; background-color: #f85959;">
                                <?php echo $rowNewArrival['DISCOUNT']; ?>%

                              </span>
                              Off
                            </h5>
                          </div>
                        </div>


                    <?php
                        $i++;
                        if ($i == 3) {
                          break;
                        }
                      }
                    }
                    ?>

                    <button class="carousel-control-prev bg-dark  " style="height: 3rem; width: fit-content; margin: 0.2rem;  margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon " aria-hidden="true"></span>
                      <span class="visually-hidden ">Previous</span>
                    </button>
                    <button class="carousel-control-next bg-dark    " style="height: 3rem; width: fit-content; margin: 0.2rem; margin-top: 6rem;  border-radius: 0.5rem;" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


                </div>
              </div>

            </div>

          </div>

        </div>

        <div class="CLOTHS text-center">
          <h2 style="font-family: FUTURA;">
            IF YOU WANT TO FEEL 100% CLOTH FABRIC
            <hr>
          </h2>
          <div class="d-flex  design2 border-dark border-2 " style="height: 20rem; border-radius: 1rem;">
            <!-- this is forst row box -->
            <div style="width: 50%; background: transparent;  border-radius: 1rem;" class="border d-flex YELLOW-BOX text-center">
              <div class="w-50 product-d my-auto" style=" height: 16rem;  overflow: hidden; border-right: 3px solid white;">
                <div class="discriptions">
                  <h6 class="dicription1 mt-3">
                    "Step up your style game with our meticulously crafted formal pants, tailored to perfection for the modern gentleman. Crafted from premium quality materials, our formal pants offer a sleek and sophisticated silhouette, ideal for any professional setting. With impeccable attention to detail and a range of classic colors to choose from, these pants effortlessly blend style and comfort, making them a versatile addition to your wardrobe. Elevate your ensemble with our collection of formal pants, designed to exude timeless elegance and refinement."

                  </h6>
                  <h6 class="dicription2 d-block mt-5" style="top: 5rem ; position: relative;">
                    "Elevate your wardrobe with our exquisite collection of formal shirts, meticulously crafted to complement your refined taste. Made from premium fabrics, our shirts boast superior quality and impeccable craftsmanship, ensuring both style and comfort throughout your day. Whether you're heading to the boardroom or a formal event, our shirts effortlessly blend sophistication with versatility. With a range of classic and contemporary designs to choose from, each shirt exudes timeless elegance and impeccable tailoring. Discover the perfect balance of style and professionalism with our selection of formal shirts, designed to make a lasting impression."

                  </h6>
                </div>
              </div>

              <div class="w-50" style="overflow:hidden ; border-left: 3px solid white; ">
                <div class="PRODUCTS">
                  <img class="IMG shirt rounded mt-4" src="Index video/phtos/formal-SHIRT yellow box.png" alt="">
                  <img class="IMG shirt rounded mt-4" style="height: fit-content;" src="Index video/phtos/formal pent yellow box.png" alt="">




                </div>

              </div>
            </div>
            <!-- center GAP -->
            <div class="border border-light" style="width: 3px;">

            </div>
            <!--  -->

            <div style="width: 50%; background: transparent;  border-radius: 1rem;" class="border d-flex YELLOW-BOX text-center">
              <div class="w-50 product-d my-auto" style=" height: 16rem;  overflow: hidden; border-right: 3px solid white;">
                <div class="discriptions">
                  <h6 class="dicription1 mt-5 " style="position: relative; top: 0rem;">
                    "Step up your style game with our meticulously crafted formal pants, tailored to perfection for the modern gentleman. Crafted from premium quality materials, our formal pants offer a sleek and sophisticated silhouette, ideal for any professional setting. With impeccable attention to detail and a range of classic colors to choose from, these pants effortlessly blend style and comfort, making them a versatile addition to your wardrobe. Elevate your ensemble with our collection of formal pants, designed to exude timeless elegance and refinement."

                  </h6>
                  <h6 class="dicription2 d-block mt-5" style="position: relative; top: 5rem;">
                    "Elevate your casual style with our comfortable trousers, crafted for versatility and durability, perfect for everyday wear. Explore now!"

                  </h6>
                </div>
              </div>

              <div class="w-50" style="overflow:hidden ; border-left: 3px solid white; ">
                <div class="PRODUCTS">
                  <img class="IMG shirt rounded " style="height: fit-content; position: relative; top: -2rem ;" src="Index video/phtos/CASUAL-TSHIRT YELLOW BOX 2 div.png" alt="">
                  <img class="IMG shirt rounded " style="height: fit-content;  position: relative; top: -4rem ; transform: scale(120%);" src="Index video/phtos/CASUAL PENT.png" alt="">




                </div>

              </div>
            </div>


          </div>


        </div>
      </div>


    </div>
    </div>
  </main>
  <?php
  include('Footer.php');
  include('Helpers/Footer.php');

  ?>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // make it as accordion for smaller screens
      if (window.innerWidth > 992) {

        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem) {

          everyitem.addEventListener('mouseover', function(e) {

            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
              let nextEl = el_link.nextElementSibling;
              el_link.classList.add('show');
              nextEl.classList.add('show');
            }

          });
          everyitem.addEventListener('mouseleave', function(e) {
            let el_link = this.querySelector('a[data-bs-toggle]');

            if (el_link != null) {
              let nextEl = el_link.nextElementSibling;
              el_link.classList.remove('show');
              nextEl.classList.remove('show');
            }


          })
        });

      }
      // end if innerWidth
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>.
  <script>
    const a = document.getElementsByClassName("nav-link dropdown-toggle");
    document.getElementById("cloth").style = ("color:white;");
    console.log(a[0]);
    a[0].style = "color:white;"
  </script>
  <script>
    let left_box = document.getElementsByClassName("box-left")[0];
    let img = left_box.querySelectorAll(".img");
    console.log(img[1].style.right);
    if (img[1].classList != "animation1") {
      img[1].className += " animation1 ";

    }
    if (img[2].classList != "animation2") {
      img[2].className += " animation2 ";
    }
  </script>
  <script>
    let CS = document.getElementsByClassName('CS');
    console.log(CS)
    const slidemenu = document.getElementsByClassName('sidemenu');
    console.log(slidemenu)
    for (let i = 0; i < CS.length; i++) {
      CS[i].addEventListener('mouseover', () => {
        console.log(CS[i]);
        slidemenu[i].addEventListener('mouseover', () => {
          slidemenu[i].style.display = "block";
          slidemenu[i].style.animation = "Fade-in 0.8s ease-out forwards";

        });
        slidemenu[i].style.display = "block";
        slidemenu[i].style.animation = "Fade-in 0.8s ease-out forwards";
      });
      CS[i].addEventListener('mouseout', () => {
        slidemenu[i].style.display = "none";
      });
    }
    // console.log(sc);
    // sc.addEventListener('mouseover',() => {
    // slidemenu[0].style.display="block";
    // slidemenu[0].style.animation="Fade-in 0.8s ease-out forwards";        
    // });
    // sc.addEventListener('mouseout',() => {
    // slidemenu[0].style.display="none";        
    // });


    // Cc.addEventListener('mouseover',() => {
    //   slidemenu[1].addEventListener('mouseover',() => {
    // slidemenu[1].style.display="block";
    // slidemenu[1].style.animation="Fade-in 0.8s ease-out forwards";        

    //   });  
    // slidemenu[1].style.display="block";
    // slidemenu[1].style.animation="Fade-in 0.8s ease-out forwards";        
    // });
    // Cc.addEventListener('mouseout',() => {
    // slidemenu[1].style.display="none";        
    // });
  </script>
  <script>
    console.log(document)
  </script>
</body>

</html>