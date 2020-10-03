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
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        </style>

    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.html" class="s-header__logo-link">
                                    <h1 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--primary"><b>Note<span class="g-color--primary">It</span></b></h1>
                                    
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->



  <!--PAGE CONTENT========================================================================================-->      
<?php
$conn = mysqli_connect('127.0.0.1','root',"","auto_search") or die(mysql_error()); 
if(isset($_POST['submit'])){
	$data=$_POST['search'];
	$str="Select * from auto_commp where subject='$data'";
	$res=mysqli_query($conn,$str);
	$sub=mysqli_fetch_assoc($res);
	?>
	<div class="g-text-center--xs g-margin-b-50--xs g-margin-t-150--xs" >
                <h1 class="g-font-size-30--xs g-font-size-40--md" style="padding-top: 30px;"><b><?php echo $data." Notes"; ?> </b></h1>
            </div>
            <div class="row g-margin-b-50--xs g-margin-b-60--md " style="margin-left:40%; ">
                <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md ">
                    <div class="clearfix">
                        <a target='_blank' href='<?php echo $sub['Mod1']; ?>'>
                            <div class="g-media g-width-30--xs g-margin-r-20--xs">
                                    <i class="g-font-size-70--xs g-color--primary ti-book  "></i>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">Module 1<br></h2>
                
                            </div>
                        </a>
                    </div>
                </div>
</div>


<div class="row g-margin-b-50--xs g-margin-b-60--md " style="margin-left:40%; ">
 <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md ">
                    <div class="clearfix">
                        <a target='_blank' href='<?php echo $sub['Mod2']; ?>'>
                            <div class="g-media g-width-30--xs g-margin-r-20--xs">
                                    <i class="g-font-size-70--xs g-color--primary ti-book  "></i>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">Module 2<br></h2>
                
                            </div>
                        </a>
                    </div>
                </div>
</div>
                            
                    
				<div class="row g-margin-b-50--xs g-margin-b-60--md " style="margin-left:40%; ">
 <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md ">
                    <div class="clearfix">
                        <a target='_blank' href='<?php echo $sub['Mod3']; ?>'>
                            <div class="g-media g-width-30--xs g-margin-r-20--xs">
                                    <i class="g-font-size-70--xs g-color--primary ti-book  "></i>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">Module 3<br></h2>
                
                            </div>
                        </a>
                    </div>
                </div>
</div>
       
				<div class="row g-margin-b-50--xs g-margin-b-60--md " style="margin-left:40%; ">
 				<div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md ">
                    <div class="clearfix">
                       <a target='_blank' href='<?php echo $sub['Mod4']; ?>'>
                            <div class="g-media g-width-30--xs g-margin-r-20--xs">
                                    <i class="g-font-size-70--xs g-color--primary ti-book  "></i>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">Module 4<br></h2>
                
                            </div>
                        </a>
                    </div>
                </div>
</div>
       

				<div class="row g-margin-b-50--xs g-margin-b-60--md " style="margin-left:40%; ">
 				<div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md ">
                    <div class="clearfix">
                       <a target='_blank' href='<?php echo $sub['Mod5']; ?>'>
                            <div class="g-media g-width-30--xs g-margin-r-20--xs">
                                    <i class="g-font-size-70--xs g-color--primary ti-book  "></i>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">Module 5<br></h2>
                
                            </div>
                        </a>
                    </div>
                </div>
		</div>
       	
							
							
<?php
}
else{
	echo "not found";
	}
?>


  <!--=======================END PAGE CONTENT============================================================================-->   





        <!--========== FOOTER ==========-->
        
            <!-- Links -->
           <footer  class="footer-distributed ">

			<div class="footer-left">

				<h2  class=" g-color--white g-font-size-60--xs"><Strong>Note<span class="g-color--primary">It</span></Strong></h2>
               
				
			</div>
               
			<div class="footer-center g-color--white">
                 
                    <span >.</span>
					<a href="#"><span  class="g-font-size-18--xs  " id="f1">Home</span></a><br>
					·
					<a href="#"><span class="g-font-size-18--xs " id="f1">About Us</span></a><br>
					·
					<a href="about.html"><span class="g-font-size-18--xs " id="f1">Upload notes</span></a><br>
					
					
				
				
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




    </body>
    <!-- End Body -->
</html>
