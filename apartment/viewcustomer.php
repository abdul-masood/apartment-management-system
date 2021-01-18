<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Details </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> </script>
  <script         src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<style>
            body {
                
                  
                
                }
            form 
            {
            font-size: 30px;
            background-color: white;
            padding:20px;
            box-sizing: border-box;
             margin: 0 0 15px;
             border: 2px;
             border-style: solid;
             text-align: center;
             width: 30%;
            margin-left: 35%;
             }
        .vs {
            font-size: x-large;
            background-color: rgb(17, 17, 16);
            color: white;
            }
        .vs:hover 
        {

            color: white;
            background-color: rgb(19, 10, 148);
        }
        h1
        {
             color: black;
             text-align: center;
             border-style: solid;
             width: 40%;
             margin-left: 30%;
             background-color: white;
             padding: 5px;

             
        }
        
      
    
        </style>
    </head>
    <body>
<center>
<h3><b><u>Details of Customer</b></u></h3></center>

<?php
$connection = new mysqli('localhost','root','','signuppage'); //The Blank string is the password


$sql = "SELECT name,phoneno,roomno,nofppl,checkin,checkout from registerpage";
$result =  $connection->query($sql);

echo "<table width='800' border='1' align='center' >"; 
// start a table tag in the HTML
echo"<tr>
	<th>Name</th>
	<th>Phone number</th>
	<th>Room no.</th>
	<th>No of residents</th>
	<th>Check-in</th>
	<th>Check-out</th>
	

	</tr>";
while($row = $result->fetch_array(MYSQLI_BOTH)){   //Creates a loop to loop through results
echo "<tr border: '1px solid black'><td border: '1px solid black'>" . $row['name'] . "</td>
		<td border: '1px solid black'>" . $row['phoneno'] . "</td>
		<td border: '1px solid black'>" . $row['roomno'] . "</td>
		<td border: '1px solid black'>" . $row['nofppl'] . "</td>
		<td border: '1px solid black'>" . $row['checkin'] . "</td>
		<td border: '1px solid black'>" . $row['checkout'] . "</td>
		
		</tr>";  //$row['index'] the index here is a field name
}

echo "</table>"; //Close the table in HTML

//mysql_close();
?><br/>
<center><a href="SAM1.html" class="btn btn-danger">HomePage</a>
</center>
</body>
</head>
</html>