<?php
if(isset($_COOKIE['login_user'])){
setcookie('login_user',"",time()-60);
header("Location:home.html");
}
else{
header("Location:home.html");
}
?>