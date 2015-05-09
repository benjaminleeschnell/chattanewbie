<!doctype html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sign up</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    
    <body>

<div class="overall-container">

    <div class="nav-container">            
      <div class="container">
      
        <div class="small-nav"> 
 
            <a href="http://172.16.100.126/.com/" class="smaller-logo"> 
              <img src="img/chattanewbie_logo.png" alt="Chattanewbie">
            </a> 
              
            <ul>
              <li><a href="/sign_up.html">Sign Up</a></li>
              <li><a href="/login/html">Login</a></li>
            </ul>          
         
        </div>

        </div> <!-- container -->
    </div> <!-- nav-container -->
     
     <div class="main-container">
       <div class="container">
       
        <div class="profile-container">
       
        <h5>WELCOME TO YOUR PROFILE</h5>

       <div class="section group">
       
       <div class="col span_2_of_9">

        <img class="user" src="img/user_erin.jpeg">
       
       </div>
       
       <div class="col span_4_of_9">
        
        <?php
if( $_POST['fieldFirstName'])
  {
     echo "fieldFirstName value set: ". $_POST['fieldFirstName']. "<br />";
  }

$servername = "localhost";
$username = "root";
$password = "ubuntu";
$dbname = "chattanewbie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// form sql for login checking
$sql = "SELECT first_name, last_name, username"
  ." FROM users"
  ." WHERE user_id=0";
$result = mysqli_query($conn, $sql); // fetch results
$newrow = mysqli_fetch_assoc($result);

// form sql for login checking
$sqlEmail = "SELECT user_email"
  ." FROM accounts"
  ." WHERE user_id=30";
$resultEmail = mysqli_query($conn, $sqlEmail); // fetch results
$newrowEmail = mysqli_fetch_assoc($resultEmail);

// form sql for login checking
$sqlExposure = "SELECT description"
  ." FROM exposures"
  ." WHERE level=1";
$resultExposure = mysqli_query($conn, $sqlExposure); // fetch results
$newrowExposure = mysqli_fetch_assoc($resultExposure);

// form sql for login checking
$sqlFamily = "SELECT description"
  ." FROM family_statuses"
  ." WHERE status_id=3";
$resultFamily = mysqli_query($conn, $sqlFamily); // fetch results
$newrowFamily = mysqli_fetch_assoc($resultFamily);

echo " 
        <ul class=\"profile_info\">
          <li> <h4>".$newrow['first_name']." ".$newrow['last_name']."</h4> </li>
          <li> <h4>".$newrow['username']."</h4> </li>
          <li> <h4>".$newrowEmail['user_email']."</h4> </li>
          <li> <h4>".$newrowExposure['description']."</h4> </li>
          <li> <h4>".$newrowFamily['description']."</h4> </li>
        </ul>
  ";
?>

      </div>

       <div class="col span_3_of_9">

        <h4> You're intested in Chattanooga:</h4>  
        <ul class="interests_info">
          <li><h2>Adventure </h2></li>
          <li><h2> Nightlife </h></li>
          <li><h2> The Arts </h2></li>
        </ul>
       </div>

     </div><!-- section group -->

      </div><!-- profile-container -->
     
     </div><!-- container -->
   </div><!-- main-container -->

    <div class="container">
      <div class="profile-container">

       <div class="section group">
       
       <div class="col span_1_of_2">

        <h5>YOUR LATEST PATH</h5>

        <img align="center" class="" src="img/map_home.jpg">
       
      </div>
      <div class="col span_1_of_2">
      
        <h5> Path Steps</h5>  
        <ul class="interests_info">
          <li><h2>1. Check out the Musueum</h2></li>
          <li><h2>2. Grab a cup at the Coffee Bar </h></li>
          <li><h2>3. Meet up at The Social </h2></li>
        </ul>

      </div>


      </div><!-- profile-container -->
    </div><!-- container -->

  <div class="footer-container">            
    <div class="container">
    
      <div id="footer">
 
        <div class="section group">     
           <div class="col span_1_of_2">    
        
            <div class="social">
            <h5 class="footer_h5"> CONNECT WITH CHATTANEWBIE </h5>
            <ul >
              <li><a href="http://www.facebook.com" target=_blank><img src="img/facebook_icon.png" alt="facebook"></a></li>
              <li><a href="http://www.pinterest.com" target=_blank><img src="img/pinterest_icon.png" alt="pintrest"></a></li>
              <li><a href="http://www.twitter.com" target=_blank><img src="img/twitter_icon.png" alt="twitter"></a></li>
              <li><a href="http://www.instagram.com" target=_blank><img src="img/instagram_icon.png" alt="instagram"></a></li>
            </ul>
            </div>

          </div>          
          <div class="col span_1_of_2">  

            <div class="footer_links">
            <ul>
              <li>About Chattanewbie</li>
              <li>Chattanewbie's Team</li>
              <li>Placeholder</li>
              <li>How It Works</li>
              <li>Community Guidelines</li>
              <li>Terms of Use</li>
            </ul>
            </div>

          </div>  
        </div>  <!-- section-group -->   

      </div>

    </div> <!-- container -->
  </div> <!-- footer-container -->

</div> <!-- overall-container -->

<!-- jQuery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/{{JQUERY_VERSION}}/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    
    </body>
</html>        
