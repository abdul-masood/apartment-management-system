<?php
    session_start();
    $username=$email=$phoneno=$address=$proof=$roomno=$floor=$nofppl=$checkin=$checkout="";
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $username = test_input ($_POST['name']);
    $email = test_input ($_POST['email']);   
    $phoneno =test_input ($_POST['phone']);
    $address= test_input ($_POST['address']);
    $proof = test_input ($_POST['proof']);
    $roomno =test_input ($_POST['roomno']);
    $floor =test_input ($_POST['floor']);
    $nofppl = test_input ($_POST['no-of-ppl']);
    $checkin =test_input ($_POST['check-in']);
    $checkout =test_input ($_POST['check-out']);

   $user = "root";
   $pass ="";
   $db = "signuppage";
   $conn=new  mysqli('localhost',$user,$pass,$db) or die("unable to connect");
   $result1= $conn->query("SELECT * FROM registerpage");

   $query ="INSERT INTO registerpage VALUES('$username','$email','$phoneno','$address','$proof','$roomno','$floor','$nofppl','$checkin','$checkout')";
   $conn->query($query) or die("Oops, there's been an error.");
   header("Location:facility.php");

     }
    function test_input($data){
        $data= trim($data);
        return $data;
    }

    mysqli_close($conn);   
?>