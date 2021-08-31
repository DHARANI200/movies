<?php


$con = mysqli_connect('localhost','root','');
$conn=mysqli_select_db($con,'Movies');

$name=$_POST['n'];
$actor=$_POST['ac'];
$actress=$_POST['act'];
$year=$_POST['y'];
$director=$_POST['d'];


$q = " select * from movie where name = '$name' && actor = '$actor' && actress = '$actress' && year = '$year' && director = 'director' ";

$result = mysqli_query($con,$q);


    $qy = " insert into movie(name , actor , actress , year , director) values('$name' , '$actor' , '$actress' , '$year' , '$director') ";
    mysqli_query($con, $qy);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserted</title>
    <script>
        function popup(){
            alert("Data Insreted, Please go back and refresh the page to see inserted data");
        }
        </script>
</head>
<body onload="popup();">


</body>
</html>