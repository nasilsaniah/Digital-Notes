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
            .s-wrapper {
             width:100%;
            height: 100%;
            background: linear-gradient(45deg,#00E5EE, #236B8E, #24AADB , #27DBB1,#FFDC18);
             background-size: 600% 100%;
            animation: gradient 16s linear infinite;
            animation-direction: alternate;
        }
        @keyframes gradient {
            0% {background-position: 0%}
            100% {background-position: 100%}
        }
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
  <a href="http://localhost/Web Project/home2.php">Home</a>
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

            
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-one-item">
            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/mine.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <h1 class="g-font-size-35--xs  g-text g-font-size-45--sm g-font-size-55--md g-color--white">There is no education like<br>adversity</h1>
                        </div>
                    </div>
                </div>
                <div class="g-fullheight--xs g-bg-position--center swiper-slide" style="background: url('img/yeh.jpg');">
                    <div class="container g-text-center--xs g-ver-center--xs">
                        <div class="g-margin-b-30--xs">
                            <div class="g-margin-b-30--xs">
                                <h2 class="g-font-size-35--xs g-font-size-45--sm g-font-size-55--md g-color--white">Education is the<br>Architecture of soul</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Arrows -->
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
            <a href="javascript:void(0);" class="s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
            <!-- End Arrows -->
            
            
        </div>
        <!--========== END SWIPER SLIDER ==========-->

<!---SEARCH BAR--------------------------------------------------------------------------->
<div class="s-wrapper" style="width: 100%">
<div class="g-container--md g-fullheight--xs">
    <h2 class="g-text-center--xs g-font-size-40--xs g-font-size-55--md g-margin-b-10--xs g-margin-t-150--xs"><b>Search, Download and Study</b></h2>
    <div class="g-hor-centered-row--xs">

        <div class="g-row-col--2 g-padding-4--xs g-margin-t-3--lg">

            <form action="details.php" method="post" class="form-inline g-padding-3--xs g-margin-t-60--xs" onsubmit="return validate(this)">
              <center>
                <input type="text" name="search" id="search" class="form-control g-bg-color--sky-light form-control-lg rounded-0 border-info " placeholder="Search Subject" style="width: 65%;height:60px; "autocomplete="off">
                <input type="submit" name="submit" value="Search" class="s-btn btn-primary
                 btn-lg rounded-0" id="srchbtn" style="width:30%;height: 60px;font-weight:700;">
            </center>
            </form>
        </div>
        <div class="col-md-8 " style="position: relative;margin-left:6px;">
            <div class="list-group" id="show-list">
                
   
            </div>
        </div>
    </div>
</div>
</div>
      </div>
   </div>
</div>



<!---------------------------------------END SEARCH BAR---------------------------------->







        <!--========== PAGE CONTENT ==========-->
        <!-- Features -->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-100--xs">
                <h1 class="g-font-size-50--xs g-font-size-65--md"><b>Our Services</b></h1>
            </div>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-6 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <a href="#">
                            <div class="g-media g-width-30--xs g-margin-r-20--xs">
                                <div >
                                    <i class="g-font-size-70--xs g-color--primary ti-notepad  "></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">ENGINEERING NOTES</h2>
                                <p class="g-margin-b-0--xs g-font-size-16--xs">Updated VTU Engineering Notes of all Schemes, Branches and Years.</p>
                            </div>
                        </a>
                    </div>
                </div>
             
                <div class="col-sm-6">
                    <div class="clearfix g-margin-r-20--xs">
                        <a href="qp.html">
                            <div class="g-media g-width-20--xs g-margin-r-20--xs">
                                <div >

                                    <i class="g-font-size-70--xs g-color--primary ti-package"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-40--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">QUESTION PAPER</h2>
                                <p class="g-margin-b-0--xs g-font-size-16--xs">We provide previous year question papers.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
           
               <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-6">
                    <div class="clearfix">
                        <a href="internship.html">
                            <div class="g-media g-width-30--xs g-margin-r-20--xs ">
                                <div>
                                    <i class="g-font-size-70--xs g-color--primary ti-briefcase"></i>
                                </div>
                            </div>
                            <div class="g-media__body g-padding-x-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-30--md">INTERNSHIP</h2>
                                <p class="g-margin-b-0--xs g-font-size-16--xs">We provide information on Internship oppurtunities to all.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- // end row  -->
        <!-- End Features -->
</div>
        <!--========== FOOTER ==========-->
        
            <!-- Links -->
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


      <script type="text/javascript">
            $(document).ready(function(){
                $("#search" ).keyup(function(){
                    var searchText=$(this).val();
                    if(searchText!=''){
                        $.ajax({
                            url:'action.php',
                            method:'post',
                            data:{query:searchText},
                            success:function(response){
                                $("#show-list").html(response);
                            }
                        });
                    }
                    else{
                        $("#show-list").html('');
                    }
                });
                $(document).on('click','a',function(){
                    $("#search").val($(this).text());
                    $("#show-list").html('');

                });
            });
</script>
<script type="text/javascript">
    function validate(form){
        var p=form.search.value;
        var subjects=['Computer Graphics','Cryptography and Network Security','Operating System','Python Application Programming','System Software and Compiler Design','Engineering Mathematics-1','Engineering Physics','Elements of Civil Engineering and Mechanics','Elements of Mechanical Engineering','Basic Electrical Engineering','Machine Learning','Engineering Mathematics - 2','Basic Electronics','Programming in C and Data Structures','Engineering Chemistry','Analog and Digital Electronics','Data Structures and Applications','Computer Organisation','UNIX and Shell Programming','Discrete Mathematical Structure','Engineering Mathematics - 4','Software Engineering','Design and Analysis of Algorithms','Microprocessors and Microcontrollers','Computer Networks','Automata Theory and Computability','Database Management System','Advanced Computer Architecture','Internet of Things','Big Data Analytics'];
        if(subjects.includes(p)){
            return true;
        }
        else{
            alert("Subject Not Available");
            return false;
        }
        
    }
</script>
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
