<?php  

 session_start();  
 $host = "localhost";  
 $username = "root";  
 $password = "";  
 $database = "signuppage";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$host; dbname=$database", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["admin"]) || empty($_POST["pass"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM login WHERE admin = :admin AND pass = :pass ";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'admin'     =>     $_POST["admin"],  
                          'pass'      =>     $_POST["pass"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["admin"] = $_POST["admin"];  
                     header("location:SAM1.html");  
                }  
                else  
                {  
                    header("location:index (1).html");  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 { 
      echo $error->getMessage();  
 }  
 ?>  