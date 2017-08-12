<?php
include('dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$department = $_POST['department'];
$work = $_POST['work'];
$bday = $_POST['bday'];
$company = $_POST['company'];
$address = $_POST['address'];
$admit = $_POST['admit'];
$class_id = $_POST['class_id'];
$email = $_POST['email'];

$query = mysql_query("select * from student where username='$username' and firstname='$firstname' and lastname='$lastname'")or die(mysql_error());
$row = mysql_fetch_array($query);
$id = $row['student_id'];

$count = mysql_num_rows($query);
if ($count > 0){
	mysql_query("update student set password = '$password', status = 'Registered', work = '$work', company = '$company' , firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', address = '$address' , class_id = '$class_id', email = '$email' , location = 'uploads/pic.jpg'  where student_id = '$id'")or die(mysql_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
echo 'false';
}
?>