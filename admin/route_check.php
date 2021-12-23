<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Train Information</title>
      <!-- <link rel="stylesheet" type="text/css" href="style_flights.css"> -->
<style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pic/bk4.jpeg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
      }
 
     </style>


  </head>
  <body style="background-color:powderblue;">
      <header>
    <style>
    table {
      background: #FFEFD5;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {
      border: 2px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #dddddd;
    } 
    </style>



  </head>
  <body style="background-color:powderblue;">
      <header>
    <style>
    table {
      background: #FFEFD5;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {
      border: 2px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #dddddd;
    } 
    </style>



<h2 align="center">Train Route</h2>

<table align="center">
  <tr>
    <th>TRAIN ID</th>
    <th>TRAIN NAME</th>
    <th>TRAIN ROUTE</th>
  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "test");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT  train_id, train_name, train_route FROM route ";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["train_id"] ."</td><td>".$row["train_name"] ."</td><td>".$row["train_route"] ."</td></tr>";
  }
  echo "</table>";
} else{
  echo "0 result";
}
$conn->close();
 ?>

</table>
</header>

<br>
<br>

<a href="admin_dashboard.php"><center><input name="back" type="button" id="but" value="<<< Back"></input></center>

</body>
</html>
