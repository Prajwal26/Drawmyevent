<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");
// $personid = $_POST['personid'];
$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
  $personid=  $request->personid;
  $tablename=$request->table;
mysqli_query($conn,"update ".$tablename." set seen='1' where id=".$personid);
echo "1";
?>
