<?php
    $username=$email=$phoneno=$address=$proof=$roomno=$floor=$nofppl=$checkin=$checkout="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $phoneno = $_POST['phone'];

   $user = "root";
   $pass ="";
   $db = "signuppage";
   $conn=new  mysqli('localhost',$user,$pass,$db) or die("unable to connect");
   $result1= $conn->query("SELECT * FROM registerpage");

   $flag=0;  
        while($row=mysqli_fetch_array($result1)){
            if($row['phoneno']==$phoneno)
            {
                $flag=1;
                header("Location:SAM3.html");
                exit; 
            }
        }
        if($flag==0) {
            header("Location:SAM1.html");
        }
    }
 ?>