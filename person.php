<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");

$result = $conn->query("SELECT * FROM person_details");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Personid":"'  . $rs["personid"].'",';
  $outp .= '"Name":"'   . $rs["name"].'",';
  $outp .= '"City":"'   . $rs["city"]. '",';
  $outp .= '"Contact":"'   . $rs["contact"]. '",';
  $outp .= '"Email":"'   . $rs["email"]. '",';
  $outp .= '"Address":"'. $rs["address"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
