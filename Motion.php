<html>
<head>
<link rel="stylesheet" href="StylePage.css">
<body>
<div class="container">
<br><br><br>
<h1> Robot Motion Control</h1>
<br><br>
<table style="width:100%">
  <tr>
    <th></th>
    <th><input class="button" type="submit" name="forward" value="Forward" ></th>
    <th></th>
  </tr>
  <tr>
    <th><input class="button" type="submit" name="left" value="Left" ></th>
    <th><input class="button" type="submit" name="stop" value="Stop" ></th>
    <th><input class="button" type="submit" name="right" value="Right" ></th>
  </tr>
  <tr>
  <th></th>
   <th><input class="button" type="submit" name="backward" value="Backward" ></th>
    <th></th>
  </tr>
  
</table>
<br><br>
<?php
$query3="CREATE TABLE movement(
id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
backwardBTN VARCHAR(255),
forwardBTN  VARCHAR(255),
leftBTN     VARCHAR(255),
rightBTN    VARCHAR(255),
stopBTN     VARCHAR(255))";

if (isset($_POST['stop'])) {
$sql3 = "INSERT INTO movement(stopBTN) VALUES ('".$_POST['stop']."')";	
	if (mysqli_query($mysqli, $sql3)) {
			echo "توقف التحرك";
		} else {echo "<br>" . mysqli_error($mysqli);}
}
if (isset($_POST['left'])) {

$sql4 = "INSERT INTO movement (leftBTN) VALUES ('".$_POST['left']."')";
		
	if (mysqli_query($mysqli, $sql4)) {
			echo "تم الذهاب لليسار";
		} else {echo "<br>" . mysqli_error($mysqli);}
}

if (isset($_POST['right'])) {
$sql5 = "INSERT INTO movement (rightBTN) VALUES ('".$_POST['right']."')";
	if (mysqli_query($mysqli, $sql5)) {
			echo "تم الذهاب لليمين";
		} else {echo "<br>" . mysqli_error($mysqli);}
}

if (isset($_POST['backward'])) {
$sql6 = "INSERT INTO movement (backwardBTN) VALUES ('backward')";
	if (mysqli_query($mysqli, $sql6)) {
		 echo "تم الرجوع للخلف";
		} else {echo "<br>" . mysqli_error($mysqli);}
}	
if (isset($_POST['forward'])) {
$sql7 = "INSERT INTO movement (forwardBTN) VALUES ('forward')";
	if (mysqli_query($mysqli, $sql7)) {
		 echo "تم التقدم للأمام";
		} else {echo "<br>" . mysqli_error($mysqli);}
}
?>
</div>

</body>
</html>
