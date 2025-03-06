<!DOCTYPE html>
<html>
<body>

<h2>Registration Page</h2>


<form action="submit.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fullname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lastname" value="Doe"><br><br>
  Select hobby:
  <input type="checkbox" id="reading" name="reading" value="reading"> Reading
  <input type="checkbox" id="surfing" name="surfing" value="surfing"> Surfing
  <br>Select gender
  <input type="radio" id="gender1" name="gender" value="male">Male
  <input type="radio" id="gender2" name="gender" value="female">Female
  <input type="submit" value="Submit">
</form>

</body>
</html>

