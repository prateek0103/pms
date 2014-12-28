<?php
$pno=$_POST['pno'];
$type=$_POST['type'];


$mysqli=mysqli_connect('localhost','root','password','kkch');
if($type=='o'){
$query="INSERT INTO `deletion` (`uid`,`db`)VALUES('$pno','opd');";
$query2="UPDATE `opd` SET `status` = '2' WHERE `uid` = '$pno';";}

else{
$query="INSERT INTO `deletion` (`uid`,`db`)VALUES('$pno','ipd');";
$query2="UPDATE `ipd` SET `status` = '2' WHERE `pno` = '$pno';";
}

$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result){
{$result2=mysqli_query($mysqli,$query2)or die(mysqli_error($mysqli));
echo 1;}

}

?>