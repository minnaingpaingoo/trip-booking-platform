<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href="category/stylecss.css" rel='stylesheet' type='text/css'/>
<link href="category/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="category/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="category/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="category/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="category/wow.min.js"></script>
<script>
 new WOW().init();
</script>
</head>

<body>
<!---banner--->
<!----start-slider-script---->
			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });

			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			<div id="section-1" class="section">
			    <div id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			      <li>
                    <img src="img/slider/Bagan1.webp"  width="100%" height="200px" alt="">
                    <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Get Away On This Weekend</a></h2>
                            <lable></lable>
                            <h1><a href="#">BAGAN ANCIENT CITY</a></h1>
                        </div>
                    </div>
                  </li>
			      <li>
                    <img src="img/slider/UPain.jpg"  width="100%" height="500px" alt="">
                    <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Have Fun On The Bridge</a></h2>
                            <lable></lable>
                            <h1><a href="#">U PAIN BRIDGE</a></h1>
                        </div>
                    </div>
                    </li>
					<li>
                      <img src="img/slider/Island2.jpg"  width="100%" height="500px" alt="">
                      <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Relax On This Vacation</a></h2>
                            <lable></lable>
                            <h1><a href="#">See it! Feel it! Love it!</a></h1>
                        </div>
                      </div>
                    </li>
                    <li>
                      <img src="img/slider/Inlay1.jpg"  width="100%" height="500px" alt="">
                      <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Have Fun On The Lake</a></h2>
                            <lable></lable>
                            <h1><a href="#">INLAY LAKE</a></h1>
                        </div>
                      </div>
                    </li>
                    <li>
                      <img src="img/slider/Kyaikhtiyoe1.jpg"  width="100%" height="500px" alt="">
                      <div class="caption">
                        <div class="header-info">
                            <h2><a href="#">Wonderful Trip On This Month</a></h2>
                            <lable></lable>
                            <h1><a href="#">Kyaikhtiyoe Pagoda</a></h1>
                        </div>
                      </div>
                    </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
				</div>
		<!----- //End-slider---->
<!---banner--->
</body>
</html>