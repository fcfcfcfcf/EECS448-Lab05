<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "j538m138", "cooTee3o", "j538m138");
  echo"hello, <br>";
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }


  $result = $mysqli->query("SELECT * FROM Users");
  if ($result->num_rows > 0) {
    echo '<table border = "1" style= "width:50%">';
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["user_id"]."</td></tr>";
    }
    echo '</table>';

  }
    echo"<br>";

    $mysqli->close();

?>
