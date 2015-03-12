<?php
	include('connectAzure.php');
	//$strSQL = "SELECT ";
	//$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
	

	$temp = array (
    "fruits"  => array("a" => "orange" "test", "b" => "banana", "c" => "apple"),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
    );
	echo json_encode($temp);
?>