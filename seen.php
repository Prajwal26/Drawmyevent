<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");
// $personid = $_POST['personid'];
$postdata = file_get_contents("php://input");
    $request = json_decode($postdata);
    print_r($request);
  $perid=  $request->per;
  $tablename=$request->table;
  $param=$request->para;
mysqli_query($conn,"update ".$tablename." set seen='1' where ".$param."=".$perid.";");
echo "update ".$tablename." set seen='1' where ".$param."=".$perid.";";
?>
