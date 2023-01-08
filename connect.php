<?php

$sql = new MySQLi('localhost','andreepx_regions','Regions1234','andreepx_regions');
$result = $sql->query("SELECT * FROM Cities");
$arr = array();

while ($row = $result->fetch_assoc()){
    $arr[] = $row;
}

echo json_encode($arr)

?>
