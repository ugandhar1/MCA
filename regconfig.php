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
$id=$_POST['id'];
$no=$_POST['no'];
$mail=$_POST['email'];

$insert="insert into admin(name,id,no,email) values('$name','$id','$no','$mail')";


if(mysqli_query($con,$insert))
{
	echo "Data saved";
}
else

{
	echo "Data not saved";
}


?>