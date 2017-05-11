 <?php 

  include "dbconn.php";

  $sql = " SELECT word_desc from dictionary where word like \"".$_GET['word']."\"";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->fetchAll();
  if($result){
   
    echo $result[0]["word_desc"];
    
  }
  else{
    echo "Sorry. Word not found. Please enter a valid word";
  }
                           
?>