<?php
if(isset($_COOKIE['login_user'])){
 setcookie('login_user',"",time()-60);;//to destroy any previous cookies
}
$con=mysqli_connect("localhost","root","","Project");
if($con)
 echo "";
else
echo "Not Connected<br>";
if(isset($_POST['uname'])){
 $uname=$_POST['uname'];
 $password=$_POST['psw'];
 $sql="select * from user_login where username='".$uname."'AND
password='".$password."' limit 1";
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)==1){
 setcookie('login_user',$uname,time()+600);
 header("Location:aboutnew.html");
 }
 else{
 echo " You Have Entered Incorrect Username or Password";
 }
}
mysqli_close($con);
?>