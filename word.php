<?php

if (isset($_REQUEST['query'])) {
$query = $_REQUEST['query'];
$sql = mysql_query ("SELECT * FROM country WHERE country LIKE '%{$query}%'");
$array = array();
while ($row = mysql_fetch_assoc($sql)) {
$array[] = $row['country'];
}
echo json_encode ($array); //Return the JSON Array
}

?>