<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Display </title>
</head>
<body>
    <h1> List of Students</h1>
   <a href="insert.php"><button style="color:green;">Add+</button></a> 
    <br>
    <br>
    <table border="1" cellspacing="0">
        <tr style="background-color:yellow">
            <th>rollno</th>
            <th>Name</th>
            <th>Address</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
      
        <!-- PHP  code-->
        <?php
include 'connection.php';
$query= "select * from student";
$result=mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($result)){
    $rollno= $row['Roll_no'];
    $name=$row['Name'];
    $address=$row['Address'];
    $course=$row['course'];
    echo"<tr>
    <td>".$rollno."</td>
    <td>".$name."</td>
    <td>".$address."</td>
    <td>".$course."</td>
    <td>
    <a href='update.php?rm=$rollno'><button style='color:blue;'>update</button></a>
    <a href='delete.php?rn=$rollno'><button style='color:red;'>delete</button></a>
    </td>
    </tr>";

}








?>
       
    </table>
</body>
</html>