<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <h1>Edit  Student</h1>
<?php
include('connection.php');
$rollno=$_GET['rm'];
// echo $rollno;
$query = "select * from student where Roll_no=$rollno";
$result=mysqli_query($con,$query);
if($result){
 $row =mysqli_fetch_assoc($result);
//  echo $row['name'];
}

?>





    <form action="" method="POST">
        <table>
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="srollno" value="<?php echo $row['Roll_no'];?>"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="sname" value="<?php echo $row['Name'];?>"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="saddress"value="<?php echo $row['Address'];?>"></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><input type="text" name="scourse" value="<?php echo $row['course'];?>"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="update" name="submit">
                </td>
            </tr>
            
        </table>
        <?php
if(isset($_POST['submit']))
{
    $rollno=$_POST['srollno'];
    $name=$_POST['sname'];
    $address=$_POST['saddress'];
    $course=$_POST['scourse'];

    $query= "update student set Name='$name',Address='$address',course='$course' where Roll_no='$rollno' ";}
    $result=mysqli_query($con,$query);
    if($result){
        
        echo "update Successfull";
       
    
    }
    else{
        die(mysqli_error($result));
    }


?>
    </form>
</body></html>