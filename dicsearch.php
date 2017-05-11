<?php

	include "dbconn.php";
	header("Content-Type: application/json");
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------

	if(!isset($_GET['query'])){
		echo json_encode([]);
		exit();
	}


	$words = $conn->prepare("SELECT word FROM dictionary WHERE word LIKE :query");
	$words->execute([
			'query' => "{$_GET{'query'}}%"
		]);
	echo json_encode($words->fetchAll());

  
?>