 <?php
 $con=mysqli_connect("localhost","root");

 if(!$con)
 {
 	echo "connection failed";
 }
 else
 {
 	echo "connection successfully";
 }
 if(!mysqli_select_db($con,"hotel"))
 {
 	echo "please check connection";
 }
 else
 {
 	echo "connected";
 }

 $chiken=$_POST['chiken']; 
 $kabab=$_POST['kabab'];
 $biriyani=$_POST['biriyani']; 
 $vegetable=$_POST['vegetable'];

 $insert="insert into feature(chiken,kabab,biriyani,vegetable) values('$chiken','$kabab','$biriyani','$vegetable')";

if(!mysqli_query($con,$insert))
 {
 	echo "Data not saved";
 }
 else
 {
 	echo "Data saved";
 }
 
 ?>

 