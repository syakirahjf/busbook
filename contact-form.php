<!-- SYAKIRAH 1818436
YUHANA 1812590 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusBook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php

  if(isset($_POST['submit'])){
    $name=$_POST["inputName"];
    $age=$_POST["inputAge"];
	$email=$_POST["inputEmail"];
	$phone=$_POST["phone"];
  }
?>

    <h1 id>Personal Details</h2>
    <fieldset id="personalInfo">
	<legend>Passenger Information</legend>
    <div class="container2">
    <form action="process-form.php" method="post">
        <center><table>
		<p>
		<tr>
            <td><label for="inputName">Name:</label></td>
			<!-- <td>:</td> -->
            <td><input type="text" name="name" id="inputName" required></td>
		</tr>
        </p>
		
		<p>
		<tr>
            <td><label for="AgeName"> Age: </label></td>
			<!-- <td>:</td> -->
            <td><input type="number" name="age" id="inputAge" size="2" maxlength="2" required></td>
		</tr>
        </p>
		
        <p>
		<tr>
            <td><label for="inputEmail">Email:</label></td>
			<!-- <td>:</td> -->
            <td><input type="email" name="email" id="inputEmail" required></td>
		</tr>
        </p>
		
		<p>
		<tr>
            <td><label for="phone">Phone Number:</label></td>
			<!-- <td>:</td> -->
            <td><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7}" id="inputPhone" placeholder= "012-XXXXXXX" maxlength = "12" required></td>
        </tr>
		</p>
		</table><br>
       
        <input type="submit" value="Submit">
        <input type="reset" value="Reset"></center>
    </form>

    <form action="index.php" method= "post">
         <input type="submit" value="Cancel">
    </form>

	</fieldset>
</div>

</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>

