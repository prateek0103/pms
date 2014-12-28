<?php
$pno=$_POST['pno'];
$type=$_POST['type'];


$mysqli=mysqli_connect('localhost','root','password','kkch');
if($type=='o'){
$query="DELETE FROM `opd` WHERE `uid` = '$pno';";}

else{
$query="DELETE FROM `ipd` WHERE `pno` = '$pno';";
}

$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result)
{
echo 1;
}

?>