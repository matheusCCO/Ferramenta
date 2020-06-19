<?php
function mostraCodigo($a){
echo $a;
}


?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="teste1.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" "><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>
