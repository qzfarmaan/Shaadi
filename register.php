<?php
include('connection.php');
$email = $_POST['email'];
$password=$_POST['psw'];
$fname=$_POST['name1'];
$lname=$_POST['name2'];
$dob=$_POST['dob'];
$religion=$_POST['rel'];
$community=$_POST['community'];
$place=$_POST['area'];
$city=$_POST['city'];
$marital_status=$_POST['sta'];
$diet=$_POST['diet'];
$height=$_POST['height'];
$sub_community=$_POST['comm'];
$qualification=$_POST['qua'];
$college_name=$_POST['college'];
$work_with=$_POST['workwith'];
$work_as=$_POST['workas'];
$company=$_POST['company'];
$income=$_POST['income'];
$about=$_POST['message'];
$phone_no=$_POST['number'];
$image=$_POST['photo'];

   $sql="INSERT INTO shaadi Values('$email','$password','$fname','$lname','$dob','$religion','$community','$place','$city','$marital_status',
   '$diet', '$height','$sub_community','$qualification','$college_name','$work_with','$work_as','$company','$income','$about','$phone_no',
   '$image')";
   if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
           } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $con->error;
    }

$con->close();
        
?>  
