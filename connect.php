<?php
$input =$_POST['input'];
$name =$_POST['name'];
$phone =$_POST['phone'];
$date =$_POST['date'];
$message =$_POST['message'];

//database connection
$conn =new mysqli($input,$name,$phone,$date,$message);
if($conn->connect_error){
    die("Connection Faild : ".$conn->connect_error);
}if ($_SERVER["REQUEST_METHOD"] == "POST") {

$input =$_POST['input'];
$name =$_POST['name'];
$phone =$_POST['phone'];
$date =$_POST['date'];
$message =$_POST['message'];

    $stmt = $conn->prepare("INSERT INTO registration (input,name,phone,date,message)values(?,?,?,?,?)");
    $stmt->bind_param("ssiis",$input,$name,$phone,$date,$message);
    $stmt->execute();
    if ($conn->query($stmt) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
      }
    }
    
    $stmt->close();
    $conn->close();

?>