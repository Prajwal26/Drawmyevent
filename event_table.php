<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");

$result = $conn->query("SELECT * FROM eventdetails");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Eventid":"'  . $rs["event_id"].'",';
  $outp .= '"Name":"'   . $rs["event_name"].'",';
  $outp .= '"Date":"'   . $rs["event_date"]. '",';
//  $outp .= '"Contact":"'   . $rs["contact"]. '",';
  $outp .= '"People":"'   . $rs["people"]. '",';
  $outp .= '"BudgetStart":"'   . $rs["budget_start"]. '",';
  $outp .= '"BudgetEnd":"'   . $rs["budget_end"]. '",';
  $outp .= '"Specification":"'. $rs["other_spec"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
