<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");
// $personid = $_POST['personid'];
$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
  $personid=  $request->personid;
  $tablename=$request->table;
  $para=$request->param;
mysqli_query($conn,"delete from $tablename  where ".$para."=".$personid);
echo "1";
?>
