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
    <title>MOVIES</title>
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
        input{
            width: fit-content;
            height: fit-content;
            padding: 5px;

        }
        button{
            padding:10px 30px 10px 30px;
            background-color: blue;
            color: white;
            cursor: pointer;
        }
        
    </style>
</head>
<body>
    
<center>
   <h2> MOVIES DETAILS IN THE DATABASE</h2>
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



$q = "select id, name, actor, actress, year, director from movie";

$result = mysqli_query($con,$q);

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
</table>
<h1>INSERT INTO THE MOVIE DATABASE</h1>
<form method="post" action="inesrt.php">
Name: <input type:"text" name="n" required>
Actor: <input type:"text" name="ac" required>
Actress: <input type:"text" name="act"required >
Year: <input type:"text" name="y" required>
Director: <input type:"text" name="d" required>
<button type:submit>submit</button>
</form>

<h1>SEARCH MOVIE BY ACTOR NAME</h1>
<form method="post" action="actor.php">
Hero: <input type:"text" name="h" required>
<button type:"submit">submit</button>
</form>


</body>
</html>
