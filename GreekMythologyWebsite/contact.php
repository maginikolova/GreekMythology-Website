<?php include 'header.php'; ?>

<p><font color="#AFEEEE">
	<table border="0" color = "#d38900" align = "center"><tr><td>
	<h2 align = "center"><a name="form"><font color="#d38900">If you need to contact us, please fill in the form</a></h2></font></td></tr>
<tr><td><form name = "contact" action = "connect.php" method = "post"><p align="left">
Name: <input type="text" name="name"><p>
Reason for writing: <input type="text" name="reason"><p>
Please, give more information below:
<br><textarea name="description" rows="4" cols="60"></textarea>
<br><br><input type="reset" name="clear" value="Clear"> <input type="submit" name="sub" value="Send">
</form></p>
</font></td></tr></table>

<?php include 'footer.php'; ?>
