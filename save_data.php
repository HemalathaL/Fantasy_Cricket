<?php
$league_values=$_POST['league_values'];

//$league_id=$_POST['league_id'];
$selected_value=$_POST['selectedvalue'];
//echo $league_name." ".$league_id." ".$selected_value;
$userid=$_POST['userid'];
$conn = mysqli_connect('localhost', 'root', '', 'cricket');
//echo gettype($selected_value);
$t=preg_split ("/\,/", $selected_value);
$league_values=explode(" | ",$league_values);
$league_name=$league_values[0];
$query="select id from league where league_name='".$league_values[0]."' and matchtype='".$league_values[1]."' and date='".$league_values[2]."' and time='".$league_values[3]."'";

$result = $conn->query($query);

if ($result->num_rows > 0) {
  // output data of each row
  $row = $result->fetch_assoc();
  $league_id= $row["id"];

} 
//echo $league_id;
// print_r($query);
foreach($t as $statement)
{
    $insertQuery = "INSERT INTO userselection (league_id,league_name,user_selected_option,User_id) VALUES ('$league_id','$league_name','$statement','$userid')";
    //print_r($league_id);
    //print_r($league_name);
    //print_r($query);
    if ($conn->query($insertQuery) === FALSE) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    
}
echo "Success";  


            

?>