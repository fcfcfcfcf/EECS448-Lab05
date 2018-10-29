<?php
  $user = $_POST["newUser"];


  $mysqli = new mysqli("mysql.eecs.ku.edu", "j538m138", "cooTee3o", "j538m138");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  else{
    if($user != ""){
      $checkDup = $mysqli->query("SELECT * FROM Users WHERE user_id = '".$user."'");

      if($checkDup->num_rows == 0){
        echo"inserted $user";
        $query = $mysqli->query("INSERT INTO Users (user_id) VALUES ('".$user."')");
      }
      else{
        echo"a user with that name already exists! <br> ";
      }
      $checkDup->free();
    }
    else{
      echo"please enter something in the text field <br>";
    }
  }

  $mysquli->close();
?>
