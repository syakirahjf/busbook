<!-- AMIRUL 1914119 -->

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
<?php
  include "minMaxDate.php";
  if(isset($_POST['submit'])){
    $btime=$_POST["btime"];
    $bdate=$_POST["bdate"];
    }
?>

<h1 style="color:white; padding-top:50px;">BUS SEAT RESERVATION SYSTEM</h1>
<h2 style="color:white;">FROM KUALA LUMPUR TO TERENGGANU</h2>
<div class="container" style="background-color: white; padding: 50px; color:black;">		
            <div class="leftbox">
                <img class="img_seating" src="image\seating.png" alt="seating">
            </div> 
			
            <div class="rightbox">
                <br>
                <form action="bookFunction.php" method="post">
				<h4 style="float:left; color:#FF904A">SELECT DATE AND TIME</h4>
				<br/><br/><br/>
				<label for="Date" style="float: left;">Departure Date: </label>

                <input class="box" type="date" id="bdate" name="bdate" min="<?php echo minDate();?>" max="<?php echo maxDate();?>" required>                    
				<br>

				<label for="Time" style="float: left;">Departure Time:</label>
					<select class="box" name="btime" id="btime" required>
					<option value="7.30AM">7.30AM</option>
					<option value="8.30AM">8.30AM</option>
                     <option value="9.39AM">9.30AM</option>
					<option value="10.30AM">10.30AM</option>
          				<option value="11.30AM">11.30AM</option>
          				<option value="12.30PM">12.30PM</option>
          				<option value="1.30PM">1.30PM</option>
          				<option value="2.30PM">2.30PM</option>
          				<option value="3.30PM">3.30PM</option>
          				<option value="4.30PM">4.30PM</option>
          				<option value="5.30PM">5.30PM</option>
          				<option value="6.30PM">6.30PM</option>
          				<option value="7.30PM">7.30PM</option>
          				<option value="8.30PM">8.30PM</option>
          				<option value="9.30PM">9.30PM</option>
          				<option value="10.30PM">10.30PM</option>
        				</select>
					
				<br/>
				<h4 style="float:left; color:#FF904A">SELECT SEAT</h4>
				<br><br><br>
                <label for="seat" style="float: left;">Number:</label>
                    <select class="box" name="seatNum" id="seatNum" style="width: 150px; text-align: center;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    <br>
                    <label for="seat" style="float: left;">Seat type:</label>
                        <select class="box" name="seatType" id="seatType">
                        <option value="A">A-Single seat</option>
                        <option value="B">B-Double aisle seat</option>
                        <option value="C">C-Double window seat</option>              
                        </select>
                    <br><br>
                    <input id="bookbtn" type="submit" name="book" value="Check" style="background-color:#FF904A; color:white;">
                </form>
            </div>  
    </div>
<br><br>
</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>
