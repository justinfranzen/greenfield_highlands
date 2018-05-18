<title>Development Progression</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<body>
    
<div id="main">
    
<h1>Development Progression</h1>
    
    <div id="content">       
        
       <h2>1st Building - Finished 2015</h2>
        
        <br>
          
        <div class="row gallery">
            
  <div class="column">
    <img src="images/1st-building.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow thumbnail">
  </div>
  <div class="column">
    <img src="images/1st-building2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow thumbnail">
  </div>
  <div class="column">
    <img src="images/1st-building3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow thumbnail">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 3</div>
        <img src="images/1st-building-large.jpg" class="resize">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 3</div>
        <img src="images/1st-building2-large.jpg" class="resize">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 3</div>
        <img src="images/1st-building3-large.jpg" class="resize">
    </div>
      
      <div class="mySlides">
      <div class="numbertext">3 / 3</div>
        <img src="images/1st-building3-large.jpg" class="resize">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo" src="img1.jpg" onclick="currentSlide(1)" alt="">
    </div>
    <div class="column">
      <img class="demo" src="img2.jpg" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo" src="img3.jpg" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo" src="img4.jpg" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo" src="img5.jpg" onclick="currentSlide(5)" alt="">
    </div>
  </div>
      
  </div>
        
        <h2>2nd Building - Started Fall 2016</h2>
        
        <div class="row gallery">
        
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img1.jpg" width="300" alt="" class="building"/> 
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img2.jpg" width="300" alt="" class="building"/> 
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img3.jpg" width="300" alt="" class="building"/> 
                </div>
            
        </div>
        
        <div class="row gallery">
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img4.jpg" width="300" alt="" class="building"/> 
                </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img5.jpg" width="300" alt="" class="building"/> 
                </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img6.jpg" width="300" alt="" class="building"/> 
                </div>
            
        </div>
        
        <div class="row gallery">
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img7.jpg" width="300" alt="" class="building"/> 
                </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/2ndbuilding-img8.jpg" width="300" alt="" class="building"/> 
                </div>
        
        </div>
        
        <h2>3rd Building - Started Winter 2016</h2>
        
         <div class="row gallery">
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/3rd-building-img9.jpg" width="300" alt="" class="building"/> 
                </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/3rd-building-img10.jpg" width="300" alt="" class="building"/> 
                </div>
            
        </div>
        
        <h2>4th Building - Started Spring 2017</h2>
        
        <div class="row gallery">
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="images/4th-building-img1.jpg" width="300" alt="" class="building"/> 
                </div>
    
            
        </div>
        
        <h2>6th Building - Started Summer 2017</h2>
    </div>
</div>
</body>
    
<?php
include 'includes/footer.php';
?>