<?php
  $user = $_POST["username"];
  $newPost = $_POST["newPost"];

  $mysqli = new mysqli("mysql.eecs.ku.edu", "j538m138", "cooTee3o", "j538m138");
  echo"hello, <br>";
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  else{
    $checkExists = $mysqli->query("SELECT * FROM Users WHERE user_id = '".$user."'");
    if($checkExists->num_rows > 0){
      if($newPost != ""){
        echo"post created!<br>";
        $query = $mysqli->query("INSERT INTO Posts (content, author_id) VALUES ('".$newPost."', '".$user."')");
        //$query = $mysqli->query("INSERT INTO Posts (post_id, content, author_id) VALUES ('".$newPost"','".$user."')");
      }
      else{
        echo"please do not submit an empty post<br>";
      }
    }
    else{
      echo"that user does not exist!<br>";
    }
  }
  $mysqli->close();











?>
