<!-- AMIRUL 1914119 -->

<!-- session start to store and pass infos to be used across multiple pages -->
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
<body style="background-color: #C53A81;">
<h1 style="color:white; padding-top:50px;">BUS SEAT RESERVATION SYSTEM</h1>
<h2 style="color:white;">FROM KUALA LUMPUR TO TERENGGANU</h2>
    <?php

        include "seatBookingClass.php";
		$seatRow = $_POST["seatNum"];
        $seatType = $_POST["seatType"];

        $book1 = new seatBooking($seatRow, $seatType);
        $book1->setDescription($seatType);
        $book1->setPrice($seatType);
	
	//PHP $_SESSION is an associative array that contains all session variables
   	//$_SESSION['variable'] is used to store info 
        $_SESSION['bdate']=$_POST['bdate'];
        $_SESSION['btime']=$_POST['btime'];
        $_SESSION['seatNum']=$book1->getseatNum();
        $_SESSION['description']=$book1->getDescription();
        $_SESSION['price']=$book1->getPrice();
	
        $date = $_POST['bdate'];
	//to call function formatDate()
        include "dateFunction.php";
        
    ?>

    <div class="container" style="background-color: white; padding: 50px; color:black;">	
            <div class="leftbox">
                <img class="img_seating" src="image\seating.png" alt="seating">
            </div> 
		<div class="rightbox">
		<p style="font-weight:bold; color:#FF904A;">RESERVATION DETAILS</p>
		<!-- SYAKIRAH 1818436 START -->
		<label for="bdate">Departure Date: <?php echo formatDate($date);?></label>
        <br>
		<label for="btime">Departure Time: <?php echo $_POST["btime"]?></label>
        <br>	<!-- SYAKIRAH 1818436 END -->
		<label for="seatNum">Seat Number: <?php echo $book1->getSeatNum();?></label>
        <br>
        <label for="description">Seat Description: <?php echo $book1->getDescription();?></label>
        <br>
        <label for="price">Ticket price: RM<?php echo $book1->getPrice();?></label>
        <br>

        <!--NAJMI 1823617 & SYAKIRAH 1818436 Start-->
         <?php
		 $db = fopen("db.txt","a");
		 $seatnumber = $book1->getSeatNum();	 
		 $database = [];
		 echo "<pre>"; // Enables display of line feeds
		 $database = file_get_contents("db.txt");
		 echo "</pre>"; // Terminates pre tag
		 fclose($db);
		 if (str_contains($database, $seatnumber)) { 
			echo '<p style="margin-top: -18px; color: red;">Status: Seat is already booked</p>';
			echo'<form action="index.php">
                    <input id="btn" type="submit" value="Back" style="background-color:#FF904A; color:white;">
                </form>';
		}
		else{
			echo '<p style="margin-top: -18px; color: green;">Status: Seat is available</p>';
			echo '<form action="contact-form.php">
						<input id="btn" type="submit" value="Proceed" style="background-color:#FF904A; color:white;">
				</form>';
			echo'<form action="index.php">
                    <input id="btn" type="submit" value="Back" style="background-color:white; color:#FF904A;">
                </form>';
		}		
        ?> 
		<!--NAJMI 1823617 & SYAKIRAH 1818436 End-->
		</div>
	</div>

</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>
