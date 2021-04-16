<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>
</head>
<body style="  background-image: url('img/das.jpg'); height: 505px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: scroll">

    <?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

    <?php else: ?>

    <?php endif ?>

    <?php echo "<h1> Welcome ".$_SESSION['username']." To Dashboard !!</h1>" ?>
    <div class="">
    <form class="tbut" action="contact.php" method="get">
    <div style="float: left; width: 130px"><button type="submit" class=" button btn-teal btn rounded-pill px-4 ml-lg-4" >Book-now</button></div>
    </form>
    <form class="dbut" action="logout.php" method="get">
    <div style="float: left; width: 130px"><button type="submit" class=" button btn-teal btn rounded-pill px-4 ml-lg-4" >log-out</button></div>
    </form>
      </div>
</body>
</html>
