<!-- HIDAYU 1912604 -->

<!--this is session to access the session info in bookFunction.php -->
 <?php session_start(); ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BusBook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #C53A81; padding-bottom: 100px;">
<h1 style="color:white; padding-top:50px;">BUS SEAT RESERVATION SYSTEM</h1>
<h2 style="color:white;">FROM KUALA LUMPUR TO TERENGGANU</h2>

<!-- to call function formatDate() -->
<?php 
	include "dateFunction.php";
	$_SESSION['name']=$_POST['name'];
?>

<div class="container" style="background-color: white; color:black;">	
	<h2 style="color:#FF904A;">Thank You</h2>
    <p>Here is the information you have submitted</p>
    <center>
	<table>
    <p>
     <tr>
         <th id='title' style="background-color: white; color:#FF904A; border: 1px solid white; border-bottom: 1px solid black;">Subjects</th>
         <th id='title' style="background-color: white; color:#FF904A; border: 1px solid white; border-bottom: 1px solid black;">Details</th>
     </tr>
    </p>
	
	<!-- Data for Name, Age, Phone number and email are received from contact-form.php
        code: rand() function is used to generate 4 random integers for the Ticket ID -->
		
	<tr>
        <td style="background-color: white;">Ticket Id</td>
        <td style="background-color: white;"><?php echo (rand(1000,1500));?></td>
      </tr>
     <tr>
        <td style="background-color: white;">Name</td>
        <td style="background-color: white;"><?php echo $_POST["name"]?></td>
      </tr>
    <tr>
        <td style="background-color: white;">Age</td>
        <td style="background-color: white;"><?php echo $_POST["age"]?></td>
    </tr>
    <tr>
        <td style="background-color: white;">Phone Number</td>
        <td style="background-color: white;"><?php echo $_POST["phone"]?></td>
    </tr>
    <tr>
        <td style="background-color: white;">Email</td>
        <td style="background-color: white;"><?php echo $_POST["email"]?></td>
    </tr>
		
	<!-- The data for date, time, seat number, description and ticket price are received from 
         session variables that has been stored in the bookFunction.php 
         code: echo $_SESSION['variable'] is used to get the stored info
               isset() function is used to check whether the variable has been declared and is not NULL-->
   
    <tr>
        <td style="background-color: white;">Departure Date</td>
        <td style="background-color: white;">
            <?php if(isset($_SESSION['bdate'])) echo formatDate($_SESSION['bdate']); ?> 
        </td>
    </tr>
    <tr>
        <td style="background-color: white;">Departure Time</td>
        <td style="background-color: white;">        
            <?php if(isset($_SESSION['btime'])) echo $_SESSION['btime']; ?> 
        </td>
    </tr>
    <tr>
        <td style="background-color: white;">Seat Number</td>
        <td style="background-color: white;">
            <?php if(isset($_SESSION['seatNum'])) echo $_SESSION['seatNum']; ?>
        </td>
    </tr>
    <tr>
        <td style="background-color: white;">Seat Description</td>
        <td style="background-color: white;">
            <?php if(isset($_SESSION['description'])) echo $_SESSION['description']; ?> 
        </td>
    </tr>
    <tr>
        <td style="background-color: white;">Ticket Price</td>
        <td style="background-color: white;">
            RM<?php if(isset($_SESSION['price'])) echo $_SESSION['price'];?> 
        </td>
    </tr>
</table>
    <br>

      <!-- button to payment page  -->
      <form action="payment.php" method= "post">
        <input id="btn1" type="submit" value="Pay Now" style="background-color:#FF904A; color:white;">
          <!-- SYAKIRAH 1818436 START-->
        <button id="btn1" onclick="window.print()" style="background-color:#FF904A; color:white;">Print</button>
          <!-- SYAKIRAH 1818436 END-->
     </form> </center>
</div>  

</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>
