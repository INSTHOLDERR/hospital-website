<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="hospitaldb";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
    $input =$_POST['input'];
    $name =$_POST['name'];
    $phone =$_POST['phone'];
    $date =$_POST['date'];
    $message =$_POST['message'];

	 $sql_query = "INSERT INTO registration (input,name,phone,date,message)
	 VALUES ('$input','$name','$phone','$date','$message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>