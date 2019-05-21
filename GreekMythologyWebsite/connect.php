<?php
  $name = filter_input(INPUT_POST, 'name');
  $reason = filter_input(INPUT_POST, 'reason');
  $description = filter_input(INPUT_POST, 'description');

  $host = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "gm-db";

  $conn = new mysqli($host, $dbuser, $dbpass, $dbname);

  if(mysqli_connect_error())
  {
    die('Connect Error('. mysqli_connect_errno() .') '. mysqli_connect_errno());
  }
  else
  {
    $sql = "INSERT INTO form (name, reason, description) values('$name', '$reason','$description')";
    if($conn->query($sql))
    {
      echo "New record is inserted.";
    }
    else
    {
      echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
  }

?>
