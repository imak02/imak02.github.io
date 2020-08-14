 <?php

if(isset($_POST["submit"]))
{
	$fn=$_POST['fname'];
	$ln=$_POST['lname'];
	$e=$_POST['email'];
	$m=$_POST['messages'];

//establishing connection to server
$conn=mysqli_connect("localhost","root","");
	
	
	$db=mysqli_select_db($conn,"page");

if($db){
	
	$query2="INSERT INTO reaction(id,firstname,lastname,email,messages)VALUES('','$fn','$ln','$e','$m')";
	if (mysqli_query($conn,$query2)){
		echo"Data Inserted";
	}
else{
	echo"Unable to insert data";
}
}

else{
	echo"Failed to create database";
}


}
?>

