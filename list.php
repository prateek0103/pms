<?php
$type=$_POST['type'];
$mysqli = $mysqli=mysqli_connect('localhost','root','password','kkch');

/* show tables */
    $query="SELECT uid,name,status FROM opd WHERE type='$type';";
	$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
    $rows=array();
    while($r=mysqli_fetch_assoc($result)){
    $rows[]=$r;
    }
echo json_encode($rows);

?>

           