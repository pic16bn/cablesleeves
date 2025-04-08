<?php
	include('database.php');

	$CID = $_GET['cid'];

	$query1 = dbConn()->prepare('DELETE FROM order_table WHERE Customer_ID = :cid; ' );
	$query1->bindParam(":cid", $CID);
	$query1->execute();

	header('location: admin.php');
?>