<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New Student</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Roll No</td>
                <td><input type="text" name="srollno"></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="sname"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="saddress"></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><input type="text" name="scourse"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" name="submit">
                </td>
            </tr>
            
        </table>
        <?php
    include 'connection.php';
    if(isset($_POST['submit']))
    {
       $rollno =$_POST['srollno'];
       $name=$_POST['sname'];
       $address=$_POST['saddress'];
       $course=$_POST['scourse'];
       $query = "insert into student values($rollno,'$name','$address','$course')";
       $result=mysqli_query($con,$query);
       if($result){
        // echo "insert Successfully";
        header('location:display.php'); 
       }
else{
    die(mysqli_error($result)); 
}


    }
        ?>
    </form>
</body>
</html>