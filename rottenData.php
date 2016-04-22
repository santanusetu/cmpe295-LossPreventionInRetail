<?php
session_start()
?>
<?php
ob_start();
require("config.php");
ob_end_clean();
mysql_connect("localhost","root","");
mysql_select_db("exchange") or die( "Unable to select database");
$sql = "SELECT `Customer City`,`Package Loss_Rotten` AS Rotten FROM `myproject`"; 
$rs = mysql_query($sql) or die($sql. "<br/>".mysql_error());
$rows = array();
while($r = mysql_fetch_array($rs)) {
    $row[0] = $r[0];
    $row[1] = $r[1];
     array_push($rows,$row);
}
print json_encode($rows, JSON_NUMERIC_CHECK);
?>
