<?php


$con = mysqli_connect('localhost','root','');
$conn=mysqli_select_db($con,'Movies');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTOR</title>
    <style>
        
        table{
            
            border: 3px solid black;
            width: fit-content;
            color: #588c7e;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            
        }
        th{
            width: fit-content;
            border: 3px solid black;
            background-color: #588e7e;
            color: white;
            padding: 10px;
        }
        tr{
            padding: 10px;
            width: fit-content;
            border: 3px solid black;
            background-color: #f2f2f2;
        }
        td{
            padding: 10px;
            width: fit-content;
            border: 3px solid black;
            color: black;
        }
        
        </style>
</head>
<body>
<a href="index.php">BACK</a>
<center>
    
<table>
<tr>
    <th>id</th>
    <th>Name</th>  
    <th>ACTOR</th> 
    <th>ACTRESS</th> 
    <th>YEAR</th>
    <th>DIRECTOR</th>
  </tr>
   

<?php

$hero=$_POST['h'];

$p="select * from movie where actor='$hero'";

$result = mysqli_query($con,$p);

if($result-> num_rows > 0){
while($row = $result-> fetch_assoc()){
  echo "<tr><td>". $row["id"] ."</td><td>".$row["name"]."</td><td>".$row["actor"]."</td><td>".$row["actress"]."</td><td>".$row["year"]."</td><td>".$row["director"]."</td></tr>";
}
echo "</table>";
}
else{
echo "0 results";
}


?>
</center>
</body>
</html>