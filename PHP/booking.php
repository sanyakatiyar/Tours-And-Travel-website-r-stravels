<?php
$name=$_POST['customer_name'];
$phnum=$_POST['phone_number'];
$email=$_POST['email_address'];
$gender=$_POST['gender'];
$payOp=$_POST['PaymentOption'];
$date=$_POST['fromDate'];
$people=$_POST['people'];
setcookie("name",$name);
setcookie("phnum",$phnum);
setcookie("email",$email);
setcookie("gender",$gender);
setcookie("payOp",$payOp);
setcookie("date",$date);
setcookie("people",$people);
$con=mysqli_connect("localhost","root","","Project");
if($con)
 echo "";
else
 echo "Not Connected<br>";
$query="INSERT INTO BookingData
(CustomerName,PhoneNumber,Email,Gender,PaymentOption,FromDate,NumberOfP
eople) values ('$name','$phnum','$email','$gender','$payOp','$date','$people')";
mysqli_query($con,$query);
header("Location:confirm.php");
?>