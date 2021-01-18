<?php
    session_start();
    $roomno=$price=$breakfast=$extrabed=$extra="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $roomno = test_input ($_POST['room']);
    $price = test_input ($_POST['price']);   
    $breakfast =test_input ($_POST['breakfast']);
    $extrabed= test_input ($_POST['extrabed']);
    $extra = test_input ($_POST['extra']);

   $user = "root";
   $pass ="";
   $db = "signuppage";
   $conn=new  mysqli('localhost',$user,$pass,$db) or die("unable to connect");
   $result1= $conn->query("SELECT * FROM total");

   $query ="INSERT INTO total VALUES('$roomno','$price','$breakfast','$extrabed','$extra')";
   $conn->query($query) or die("errrrorrr");
   header("Location:SAM1.html");

     }
    function test_input($data){
        $data= trim($data);
        return $data;
    }

    mysqli_close($conn);   
?>