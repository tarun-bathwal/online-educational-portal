 <?php 

  include "dbconn.php";

  $sql = " SELECT maxim_word from maxims where maxim_word like \"%".$_GET['word']."%\"";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result=$stmt->fetchAll();

  if($result){
    foreach($result as $row){
      echo $row["maxim_word"];
      echo "<br><br>";
    }
  }
  else{
    echo "Sorry. Maxim not found. Please enter a valid maxim";
  }
                           
?>