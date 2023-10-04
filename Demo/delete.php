<?php
include('connection.php');

// $roll = $_GET['rn'];


// echo $roll;
$query= "delete from student where Roll_no ='$_GET[rn]'";
$result=mysqli_query($con,$query);
if($result){
    // echo "Delete Successfull";
    header('location:display.php');
}
else{
    die(mysqli_error($result));
}


?>