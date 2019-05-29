<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Cabin|Concert+One|Crete+Round|Indie+Flower|Lora|Pacifico|Patrick+Hand+SC|Permanent+Marker|Quicksand|Roboto+Slab" rel="stylesheet">
   <link rel="stylesheet" href="style.css"> 
</head>


<body>  
  <div class="header">
    <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
      <a class="active" href="#home">Login Page</a>
    </div>
  </div> 
<!-- Contact Information -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h1 class="w3-center w3-text-teal" style="font-family: 'Crete Round', serif;"><b><u>LOG IN</u></b></h1>
  <h4 class="w3-center" style="font-family: 'Roboto Slab', serif;">ICT Books Online Store</h4>

  <center>
  <div class="w3-row w3-padding-32 w3-section">
  	<div class="w3-col m6 w3-center w3-padding-large">
      <img src="logo.png" class="w3-round w3-image w3-hover-opacity-off" alt="book_logo" width="500" height="250">
    </div>

  <div class="w3-col m6 w3-hide-small w3-padding-large">
      
<!-- Button and Form Action -->
    <form class="form-signin" style="width:70%" method="get" action="index.php">
     <h2 class="form-signin-heading"> Please Sign in </h2>
     <label for="inputUsername" class="sr-only" style="" ></label>
       <input type="username" id="inputUsername" name="inputUsername" style="width:50%; height:35px" class="form-control" placeholder="username" required autofocus><br/><br/>

     <label for="inputPassword" class="sr-only" ></label>
     <input type="password" id="inputPassword" name="inputPassword" style="width:50%; height:35px"  class="form-control" placeholder="Password" required>
     <br/><br/>
     <input type="submit" name="Login" id="submit" value="Login"></input>
  </form>
  </center>

    </div>
  </div>
</div>


<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity w3-xxlarge"></i>
    <i class="fa fa-twitter w3-hover-opacity w3-xxlarge"></i>
  </div>
  <h5 style="font-family: 'Ubuntu'">Powered by Felix</h5>
</footer>

</body>
</html>

<?php
 session_start();

 if(isset($_GET['inputUsername']) and isset($_GET['inputPassword']))
 {
   $_SESSION['un'] = $_GET['inputUsername'];
   $_SESSION['paw'] = $_GET['inputPassword'];
    $host = 'localhost'; 
      $user='root'; 
      $pass=''; 
      $db = 'bookstore'; 
      $con = new mysqli($host,$user,$pass,$db); 
      $sql = " SELECT * FROM user WHERE studentID = '".$_SESSION["un"]."'AND password = '".$_SESSION["paw"]."'";
      $result = mysqli_query($con,$sql);
      

      if(mysqli_num_rows($result) <= 0){
            echo "<script>console.log('mai dai set');</script>";
      }
      else{
          $obj=mysqli_fetch_array($result);   
          echo '<script type="text/javascript">alert(" Hello '.$obj['firstName'].'"); window.location =  "search.php"; </script>';
          
      }
    }
?>
