<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
      <!-- <link rel="stylesheet" type="text/css" href="style_flights.css"> -->

      <style>
        body{ background-image:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0, 0, 0, 0.3)),url(pic/bk6.jpeg);
        height: 100vh;
        background-size: cover;
        background-position: center;
        font-family: sans-serif;
        margin: 0;
        padding: 0;
      }
 
     </style>

<h2 align="center" class="h">Admin List</h2>

  </head>
  <body style="background-color:LAVENDER;">
      <header>
    <style>
    table {
      background: #FFD700;
      text-align: center;
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 90%;
    }

    td, th {
      border: 2px solid #8A2BE2;
      text-align: center;
      padding: 8px;
    }

     tr:nth-child(even) {
      background-color: #AFEEEE;
    } 
    </style>



<h2 align="center"></h2>

<table align="center">
  <tr>
    <th>NAME</th>
    
    <th>EMAIL</th>
    
  </tr>


<?php


$conn= mysqli_connect("localhost", "root","", "test");
if($conn->connect_error){

  die("connection failed:". $conn-> connect_error);

}
$sql="SELECT  name, email FROM admin ";
$result = $conn->query($sql);

if($result->num_rows>0){
  while($row=$result-> fetch_assoc()){
    echo "<tr><td>". $row["name"] ."</td><td>".$row["email"] ."</td></tr>";
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
<br>

<a href="admin_dashboard.php"><center><input name="back" type="button" id="but" value="<<< Back"></input></center>

</body>
</html>