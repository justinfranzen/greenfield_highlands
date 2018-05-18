<title>Greenfield Highlands Luxury Apartments</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<body>
    
<script src="http://code.jquery.com/jquery.js"></script>
<script src="src/skdslider.min.js"></script>
<link href="src/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			jQuery('#demo2').skdslider({delay:5000, animationSpeed: 1000,showNextPrev:true,showPlayButton:false,autoSlide:true,animationType:'sliding'});
			jQuery('#demo3').skdslider({delay:5000, animationSpeed: 2000,showNextPrev:true,showPlayButton:true,autoSlide:true,animationType:'fading'});
			
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			  $(window).trigger('resize');
			});
			
		});
</script>
<style type="text/css">
body{ margin:0; padding:0;}
.demo-code{ background-color:#ffffff; border:1px solid #333333; display:block; padding:10px;}
.option-table td{ border-bottom:1px solid #eeeeee;}
</style>
    
<div class="skdslider">
                <ul id="demo1" class="slides">
            <li>
            <img src="src/image/slider-image1.jpg" />
             <div class="slide-desc">
                    <h2></h2>
                     <!--Slider Description example--<p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
            ---->
              </div>
            </li>
            <li><img src="src/image/slider-image2.jpg" />
               <div class="slide-desc">
                    <h2></h2>
                 <!------ <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
            ----> 
              </div>  
            </li>
            <li><img src="src/image/slider-image3.jpg" />
             <div class="slide-desc">
                    <h2></h2>
                   <!-----  <p>Demo description here. Demo description here. Demo description here. Demo description here. Demo description here. <a class="more" href="#">more</a></p>
-               --->
              </div>
            </li>
            </ul>
        </div>
    
<div id="main">
    
        <img src="images/forest-green.png" id="forest-green" alt="Forest Green Realty Management" />
        
    <div class="row centered news">
        
        <h1 id="news">Greenfield Highlands News</h1>
        
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div id="update">
                <h2 class="update brand-new">Brand New Construction</h2>
                <h3 class="update first">1st Month Rent Free + $1,000 Moving Bonus!*</h3>
                <h4 class="update approved">*For approved reservation by 9/30/17 for new construction buildings, with 1 year lease and qualified credit.</h4>
            </div>
        </div>
        
        <p id="update2">Open House<br>
        Saturday 9/2<br>
            12 - 4</p>
        
    </div>
        
       
    
        <div class="row centered blurbs">
    
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blurb">
                    <img src="images/blurb1.jpg" alt="Unit Styles" width="300px" class="blurb-image"/>
                    <p class="blurb-title">Unit Styles</p>
                    <p class="blurb-info">We have multiple unit styles available from 1 Bedroom, 1.5 Bath up to 2 Bedroom + Den, 2.5 Bath. Rents starting at $1,360 per month. Security Deposit $1,000.</p>
                    <br>
                    <p class="blurb-link"><a href="property-unit-sales.php">More info</a></p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="blurb">
                    <img src="images/blurb2.jpg" alt="Unit Styles" width="300px" class="blurb-image"/>
                    <p class="blurb-title">Location</p>
                    <p class="blurb-info">
                    Conveniently located off on S. 110th Street and Coldspring Road in Greenfield, WI. Property is the 2nd highest elevation in Milwaukee County. Close proximity to I-43, I-94, shopping and entertainment
                    </p>
                    <p class="blurb-link"><a href="location.php">More info</a></p>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                 <div class="blurb">
                  <img src="images/blurb3.jpg" alt="Unit Styles" width="300px" class="blurb-image"/>
                    <p class="blurb-title">Our Property</p>
                    <p class="blurb-info">
                    30 brand new apartments completed in 2016. Ammenities: clubhouse, pool and fitness center. Additional 5 buildings planned for a 180 unit community. Private Storage, Underground Parking, Pet Friendly
                    </p>
                     <p class="blurb-link"><a href="property-unit-sales.php">More info</a></p>
                    </div>
            </div>

    
        </div>
    
</div>
</body>
    
<?php
include 'includes/footer.php';
?>