<?php include 'header.php'; ?>

<p><font color="#AFEEEE">
	<h1><a name="form"><font color="#d38900">Comments from previous visitors:</a></h1></font></td></tr>
<font color="#6c7899"><h4>
<?php
  $conn2 = new mysqli("localhost", "root", "", "gm-db");
  $sqlExp = "SELECT name, reason, description from form";
  $result = $conn2-> query($sqlExp);
  if ($result->num_rows > 0)
  {
    while ($row = $result->fetch_assoc())
    {
      echo $row["name"] ."<br>". $row["description"] ."<p>";
    }
  }
?>
</font></h4>
<?php include 'footer.php'; ?>
