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
		$username=$_POST['user_name'];
		$review=$_POST['review'];
		$rating=$_POST['rating'];
	//$password=sha1($password);
	   $sql="INSERT INTO feedback VALUES ('$userid','$username','$review','$rating')";
		$result=mysqli_query($conn,$sql);
		if($result){
			
				echo '<script type="text/javascript">alert("your feedback added successfully")</script>';
				
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
   
   <form action="feedback.php" method="post">
  <h1 style="color:black;margin-left:40%;margin-top:30px">FEEDBACK </h1>
  <br>
  <div class="col-md-6" style="background-color:;margin-left:20%;border-radius:18px">
         <br>
         <label><b >PHONE NUMBER</b></label>
		  <input type="number" class="form-control" name="user_id" 
		  placeholder="enter your phone number"><br>
		  <label><b >NAME</b></label>
		  <input type="text" class="form-control" name="user_name" 
		  placeholder="enter your username"><br>
		  <label><b >YOUR REVIEW</b></label>
		  <textarea class="form-control" name="review"></textarea>
		  <br>
		  <h5 >YOUR OVERALL EXPERIENCE</h5><br>
		  <input type="radio" id="male" name="rating" value="Very Good">
          <label><b>Very Good</b></label>
          <input type="radio" id="female" name="rating" value="Good" style="margin-left:15px">
		  <label><b>Good</b></label>
          <input type="radio" id="other" name="rating" value="Fair"style="margin-left:15px">
          <label><b>Fair</b></label>
		  <input type="radio" id="other" name="rating" value="Poor" style="margin-left:15px">
          <label><b>Poor</b></label>
		  <br>
          <input type="submit" style="margin-left:40%" class="btn btn-success" name="Submit">
		  <br>
		  <br>
		  
  </div>
  </body>
  </form>
  
  </head>
  </html>