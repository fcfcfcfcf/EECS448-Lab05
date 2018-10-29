<?php
    $checks = $_POST["checkbox"];
    $mysqli = new mysqli("mysql.eecs.ku.edu", "j538m138", "cooTee3o", "j538m138");
    /* check connection */
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    for($x = 0; $x < sizeof($checks); $x++){
      $mysqli->query("DELETE FROM Posts WHERE post_id =$checks[$x]");
      echo"Deleted post $checks[0] <br>";
    }

 ?>
