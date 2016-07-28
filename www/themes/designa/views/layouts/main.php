<!DOCTYPE html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	
	<!-- Remove this line if you use the .htaccess -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width">
	
	<meta name="description" content="Designa Studio, a HTML5 / CSS3 template.">
	<meta name="author" content="Sylvain Lafitte, Web Designer, sylvainlafitte.com">
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css">
	
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body>
<!-- Prompt IE 7 users to install Chrome Frame -->
<!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div class="container">
<section class="grid-wrap" >
	
	<header id="navtop">
	<div class="span6">
		<a href="#" class="logo fleft">
			<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/toyota_1.png" alt="">
		
		</a></div>
		<div class="span6">

    <div class="social-icons pull-right clearfix">
        <div class="" style="text-align:right;">
		<a href="http://twitter.com/">
<img alt="Twitter" src="<?php echo Yii::app()->theme->baseUrl ?>/img/twitter.png"/></a>
<a href="http://linkedin.com/">		 
<img alt="LinkedIn" src="<?php echo Yii::app()->theme->baseUrl ?>/img/linkedin.png"/></a>
<a href="https://www.facebook.com/ToyotaSpecialShowroom/">	
<img alt="Facebook" src="<?php echo Yii::app()->theme->baseUrl ?>/img/facebook.png"/></a>
<a href="https://plus.google.com/+toyota/posts">	
<img alt="Google+" src="<?php echo Yii::app()->theme->baseUrl ?>/img/google.png"/></a>
<a href="http://rss.com/">
<img alt="RSS" src="<?php echo Yii::app()->theme->baseUrl ?>/img/rss.png"/></a>
<a href="https://www.youtube.com/user/TOYOTAglobal">
<img alt="YouTube" src="<?php echo Yii::app()->theme->baseUrl ?>/img/Youtube_logo.png"/></a>
				
        <div class="header-text" style="">TOLL FREE: (123) 456 7890</div>
    </div><!--/.social-icons -->
   
  </div>
		
		
		
		
		
		
		
		
		
		
		
		<div class="slider grid col-full">
	
		   <div class="flexslider">
		     <div class="slides">
		       <div class="slide">
		           	<figure>
		                 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider10.jpg" alt="">
		                
		             	</figure>
		           </div>
		           
		           <div class="slide">
		               	<figure>
		                     <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider4.jpg" alt="">
		                    
		                 	</figure>
		               </div>
                <div class="slide">
		           	<figure>
		                 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider8.jpg" alt="">
		                
		             	</figure>
		           </div>
		           
		           <div class="slide">
		               	<figure>
		                     <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider1.jpg" alt="">
		                    
		                 	</figure>
		               </div>        
                       
                       
                       <div class="slide">
		           	<figure>
		                 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/slider5.jpg" alt="">
		                
		             	</figure>
		           </div>
		           
                       
                       
                       
                       
                       
		           
		   </div>
		  
		 </div>
		<nav>
		
	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<div class="menu">
				<?php $this->widget('zii.widgets.CMenu',array(
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
						 array('label'=>'Gallery', 'url'=>array('/image')),
						array('label'=>'Contact', 'url'=>array('/site/contact')),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				)); ?>
		</div></div>
    </nav>
	</header></section> 


<div class="home-page main">
	<section class="grid-wrap" >
		<header class="grid col-full">
			<hr>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->

		
		</header>
		
		<div class="grid col-full lg2-col-full">
			<?php echo $content; ?>
		</div>
	
		
		  
		 </section>
	
	<section class="services grid-wrap">
		<header class="grid col-full">
			<hr>
			<a href="#">
		<h3 class="fleft" style="color:#0A1887" style="font-family:">Innovation </h3>
			<span class="zoom"></span></a>
			
		
			
		</header>
		
		<article class="grid col-one-quarter mq2-col-one-half">
			<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/img1.png" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Environmental Technology </a>
					<h5> FCV Fuel Cell Vehicles</h5>


<p>Operates by converting hydrogen<br> fuel into electricity. Outstanding energy efficiency is its special strength.  </p>
				</figcaption>
			
			
			
		</article>
		
		<article class="grid col-one-quarter mq2-col-one-half" style="text-align:center">
<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/img2.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Safety Technology </a>
					<h5> Our approach to "Safety"</h5>


<p>Toyota has been implementing "safety" measures to help create safer vehicles. Toyota analyzes the causes of the accident and passenger injuries by using various accident investigation data.   </p>
				</figcaption>
			
			
		</article>
		
		
		
		
		
		
		<article class="grid col-one-quarter mq2-col-one-half">
			
			<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/img3.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Automated Driving </a>
					<h5> Automated driving technology initiatives</h5>


<p>

Since the 1990s, Toyota's has engaged in automated driving technology R&D aimed at contributing to the complete elimination of traffic casualties, delivering freedom of mobility for everybody. 
 </p>
				</figcaption>
			
			
		</article>
		
		
		
		
		
		<article class="grid col-one-quarter mq2-col-one-half">
			<div class="slide">
	<button class="btn btn-large btn-default" type="button" style="color:#010101">Sidemenu</button>
				
                 
					


<ul>
 <li class="cat-item cat-item-6"><a href="<?php echo Yii::app()->request->baseUrl ?>/chart" title="View all posts filed under Category 5">Chart</a></li>
 <li class="cat-item cat-item-6"><a href="<?php echo Yii::app()->request->baseUrl ?>/offices" title="View all posts filed under Category 4">offices</a></li>
	<li class="cat-item cat-item-6"><a href="<?php echo Yii::app()->request->baseUrl ?>/employees" title="View all posts filed under Category 5">employees</a></li>

 <li class="cat-item cat-item-3"><a href="<?php echo Yii::app()->request->baseUrl ?>/brands" title="View all posts filed under Category 1">Product Brands </a></li>
	<li class="cat-item cat-item-3"><a href="<?php echo Yii::app()->request->baseUrl ?>/products" title="View all posts filed under Category 1">Our Product </a></li>
		<li class="cat-item cat-item-6"><a href="<?php echo Yii::app()->request->baseUrl ?>/customers" title="View all posts filed under Category 3">Our customers</a></li>
	<li class="cat-item cat-item-5"><a href="<?php echo Yii::app()->request->baseUrl ?>/orders" title="View all posts filed under Category 2">Product Orders</a></li>
	<li class="cat-item cat-item-6"><a href="<?php echo Yii::app()->request->baseUrl ?>/orderdetails" title="View all posts filed under Category 5">orderdeails</a></li>
	<li class="cat-item cat-item-5"><a href="<?php echo Yii::app()->request->baseUrl ?>/payments" title="View all posts filed under Category 2">Total Payment</a></li>

	
	
	
	
	
	
</ul></div>
		</article>
	</section>

<section class="works grid-wrap">
	<header class="grid col-full">
			<hr>
			<a href="#">
			<h3 class="fleft" style="color:#0A1887">Toyota Brands</h3>
			<span class="zoom"></span></a>
		</header>
	
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/bbrand1.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Toyota KIKAI</a>
					<p>Powerful, dependable and capable of <br>going anywhere, the Land <br>Cruiser is truly the most versatile<br> 4WD vehicle available. </p>
				</figcaption>
			</figure>

			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/bbrand2.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">TOYOTA C-HR</a>
					  <p>The TOYOTA C-HR Concept introduces an<br> expressive new, diamond architecture <br>styling theme to the segment.</p>
				</figcaption>
			</figure>
		
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/bbrand3.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Toyota FCV Plus</a>
					  <p>Compressed hydrogen has a higher <br>energy density than electricity, <br>can be generated from a wide range <br>of raw materials, and is easy to store, <br>making it a promising future energy<br> source.</p>
				</figcaption>
			</figure>
		
			
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/brand3.png" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Toyota FT-1</a>
					  <p>The Toyota FT-1 aims to show what<br> can be achieved when the focus is <br>creating a sports car design that will<br> truly excite</p>
				</figcaption>
	
			</figure>
			
			
			
			
			
			
		</section>
    
    
    
<section class="services grid-wrap">
	<header class="grid col-full">
			<hr>
			<a href="#">
	<h3 class="fleft" style="color:#0A1887">Sustainability</h3>
			<span class="zoom"></span></a>
			
			
			
			
			
			
			
		</header>
	
			<figure class="grid col-one-half mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/index_bg.png" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
				<p>01: Company</p>
			<p>02: Philosophy</p>
			<p>03: REPAIR</p>
			<p>04: Challenges</p>
			<p>05: Quality</p>
			<p>06: Innovation</p>
			
				</figcaption>
			</figure>
		
        <figure class="grid col-one-half mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/s1.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
				<p>01: Always Better Cars</p>
			<p>02:  Enriching Lives of Communities</p>
			<p>03:  Stable Base of Business</p>
			<p>04:  Toyota Environmental Challenge 2050</p>
			
			
				</figcaption>
			</figure>
        
        
        
        
        
        
        
        
        
        
			
    
    	</section>  
    
    <section class="works grid-wrap">
	<header class="grid col-full">
			<hr>
			
			<a href="#">
<h3 class="fleft" style="color:#0A1887">INVESTORS</h3>
			<span class="zoom"></span></a>
			
		</header>
	
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/inves1.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Social Contribution Activities </a>
					<p>Toyota is actively engaging in social<br> contribution activities to support the <br>sustainable development of a<br> flourishing society with the aim of<br>  being a good corporate citizen. </p>
				</figcaption>
			</figure>

			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/personal_mobility_top.png" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Personal Mobility</a>
					  <p>Knowing that as times change,<br> transportation  needs also change,<br> Toyota has been developing  new forms of<br> transportation <br> which have increased flexibility for<br> personal mobility,  allowing new<br> levels of fun and freedom<br>  in travel.</p>
				</figcaption>
			</figure>
		
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/robot.jpg" alt="">
				<span class="zoom"></span>
				</a>
				<figcaption>
					<a href="#" class="arrow">Partner Robot</a>
					  <p>An overview of Partner Robot <br>technology, which was designed<br> under the concept of "harmony with people",<br> and information regarding Toyota's<br> history in the field as well as videos<br> showcasing theabilities of some of <br>tomorrow's robots.</p>
				</figcaption>
			</figure>
		
			
			<figure class="grid col-one-quarter mq2-col-one-half">
			<button class="btn btn-large btn-default" type="button" style="color:#010101">Facebook fanpage </button>
<?php
	$this->widget('application.extensions.fbLikeBox.fbLikeBox', array(
        'likebox' => array(
        'url'=>'https://www.facebook.com/ToyotaSpecialShowroom/',
        'header'=>'true',
        'width'=>'245',
        'height'=>'550',
        'layout'=>'light',
        'show_post'=>'false', 
        'show_faces'=>'true',
        'show_border'=>'true',
     )
  ));

?>



			</figure>
  
	</section>
	
    
    
    
  

<section class="services grid-wrap">
	
  <header class="grid col-full">
			<hr>
			<a href="#">
<h3 class="fleft" style="color:#0A1887">Showroom</h3>
			<span class="zoom"></span></a>
			
</header>
	
			
		
			
	
    
		<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
              
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show1.png" alt="">
				<span class="zoom"></span>
                <h5>USA</h5>
				</a>
				
			</figure>

			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show2.png" alt="">
				<span class="zoom"></span><h5>AUSTRALIA</h5>
				</a>
				
			</figure>
		
			<figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show5.jpg" alt="">
				<span class="zoom"></span><h5>RUSSIA</h5>
				</a>
				
			</figure>
			
			
			<figure class="grid col-one-quarter mq2-col-one-half">
				
<a href="#">
				
				<span class="zoom"></span>
				</a>
				<figcaption>
					
					  <?php $this->widget('ext.yiicalendar.YiiCalendar', array
(
    'linksArray'=>array
    (
        '2014-12-13'=>array
        (
            'title'=>'Hoop and goo! :]',
            'style'=>'font-weight: bold; color: red;',
            'href'=>'http://www.exampleblog.com/date/2014/12/13'
        )
    )
)); ?>

				</figcaption>

			</figure>
    
			
			
			
			
			
			
			
            
     <figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show6.png" alt="">
				<span class="zoom"></span><h5>DENMARK</h5>
				</a>
				
			</figure>
            <figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show5.png" alt="">
				<span class="zoom"></span><h5>JAPAN</h5>
				</a>
				
			</figure>
            <figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show7.png" alt="">
				<span class="zoom"></span><h5>ITALY</h5>
				</a>
				
			</figure>
            <figure class="grid col-one-quarter mq2-col-one-half">
				<a href="#">
				<img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/show3.jpg" alt="">
				<span class="zoom"></span><h5>CHINA</h5>
				</a>
				
			</figure>
            
          
  
  
    
    
    
    
   
	</section>
	
	
	
	
	
	
	
	
	
	
	 </div></div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>



<div style="clear: both"></div>

</div><!--END FOOTER-->
</div><!--END FOOTER-WRAPPER--><div id="credit-wrapper">
<div id="credit" style="background-color:#A4D3F1" >
<?php echo Yii::app()->name ?> (c) <?php echo date("Y"); ?> | Designed by <a href="http://www.toyota-global.com/"> Toyota Motor Corporation. All Rights Reserved.  </a> 
</div>

</div>


</div>

<!-- Javascript - jQuery -->
<script src="http://code.jquery.com/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-1.7.2.min.js"><\/script>')</script>

<!--[if (gte IE 6)&(lte IE 8)]>
<script src="js/selectivizr.js"></script>
<![endif]-->

<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.flexslider-min.js"></script>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/scripts.js"></script>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID. -->
<script>
  var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
</body>
</html>
