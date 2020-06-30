<!DOCTYPE html>
<html>
<head>
<title>Confirmation</title>
<style>
.myForm {
font-family: arial;
font-size: 10px;
width: 70%;
padding: 10px;
border: 1px solid #ccc;
padding-top: 30px;
color: white;
margin: auto;
}
.myForm * {
box-sizing: border-box;
}
.myForm legend,
.myForm label {
padding: 0;
font-weight: bold;
}
.myForm label.choice {
font-size: 15px;
font-weight: normal;
}
.myForm label {
text-align: left;
display: block;
}
.myForm * {
box-sizing: border-box;
}
.myForm input[type="text"]{
float: right;
width: 60%;
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 10px;
height: 30px;
padding: 10px;
margin-left: 20px;
}
.myForm input[type="number"]{
border: 1px solid #ccc;
font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
font-size: 10px;
height: 30px;
padding: 10px;
margin-left: 20px;
}
.myForm button {
padding: 1em;
border-radius: 0.5em;
background: #eee;
border: none;
font-weight: bold;
margin-left: 40%;
margin-top: 1.8em;
}
.myForm button:hover {
background: #ccc;
cursor: pointer;
}
ul {
 list-style-type: none;
 margin: 0;
 padding: 0;
 overflow: hidden;
 background-color: #8B8B8B;
 position: fixed;
 top: 0;
 width: 100%;
}
li {
 float: left;
}
.cap {
 display: block;
 color: white;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
}
li a {
 display: block;
 color: white;
 text-align: center;
 padding: 14px 16px;
 text-decoration: none;
}
li a:hover:not(.active) {
 background-color: #111;
}
h1{
margin-left: 15%;
 color: aqua;
}
</style>
</head>
<body bgcolor="black">
<ul>
 <li class="cap">RS TOURS AND TRAVELS</li>
 <li><a href="aboutnew.html">About Us</a></li>
 <li><a href="upcoming.html">Upcoming Tours</a></li>
 <li><a href="recent.html">Recent Tours</a></li>
 <li><a href="contactus.html">Contact Us</a></li>
 <li style="float:right;"><a href="logout.php">Logout</a></li>
</ul>
<br>
<br>
<h1>Payment Confirmation</h1>
<form class="myForm" method="post" action="booked.php">
<?php
if(isset($_COOKIE['amritsar'])){
 $amount=$_COOKIE['amritsar']*$_COOKIE['people'];
 echo("<p style='font-size: 16px'>The amount to be paid is: RS.$amount</p>");
}
elseif(isset($_COOKIE['mc'])){
 $amount=$_COOKIE['mc']*$_COOKIE['people'];
 echo("<p style='font-size: 16px'>The amount to be paid is: RS.$amount</p>");
}
elseif(isset($_COOKIE['manali'])){
 $amount=$_COOKIE['manali']*$_COOKIE['people'];
 echo("<p style='font-size: 16px'>The amount to be paid is: RS.$amount</p>");
}
elseif(isset($_COOKIE['jaipur'])){
 $amount=$_COOKIE['jaipur']*$_COOKIE['people'];
 echo("<p style='font-size: 16px'>The amount to be paid is: RS.$amount</p>");
}
elseif(isset($_COOKIE['kerala'])){
 $amount=$_COOKIE['kerala']*$_COOKIE['people'];
 echo("<p style='font-size: 16px'>The amount to be paid is: RS.$amount</p>");
}
else{
 $amount=$_COOKIE['spiti']*$_COOKIE['people'];
 echo("<p style='font-size: 16px'>The amount to be paid is: RS.$amount</p>");
}
if($_COOKIE['payOp']=="gpay"||$_COOKIE['payOp']=="bhimupi"){
 echo("<p style='font-size:16px'><label>UPI ID<input type='text' name='upiId'
required></label></p>");
}
elseif($_COOKIE['payOp']=="card"){
 echo("<p style='font-size:16px'><label>Card Number<input type='text'
name='card_num' required></label></p>");
 echo("<p style='font-size:16px'><label style='display:inline width:30%'>Expiry
Date&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbs
p&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nb
sp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&n
bsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input
type='number' name='month' required><input type='number' name='year'
required></label></p>");
 echo("<p style='font-size:16px'><label style='display:inline
width:30%'>CVV&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbs
p&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nb
sp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&n
bsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&
nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input
type='number' name='cvv' required></label></p>");
}
else{
 echo("<p style='font-size:16px'><label>PayTm Phone Number<input type='text'
name='phone' required></label></p>");
}
?>
<p><button type="submit">Submit</button></p>
</form>
</body>
</html>