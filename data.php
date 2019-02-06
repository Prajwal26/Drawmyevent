<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "draw_event");

$result = $conn->query("SELECT eventdetails.event_name , eventdetails.event_date,eventdetails.seen , eventdetails.budget_end, eventdetails.people , person_details.name , person_details.email,person_details.contact from eventdetails JOIN person_details on eventdetails.personid = person_details.personid");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($outp != "") {$outp .= ",";}
  $outp .= '{"Eventname":"'  . $rs["event_name"].'",';
  $outp .= '"Date":"'   . $rs["event_date"].'",';
  $outp .= '"Budget":"'   . $rs["budget_end"]. '",';
  $outp .= '"People":"'   . $rs["people"]. '",';
  $outp .= '"Name":"'   . $rs["name"]. '",';
    $outp .= '"Email":"'   . $rs["email"]. '",';
  $outp .= '"Contact":"'. $rs["contact"]. '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
