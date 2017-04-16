<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "lindseyballoumm@gmail.com";
 
    $email_subject = "Contact Form Notice";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 

 
        !isset($_POST['email']) ||
 
      
 
        !isset($_POST['message'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
   
 
    $email_from = $_POST['email']; // required
 
  
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
   
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Yo yo here you go.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
  
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
   
 
    $email_message .= "Message: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
<!DOCTYPE html>

<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway:700|Satisfy" rel="stylesheet">
    <title>LBMM</title>
    <link class="loader" rel="shortcut icon" href="LBM Title2.ico" />
    <link rel="stylesheet" href="../index/style/contactStyle.css">
    
    <div class="centered">
    <a href="../index/videos.html">
    <img class="imgstopLeft" src="../index/images/LBM Video.svg" width="8%"></a>
    
    <a href="../index/photo.html">
    <img class="imgstop" src="../index/images/LBM Photo.svg" width="8%"></a>
    
    <a href="../index.html">
    <img class="imgs" src="../index/images/LBM-Logo Sq.svg" width="23%">
    </a>
    
    <a href="../index/contact.html">
    <img class="imgstopLeft" src="../index/images/LBM Contact Inv.svg" width="8%"></a>
    
    <a href="../index/about.html">
    <img class="imgstop" src="../index/images/LBM About.svg" width="8%"></a>
    </div>
    
</head>
    
<body>
  
	<div class="textTitle">
    Thanks for contacting us! We'll be in touch shortly.
    </div>
    
       
        <br>
    <div class="dumb">
        <img src="../images/LBM- Watermark.svg" width="15%">
    </div>  
    <br>
    <div id="bottomTag">
        
    </div><div id="bottomTag">
        <a href="https://www.facebook.com/Lindsey-Ballou-Multi-Media-1357999744251125" target="_blank">
        <img class="fb" src="../index/images/facebook.svg" width="3%"></a>
        <a href="https://www.instagram.com/lindseyballoumm/" target="_blank">
            <img class="insta" src="../index/images/instagram.svg" width="3%"></a>
    </div>
    <br>
  
    </body>
    
</html>
 
 
 
<?php
 
}
 
?>