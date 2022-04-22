<!-- YUHANA 1812590 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusBook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #C53A81;">
<h1 style="color:white; padding-top:50px;">BUS SEAT RESERVATION SYSTEM</h1>
<h2 style="color:white;">FROM KUALA LUMPUR TO TERENGGANU</h2>

<!-- hold data name, age, email and phone after user entered button submit-->	
<?php
  if(isset($_POST['submit'])){
    $name=$_POST["name"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
  }
?>
    <!-- passenger contact form -->
    <div class="container" style="background-color: white; padding: 50px; color:black;">
    <form action="process-form.php" method="post">
		<h4 style="font-weight:bold; color:#FF904A;">PERSONAL DETAILS</h4>
        <center><table>
		<p>
		<tr>
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><label style=" padding-left: 104px;float: left;" for="inputName" style="text-align:left;">Name:</label></td>
	    <!-- passenger name -->
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><input type="text" name="name" id="name" required></td>
		</tr>
        </p>
		
		<p>
		<tr>
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><label style=" padding-left: 104px;float: left;" for="AgeName"> Age: </label></td>
	    <!-- passenger age -->
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><input type="number" name="age" id="age" size="2" maxlength="2" required></td>
		</tr>
        </p>
		
        <p>
		<tr>
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><label style=" padding-left: 104px;float: left;" style=" padding-left: 104px;float: left;"for="inputEmail">Email:</label></td>
	    <!-- passenger email -->
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><input type="email" name="email" id="email" required></td>
		</tr>
        </p>
		
		<p>
		<tr>
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><label style=" padding-left: 104px;float: left;" for="phone">Phone Number:</label></td>
	    <!-- passenger phone number -->
            <td style="padding: 10px; background-color: white; border: 1px solid white;"><input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{7}" id="inputPhone" placeholder= " 012-XXXXXXX" maxlength = "12" required></td>
        </tr>
		</p>
		</table><br>
        <!-- Submit button -->
        <input id="btn" type="submit" value="Submit" style="background-color:#FF904A; color:white;">
	<!-- Reset button-->
        <input id="btn" type="reset" value="Reset" style="background-color:#FF904A; color:white;"></center>
    </form>
	<br/>
    <!-- Cancel button will go index.php -->
    <form action="index.php" method= "post">
         <input id="btn" type="submit" value="Cancel" style="background-color:white; color:#FF904A;">
    </form>
</div>

</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>

