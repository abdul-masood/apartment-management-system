<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signuppage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connectione

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>




<?php
	$msg="";
	if(isset($_POST['Submit'])) {
		$userid=$_POST['user_id'];
		
        $rating=$_POST['rating'];
        $review=$_POST['review'];
	//$password=sha1($password);
	   $sql="INSERT INTO facilities VALUES ('$userid','$rating','$review')";
		$result=mysqli_query($conn,$sql);
		if($result){
			
				echo '<script type="text/javascript">alert("Thank you for registering with us!")</script>';
				
					?>
					<script type="text/javascript">
					window.location.href="thank.html"</script>
					<?php
					
					
					
					
					}
			else
				{
					echo $msg="username or password is Incorrect!";
				
			    }


		
		
	}


?>






<html>
<head>
<title>feedback form</title>

   <body style="background-image:url('p1.jpeg');background repeat:no-repeat;background-size:100% 100%">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">  </script>
  <style>
  </style>
   
   <form action="facility.php" method="post">
  <h1 style="color:black;margin-left:40%;margin-top:30px">FACILTIES </h1>
  <br>
  <div class="col-md-6" style="background-color:;margin-left:20%;border-radius:18px">
         <br>
         <label><b >PHONE NUMBER</b></label>
		  <input type="number" class="form-control" name="user_id" 
		  placeholder="enter your phone number"><br>
		  <h5 >CAB FACILITIES</h5>
		  <input type="radio" id="male" name="rating" value="OLA-400Rs">
          <label><b>OLA-400Rs</b></label>
          <input type="radio" id="female" name="rating" value="UBER-500Rs" style="margin-left:15px">
		  <label><b>UBER-500Rs</b></label>
          <input type="radio" id="other" name="rating" value="MERU-600Rs"style="margin-left:15px">
          <label><b>MERU-600Rs</b></label>
          <br> 
          <br>
          <h5 >SWIMMING POOL</h5>
		  <input type="radio" id="male" name="review" value="KIDS POOL">
          <label><b>KIDS POOL</b></label>
          <input type="radio" id="female" name="review" value="ADULTS POOL" style="margin-left:15px">
		  <label><b>ADULTS POOL</b></label>
		  <br> 
		  
          <input type="submit" style="margin-left:40%" class="btn btn-success" name="Submit">
		  <br>
		  <br>
		  
  </div>
  </body>
  </form>
  
  </head>
  </html>