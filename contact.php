<title>Contact Greenfield Highlands Luxury Apartments</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
<?php
include 'includes/header.php';
?>

<?php
if (isset($_POST['submitted'])){
    
    require_once('sql/mysql_connect.php');
    
        $fullname = mysqli_real_escape_string($dbc, $_POST['fullname']);
        $email = mysqli_real_escape_string($dbc, $_POST['email']);
        $subject = mysqli_real_escape_string($dbc, $_POST['subject']);
        $message = mysqli_real_escape_string($dbc, $_POST['message']);
    
        // form validation
        $errors = array();
    
        if (empty($fullname)) 
            {
                $errors['fullname'] = "Full name required";
            }
        elseif (!preg_match("/^[a-zA-Z ]*$/", $fullname))
            {
                $errors['valid_fullname'] = "Valid full name required";
            }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['email'] = "Valid email required";
            }
        elseif (empty($message))
            {
                $errors['message'] = "Message required";
            }
        else
            {
          $sql = "INSERT INTO greenfield_highlands (fullname, email, subject, message)
                VALUES ('$fullname', '$email', '$subject', '$message')";
            
            mysqli_query($dbc, $sql);
            
          $url='thankyou.php';
  
          echo '<script>window.location = "'.$url.'";</script>';
              
         $email_to = "jtfranz90@gmail.com";
         $email_from = "mail.justinfranzen.com";
         $subject = $subject;
         $content = $fullname . " would like more information about  " . $subject . " " . " \nEmail: " . " " . $email . " " . " \nPhone Number: " . $phonenumber . " \n " . $textarea;
         mail($email_to, $subject, $content);
            }  
    
    //end form validation
  
}   


?>

<body>
    
<div id="main">
    
    <h1>Contact Us</h1>
    
    <div id="content">
        
        <br>
        
        <div class="row contact-us">
    
            <div class="col-lg-6 col-md-6 col-sm-12">
            
                <p>4380 - 4438 S. 110th Street<br>
                    Greenfield, WI 53228</p>

                <span class="glyphicon glyphicon-envelope"></span><a href="mailto:gfh@forestgreenrealty.com" class="email">gfh@forestgreenrealty.com</a><br>
                    <span class="glyphicon glyphicon-earphone"></span><a href="tel:414-213-0589" class="phone">414-213-0589</a><br>
                    Fax: 414-425-4946
                
                <br><br>
                
            <div id="property">
                
                <p class="property"><strong>Property professionally managed by Forest Green Realty &amp; Management</strong></p>
                
                <p class="property"><strong>Forest Green Realty &amp; Management is an equal housing opportunity provider</strong></p>
          
            </div>  
                
        </div>
                
            
             <div class="col-lg-6 col-md-6 col-sm-12">
                 
                 <form id="myForm" action="contact.php" method="post" >

                      <label for="fname">Full Name * &nbsp;</label><input type="text" name="fullname" size="14" placeholder="Full Name" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'];?>">
                    <p class="error"><?php if(isset($errors['fullname'])) echo $errors['fullname']; ?></p>
                    <p class="error"><?php if(isset($errors['valid_fullname'])) echo $errors['valid_fullname']; ?></p>

                     <label for="email">Email *&nbsp;</label><input type="email" name="email" placeholder="Email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                     <p class="error"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>

                    <label for="subject">Subject * &nbsp;</label><input type="text" name="subject" size="12" placeholder="Subject" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>">
                      <p class="error"><?php if(isset($errors['subject'])) echo $errors['subject']; ?></p>

                    <label for="message">Message * &nbsp;</label>
                    <textarea rows="5" style="width:100%" name="message" placeholder="Comments" value="<?php if(isset($_POST['subject'])) echo $_POST['subject'];?>"></textarea>
                     <p class="error"><?php if(isset($errors['message'])) echo $errors['message']; ?></p>
       
                    <br />
                     <p align="center"><input type="submit" value="Send" name="Submit" id="submit">
                         <input type="hidden" name="submitted" value="TRUE" /></p>
                </form> 
                     
            </div>
    
        </div>
        
    </div>
    
</div>
</body>
    
<?php
include 'includes/footer.php';
?>