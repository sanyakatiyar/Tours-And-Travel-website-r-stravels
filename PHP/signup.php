<?php
if(isset($_COOKIE['login_user'])){
 setcookie('login_user',"",time()-60);;//to destroy any previous cookies
}
$con=mysqli_connect("localhost","root","","Project");
if($con)
echo "";
else
echo "Not Connected<br>";
if(isset($con)){
$username=$_POST["uname"];
$password=$_POST["psw"];
$email=$_POST["email"];
$query="INSERT INTO user_login (Username,Password,Email) values
('$username','$password','$email')";
if(mysqli_query($con,$query)===TRUE){
setcookie("login_user",$username,time()+600);
header("Location:aboutnew.html");
}
else{
echo "Some Error in the Server....";
}
}
?>
