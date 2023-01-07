<?php

$sql = new MySQLi('127.0.0.1','root','','Regions');
$result = $sql->query("SELECT * FROM Cities");
$arr = array();

while ($row = $result->fetch_assoc()){
    $arr[] = $row;
}

echo json_encode($arr)

?>