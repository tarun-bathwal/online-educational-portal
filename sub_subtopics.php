<?php

	include"dbconn.php";
	
    $sql = " SELECT subtopic_name from subtopics WHERE topic_id = ( SELECT topic_id from topics where topic_name LIKE \"".$_GET['topic']."\")";
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->fetchAll();
    if($result){
      foreach($result as $row){
        echo "<option>".$row["subtopic_name"]."</option>";
      }
    }
                        

?>