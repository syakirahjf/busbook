<!-- HIDAYU 1912604 -->

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
<body>

    <h1 id>Thank You</h1>
    <p id>Here is the information you have submitted:</p>
   
<?php include "dateFunction.php" ?>

<div class= 'container3'>
    <center><table class= 'tablereceipt'>
    <p>
     <tr>
         <th id='title'>Subjects</th>
         <th id='title'>Details</th>
     </tr>
    </p>

     <tr>
        <td><strong>Name </strong></td>
        <td><?php echo $_POST["name"]?></td>
      </tr>
    <tr>
        <td><strong>Age </strong></td>
        <td><?php echo $_POST["age"]?></td>
    </tr>
    <tr>
        <td><strong>Phone Number </strong></td>
        <td><?php echo $_POST["phone"]?></td>
    </tr>
    <tr>
        <td><strong> Email </strong></td>
        <td><?php echo $_POST["email"]?></td>
    </tr>
    <tr>
        <td><strong>Departure Date </strong></td>
        <td>
            <?php if(isset($_SESSION['bdate'])) echo formatDate($_SESSION['bdate']); ?> 
        </td>
    </tr>
    <tr>
        <td><strong>Departure Time </strong></td>
        <td>        
            <?php if(isset($_SESSION['btime'])) echo $_SESSION['btime']; ?> 
        </td>
    </tr>
    <tr>
        <td><strong> Seat Number </strong></td>
        <td>
            <?php if(isset($_SESSION['seatNum'])) echo $_SESSION['seatNum']; ?>
        </td>
    </tr>
    <tr>
        <td><strong> Seat Description </strong></td>
        <td>
            <?php if(isset($_SESSION['description'])) echo $_SESSION['description']; ?> 
        </td>
    </tr>
    <tr>
        <td><strong>Ticket Price</strong></td>
        <td>
            RM<?php if(isset($_SESSION['price'])) echo $_SESSION['price'];?> 
        </td>
    </tr>
</table>
    <br>

      <!-- button to payment page  -->
      <form action="payment.php" method= "post">
        <input id="btn1" type="submit" value="Pay Now">
        <button onclick="window.print()">Print</button>
     </form> </center>
</div>  

</body>
<footer id="footer">Group 2  INFO 3305 Case Study</footer>
</html>
