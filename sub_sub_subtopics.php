<?php

	include"dbconn.php";
	
    $sql = " SELECT subsubtopic_name from subsubtopics WHERE subtopic_id = ( SELECT subtopic_id from subtopics where subtopic_name LIKE \"".$_GET['subtopic']."\")";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result= $stmt->fetchAll();
    if($result){
      foreach($result as $row){
        echo "<option>".$row["subsubtopic_name"]."</option>";
      }
    }
                        

?>