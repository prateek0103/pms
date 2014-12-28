<?php
$pname=$_POST['pname'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$sex=$_POST['sex'];
$ward=$_POST['ward'];
$father=$_POST['father'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$account=$_POST['account'];

$mysqli=mysqli_connect('localhost','root','password','kkch');

$query="SELECT `bedno` FROM `bed` WHERE `ward` = '$ward' AND `pno` IS NULL ORDER BY `bedno` ASC;";

$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));

$num_row=mysqli_num_rows($result);


if($num_row>0){
$row=mysqli_fetch_array($result);
$realbed=$row['bedno'];


$query="INSERT INTO `ipd` (`name`, `gaurdian`, `age`, `weight`, `sex`, `address`, `contact`, `time`, `ward`, `account`, `bedno`, `charges`, `pno`) VALUES ('$pname', '$father', '$age', '$weight', '$sex', '$address', '$contact', CURRENT_TIMESTAMP, '$ward', '$account', '$realbed', NULL, NULL);";

$result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
if($result){
    
    echo $_POST['ward'].$realbed;
    $query="SELECT MAX(`pno`) AS `pno` FROM `ipd`";
    $result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
    $row=mysqli_fetch_array($result);
    $pno=$row['pno'];
    $query="UPDATE `bed` SET pno='$pno' WHERE ward='$ward' AND bedno='$realbed';";
    $result=mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
}

    }
else
{echo 0;}


?>