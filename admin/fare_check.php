<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Fare Query</title>
      <!-- <link rel="stylesheet" type="text/css" href="style_flights.css"> -->

<style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pic/bk.jpeg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
      }
 
     </style>

  </head>
  <body style="background-color:LIGHTGRAY;">
      <header>
    <style>
    table {
       background: #F0FFFF;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {

      border: 2px solid #D2691E;
      text-align: center;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #F0FFF0;
    } 
    </style>



<h2 align="center">Fare Query</h2>

<table align="center">
  <tr>
    <th>TRAIN ID</th>
    <th>TRAIN NAME</th>
    <th>Economy Class Fare</th>
    <th>Business Class Fare</th>
  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "test");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT  train_id, train_name, economy_class_price, business_class_price FROM ticket";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["train_id"] ."</td><td>".$row["train_name"] ."</td><td>".$row["economy_class_price"] ."</td><td>".$row["business_class_price"] ."</td><td>";
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
<br>

         <a href="admin_dashboard.php"><center><input name="back" type="button" id="but" value="<<< Back"></input></center>

</body>
</html>
