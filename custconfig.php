<?php

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	echo "Connection failed";
}
else
{
	echo "Connection successfully";
}

if(!mysqli_select_db($con,"hotel"))
{
	echo "Please check connection";
}
else{
	echo "connected";
}

$name=$_POST['name'];
$lname=$_POST['lname'];
$mail=$_POST['email'];
$no=$_POST['mobile'];
$city=$_POST['city'];
$state=$_POST['state'];


$ins="insert into coutomer(name,lastname,email,mobile,city,state) values('$name','$lname','$mail','$no','$city','$state')";


if(!mysqli_query($con,$ins))
{
	echo "Data not saved";
}
else

{
	echo "Data saved";
}

?>