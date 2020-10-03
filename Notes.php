<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NoteIt</title>
        

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">
        
        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/demo.css">
        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<style type="text/css">
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;

}

.topnav {
  overflow: hidden;
  background-color: skyblue;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 18px 22px;
  text-decoration: none;
  font-size: 22px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}



.topnav .icon {
  display: none;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
    color:white;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
    
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

.text{
  color:black;
  font-size: 35px;
  font-family: Century Gothic;
}

.textpar{
  color:black;
  font-size: 20px;
  font-family: Century Gothic;
  padding-left: 80px; 
  padding-right: 80px;
}



.textpar a{
  text-decoration: none;
  font-size: 20px;
  color: black;
  padding: 10px;
  border: 1.5px solid;
}

.textpar a:hover{
  color: gray;
  background-color: white;
}

.textpar input[type="submit"]{
  background: none;
  text-decoration: none;
  font-size: 20px;
  color: black;
  padding: 10px;
  border: 1.5px solid;
}

.textpar input[type="submit"]:hover{
  color: gray;
  background-color: white;
}



.textpar button{
  text-decoration: none;
  background: none;
  font-size: 20px;
  color: black;
  padding: 10px;
  border: 1.5px solid;
}

.textpar button:hover{
  color: gray;
  background-color: white;
}


.textpar input[type="text"],input[type="tel"],input[type="email"] {
  width:30%;
  display: block;
  margin: 25px auto; 
  border-color: gray;
  padding: 10px;
  outline: none;
  color: black;
  border-radius: 5px;
  margin-top: 20px;
}
.flip-card {
  background-color: transparent;
  width: 400px;
  height: 400px;
  perspective: 1000px;
  margin-top: 20px;
  margin-bottom: 15px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color:skyblue;
  
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  padding: 5px;
  transform: rotateY(180deg);
}
        </style>

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
         <!--========== HEADER ==========-->
        <header>
        <div class="topnav" id="myTopnav">
  <a href="home2.php" class="active"><img src="img/k.png"></a>
  <a href="home2.php">Home</a>
  <a href="about.html">About Us</a>
  <a href="#contact">Contact</a>
  <a href="notes.php">Notes</a>
  <a href="feed.html">Feedback</a>
  <a href="internship.html">Internship</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</header>
        <!--========== END HEADER ==========-->
            <!-- End Navbar -->
<div class="Page content" style="margin-left: 30px;margin-right: 30px;">
                <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs"><b>Semester-Wise Notes</b></h3>
                <center>
    <div class="row" > 

    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 1</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=1";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>




    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 2</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=2";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>




    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 3</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=3";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>




    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 4</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=4";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>




    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 5</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=5";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>




<div class='col-lg-4 col-md-4 col-sm-12'>  
   
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 6</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=6";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>

</div>
</div>

    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 7</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=7";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>




    <div class='col-lg-4 col-md-4 col-sm-12'>     
  <div class="flip-card ">
  <div class="flip-card-inner">
    <div class="flip-card-front" >
      <h3 class="g-font-size-30--xs g-font-size-40--md g-margin-t-20--xs g-text-center--xs g-ver-center--xs"><b>Semester 8</b></h3>
    </div>

    <div class="flip-card-back">
      <h1 style="color: white;margin-top: 5px;">Subjects</h1>
      <br> 
      <?php
        $conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
        $str="Select Subject from auto_commp where Semester=8";
        $res=mysqli_query($conn,$str);
        $subject_array=array();
        while($subject_array=mysqli_fetch_assoc($res)){
  ?>   
      <form action="details.php" method="post">
        <input type="hidden" name="search" value="<?php echo $subject_array['Subject']; ?>">
    <button type="submit" name="submit" value="<?php echo $subject_array['Subject']; ?>" class="btn-link" style="color: white;"><?php echo $subject_array['Subject']; ?></button>
    </form>
          <?php

}
mysqli_close($conn);
?>

    </div>
  </div>
</div>
</div>



</div>
</center>
</div>



      <!--FOOTER--------------------------------------------------------------------------------------------------------------->      
     <footer  class="footer-distributed " id="contact">

            <div class="footer-left">

                <h2  class=" g-color--white g-font-size-60--xs"><Strong>Note<span class="g-color--primary">It</span></Strong></h2>
               
                
            </div>
               
            <div class="footer-center g-color--white">
                 
                    <span >.</span>
                    <a href="home2.php"><span  class="g-font-size-18--xs  " id="f1">Home</span></a><br>
                    ·
                    <a href="about.html"><span class="g-font-size-18--xs " id="f1">About Us</span></a><br>
                    ·
                    <a href="notes.php"><span class="g-font-size-18--xs " id="f1">Notes</span></a><br>
                    .
                    <a href="feedback.php"><span class="g-font-size-18--xs " id="f1">Feedback</span></a><br>
                    .
                    <a href="internship.html"><span class="g-font-size-18--xs " id="f1">Internship</span></a><br>
                    
                    
                
                
            </div>

            <div class="footer-right  ">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p class="g-font-size-18--xs g-color--white"><span>St. Joseph Engineering College</span> Vamanjoor, Mangalore - 575 028</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p class="g-font-size-18--xs g-color--white">2263753</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p class="g-font-size-18--xs g-color--white">sjec@sjec.ac.in</p>
                </div>

                
            </div>

        </footer>

            <!-- End Links -->

         
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->

        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="vendor/counterup.min.js"></script>
        <script type="text/javascript" src="vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/counter.min.js"></script>
        <script type="text/javascript" src="js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/google-map.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>



    </body>
    <!-- End Body -->
</html>