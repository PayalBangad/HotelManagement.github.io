<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
        <title>Saffron Hotel</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
        <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

        <style type="text/css">
            .btn{
                margin-right: 15px;
            }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
          <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="image/img/Logo.png" width="163" height="50" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="facilities.html">Facilities</a></li>
                            <li class="nav-item"><a class="nav-link" href="accomodation.html">Accomodation</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>                  
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
							<li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                        </ul>
                    </div> 
                </nav>
            </div>
        </header>
        <!--================Header Area Finish=================-->
        <br><br><br><br><br><br>
        
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>Room Booking Page</h3></center>
       	</div>
       </div><br><br>
       <center><h5>Room Type:-  Double Deluxe Room </h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"Saffron_hotel");
                $query = "select * from single_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Single Deluxe Room</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"Saffron_hotel");
                $query = "select * from single_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        <center><h5>Room Type:-  Honeymoon Suit</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"Saffron_hotel");
                $query = "select * from double_non_ac";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["room_no"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="admin/book_room.php?rn=<?php echo $row['room_no'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br><br>
        
        <!--================ start footer Area  =================-->	
       <footer class="footer-area section_gap">
            <div class="container">
             
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					
                          Copyright designed by payal&copy;<script>document.write(new Date().getFullYear());</script></p>
                   
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>