<?php
print_r($_POST);
$host = "localhost";
$userName = "root";
$password = "root";
$dbName = "draw_event";

// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$eventname=$_POST['eventname'];
$eventdate=$_POST['date'];
$number=$_POST['people'];
$budgetto=$_POST['budgetto'];
$budgetfrom=$_POST['budgetfrom'];
$other=$_POST['other'];
$username=$_POST['username'];
$city=$_POST['city'];
$contact=$_POST['number'];
$email=$_POST['email'];
$address=$_POST['address'];

$sql="INSERT INTO eventdetails(event_name, event_date, people, budget_start ,budget_end, other_spec) VALUES ('".$eventname."','".$eventdate."', '".$number."', '".$budgetto."','".$budgetfrom."','".$other."');";
$sql1="INSERT INTO person_details(name,city,  contact,email,address) VALUES ('".$username."','".$city."', '".$contact."', '".$email."','".$address."');";


if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
if(!$result = $conn->query($sql1)){
die('There was an error running the query [' . $conn->error . ']');
echo "nine ";
}
 ?>
