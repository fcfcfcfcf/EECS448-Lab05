<?php

  $targetUser = $_POST["targetUser"];
  $mysqli = new mysqli("mysql.eecs.ku.edu", "j538m138", "cooTee3o", "j538m138");
  echo"hello, <br>";
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }


  $result = $mysqli->query("SELECT * FROM Posts WHERE author_id ='".$targetUser."'");
  if ($result->num_rows > 0) {
    echo '<table border = "1" style= "width:100%">';
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["content"]."</td><td>".$row["author_id"]."</td></tr>";
    }
    echo '</table>';

  }
    echo"<br>";

    $mysqli->close();

?>
