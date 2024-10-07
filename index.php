<?php if(!isset($_SESSION)) { session_start(); } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trip Booking Platform</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    //function hideURLbar(){ window.scrollTo(0,1); }
    </script>
    
    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>    
    <script src="js/jquery.scrollTo.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>
    
    <script type="text/javascript" src="EventUtil.js"></script>
<style> 
#alert { 
    display: none; 
    background-color: lightgrey; 
    border: 1px solid green; 
    position: fixed; 
    width: 600px;
    height: 450px; 
    left: 30%; 
    top: 20%; 
    padding: 6px 8px 8px; 
    text-align: center; 
    } 

.alert img { 
    width: 500px; 
    height: 400px; 
} 

button { 
    border-radius: 15px; 
    height: 5rem; 
    padding: 5px; 
    cursor: pointer; 
    border: 2px solid green; 
    background-color: aqua; 
} 
</style>       
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<!-- Preloader -->
    <div id="preloader">
      <div id="load"></div>
    </div>           
 
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
    <?php
        include('header.php');
    ?>
    <!-- /.navbar-collapse -->
    </div>
<!-- /.container -->
</nav>
 
<!-- Section: intro -->
 <div id="intro" class="intro">
    
        <div class="slogan">
            <h2>WELCOME TO <span class="text_color">OUR WEBSITE</span> </h2>
            <h4>WE ARE ONE OF THE GROUP OF TRAVEL AGENCY IN MYANMAR</h4>
        </div>
        <div class="page-scroll">
            <a href="#about" class="btn btn-circle">
                <i class="fa fa-angle-double-down animated"></i>
            </a>
        </div>
 </div>  
	
<!-- /Section: intro -->

<!-- Section: about -->
    <div id="about" class="home-section text-center">
        <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>About us</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">

        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <hr class="marginbot-50">
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                <div>
                    <div class="inner">
                        <h5></h5>
                        <p class="subtitle"></p>
                        <div class="avatar"></div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Mg Naing Paing Oo</h5>
                        <p class="subtitle">Leader</p>
                        <div class="avatar"><img src="img/team/mnpo1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
                </div>
            </div> 
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Mg Aung Phyo Kyaw</h5>
                        <p class="subtitle">Co-Leader</p>
                        <div class="avatar"><img src="img/team/apk1.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                <div>
                    <div class="inner">
                        <h5></h5>
                        <p class="subtitle"></p>
                        <div class="avatar"></div>

                    </div>
                </div>
                </div>
            </div>
        </div>
       
        <br/>
    
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Ma Phyo Thuzar</h5>
                        <p class="subtitle">Member</p>
                        <div class="avatar"><img src="img/team/ptz1.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Mi Pale Phyu</h5>
                        <p class="subtitle">Member</p>
                        <div class="avatar"><img src="img/team/mplp1.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1.3s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Ma Phyo Wai Wai Oo</h5>
                        <p class="subtitle">Member</p>
                        <div class="avatar"><img src="img/team/pwwo1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="wow bounceInUp" data-wow-delay="1.6s">
                <div class="team boxed-grey">
                    <div class="inner">
                        <h5>Ma Yin Moe Aye</h5>
                        <p class="subtitle">Member</p>
                        <div class="avatar"><img src="img/team/yma1.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
                </div>
            </div>
        </div> <br/>
        <div id = "alert" class="alert"> 
            <p>Developed by Team-1 </p> 
            <img src="img/team/ourteam.jpg"> </img> 
            <button id="close" onclick="closeDialog()"> Close </button> 
        </div> 
        <button onclick='invokeAlert();'> See More>> </button>            
        </div>
    </div>
    <script> 
        var alertDiv = document.getElementById("alert"); 
        function invokeAlert() { 
            alertDiv.style.display = "block"; 
        } 
        function closeDialog() { 
            alertDiv.style.display = "none"; 
        } 
    </script> 
<!-- /Section: about -->
	

	<!-- Section: Advertisement -->
    <div id="advertisement" class="home-section text-center bg-gray">
	    <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Advertisement</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="container">
        <!-- requried-jsfiles-for owl -->
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/owl.carousel.js"></script>
        <script>
                $(document).ready(function() {
                $("#owl-demo").owlCarousel({
                items : 1,
                lazyLoad : true,
                autoPlay : true,
                navigation : false,
                navigationText :  false,
                pagination : true,
                });
                });
            </script>    
        <!-- //requried-jsfiles-for owl -->
        <div id="owl-demo" class="owl-carousel">  
        <?php
        $cn=mysqli_connect("localhost","root","","trip");
        $s="select * from advertisement";
        $result=mysqli_query($cn,$s);

        $n=0;
        while($data=mysqli_fetch_array($result))
        {
            if($n%4==0)
            {
        ?>

            <div class="item text-center guide-sliders">
            <?php 
            }?>
            <div class="col-md-3 image-grid">
                <img src="Admin/addverimages/<?php echo $data[3];?>" width="250px" height="250px"><br/>
                <h5 align="center" style="color:brown;"><b><?php echo $data[1]; ?></b></h5>
            </div>
            <?php 
                if($n%4==3)
                {
            ?>
            </div>
        <?php
                }
            $n=$n+1;
        }
        ?>
        </div>
        </div>
    </div>
	<!-- /Section: Advertisement -->

    
<!--- Sectiion: Gallery -->
<div id="gallery" class="home-section text-center bg-gray">
    <div class="heading-about">
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="wow bounceInDown" data-wow-delay="0.4s">
                    <div class="section-heading">
                    <h2>Gallery</h2>
                    <i class="fa fa-2x fa-angle-down"></i>

                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div id="portfolio" class="portfolio">
            <ul id="filters" class="clearfix wow bounceIn" data-wow-delay="0.4s">
                <li><span class="filter active" data-filter="app card icon logo fun">ALL</span></li>
                <li><span class="filter" data-filter="app">Pagoda</span></li>
                <li><span class="filter" data-filter="card">Mountain</span></li>
                <li><span class="filter" data-filter="icon">Beach</span></li>
                <li><span class="filter" data-filter="fun">Island</span></li>
            </ul>
            <div id="portfoliolist">
                 
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="img/gallery/zwegabin_mountain.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
           
                <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                             <img src="img/gallery/ngapali_beach.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
              
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                             <img src="img/gallery/shwedagon.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="img/gallery/mergui_island.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                             <img src="img/gallery/bawdi.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio card mix_all" data-cat="card" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="img/gallery/mount_popa.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio icon mix_all" data-cat="icon" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                             <img src="img/gallery/chaung_thar_beach.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
                
                <div class="portfolio fun mix_all" data-cat="fun" style="display: inline-block; opacity: 1;">
                    <div class="portfolio-wrapper wow bounceIn" data-wow-delay="0.4s">
                        <div class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
                            <img src="img/gallery/myeik_island.jpg" class="img-responsive" alt=""/>
                        </div>
                    </div>
                </div>
                
                <div class="clearfix"></div>
            </div> 
        </div>
</div>
<!-- Script for gallery Here-->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
    $(function () {
        var filterList = {
        init: function () {
// MixItUp plugin
// http://mixitup.io
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                // call the hover effect
                onMixEnd: filterList.hoverEffect()
    });
},
        hoverEffect: function () {
// Simple parallax effect
        $('#portfoliolist .portfolio').hover(
            function () {
            $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
            $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
            },
                    function () {
                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
            }
        );
    }
};
// Run the show!
        filterList.init();
    });
</script>
<!--Gallery Script Ends-->
<!--- /Section: Gallery -->	



<?php
    if(isset($_POST["sbmt"]))
    {
    $cn=mysqli_connect("localhost","root","","trip");
    $sql="insert into contact(Name, Email, Message) values('".$_POST["name"]."','".$_POST["email"]."','".$_POST["message"]."')";
    mysqli_query($cn,$sql);
    mysqli_close($cn);
    echo "<script>alert('Record Save');</script>";
    }
?>
	

	<!-- Section: contact -->
    <div id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Contact Us</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form" method="post">
                <div class="row">
                     <?php
                        if($_SESSION['login'])
                        {
                        $cn=mysqli_connect("localhost","root","","trip");
                        $uid=$_SESSION['id'];
                        $sql="select * from customer where Id='".$uid."'";
                        $result=mysqli_query($cn,$sql);
                        $r=mysqli_num_rows($result);
                        while($data=mysqli_fetch_array($result))
                        {
                     ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" name="name" readonly="true" class="form-control" value="<?php echo $data[1]; ?>" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" readonly="true" class="form-control" value="<?php echo $data[2]; ?>" /></div>
                        </div>
                    </div>
                    <?php
                        }
                        mysqli_close($cn);
                        }else{
                    ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" id="txtName" name="name" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" name="sbmt" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Main Office</h5>
				
				<address>
				  <strong>Trip Booking Platform</strong><br>
				  No-135, Malar Myaing 8th Street, Ward 14,<br>
				  Hlaing Township, Yangon, Myanmar<br>
				  <abbr title="Phone"></abbr> (+95) 979-066-3667
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">tripbookingplatform2023@gmail.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/minnaingpaingoo" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/NaingPaingOo" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-telegram"><a href="https://t.me/minnaingpaingoo" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="https://www.google.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</div>
	<!-- /Section: contact -->

	<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="wow shake" data-wow-delay="0.4s">
                    <div class="page-scroll marginbot-30">
                        <a href="#intro" id="totop" class="btn btn-circle">
                            <i class="fa fa-angle-double-up animated"></i>
                        </a>
                    </div>
                    </div>
                    <p>&copy;Copyright 2023 - Trip Booking Platform. All rights reserved.</p>
                </div>
            </div>    
        </div>
    </footer>

<script type="text/javascript">
(function(){
var textbox=document.getElementById("txtName");
EventUtil.addHandler(textbox,"keypress",function(event){
    event=EventUtil.getEvent(event);
    var target=EventUtil.getTarget(event);
    var charCode=EventUtil.getCharCode(event);
    if(/\d/.test(String.fromCharCode(charCode)) && charCode>9 && !event.ctrlKey){
        alert("*Please Enter Only Character.")
    EventUtil.preventDefault(event);
    }
    });
})();
</script>     
</body>
</html>