<?php
$pname=$_POST['pname'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$sex=$_POST['sex'];
$type=$_POST['type'];

$mysqli=mysqli_connect('localhost','root','password','kkch');
$query="INSERT INTO `opd` (`name`, `age`, `weight`, `sex`, `type`, `time`, `uid`) VALUES ('$pname', '$age', '$weight', '$sex', '$type', CURRENT_TIMESTAMP, NULL);";

$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result){
$query="SELECT uid FROM opd WHERE name='$pname' AND weight='$weight' AND sex='$sex' AND type='$type' ORDER BY time DESC";
$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
    if($result){
    $row=mysqli_fetch_array($result);
    echo $row['uid'];
    }
}

?>