<!-- AMIRUL 1914119 -->

<!-- session start to store infos to be used across multiple pages -->
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

        // NAJMI 1823617 START
        $seatingStatus = array("1A" => 1,"1B" => 0,"1C" => 1,
                      "2A" => 0,"2B" => 0,"2C" => 1, 
                      "3A" => 1,"3B" => 1,"3C" => 1,
                      "4A" => 0,"4B" => 1,"4C" => 0,
                      "5A" => 0,"5B" => 1,"5C" => 1,
                      "6A" => 0,"6B" => 1,"6C" => 0,
                      "7A" => 0,"7B" => 0,"7C" => 1,
                      "8A" => 0,"8B" => 1,"8C" => 1,
                      "9A" => 1,"9B" => 1,"9C" => 1,
                      "10A" => 1,"10B" => 1,"10C" => 1);// 1=booked, 0=available
        //NAJMI 1823617 END

        $book1 = new seatBooking($seatRow, $seatType);
        $book1->setDescription($seatType);
        $book1->setPrice($seatType);
	
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

        <!--NAJMI 1823617 Start-->
        Status:
         <?php
         if( $seatingStatus[$book1->getSeatNum()] == 1)
         {
              echo "Seat is already booked";
         }
         else
         {
              echo "Seat is available";
         }
        ?> 
        <br><br>

        <?php
         if( $seatingStatus[$book1->getSeatNum()] == 1)
         {
              echo'<form action="index.php">
                    <input id="btn" type="submit" value="Back" style="background-color:#FF904A; color:white;">
                    </form>';    
         }
         else
         {
            echo'<form action="contact-form.php">
					<input id="btn" type="submit" value="Proceed" style="background-color:#FF904A; color:white;">
                </form>
				<form action="index.php">
                    <input id="btn" type="submit" value="Back" style="background-color:white; color:#FF904A;">
                </form>';
         }
        
        ?>
        <br>
        <!--NAJMI 1823617 End-->
		</div>
	</div>

</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>
