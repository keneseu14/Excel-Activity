<?php 
    $message = "Welcome";
    session_start();
    $name = $_SESSION['user'];
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
    $email = $_SESSION['email'];

    //echo "<script type='text/javascript'>alert('$message $name');</script>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<body>
        <nav>
            <div class="logo">
                <h4>Welcome <?php echo $name; ?></h4>
            </div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href='logout.php'>Log out</a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>


        <h3>Your Information:</h3>
        <h5>Firstname: <?php echo $fname; ?> </h5>
        <h5>Lastname: <?php echo $lname; ?></h5>
        <h5>Email: <?php echo $email; ?></h5>
        <script src="app.js"></script>
    </body>
</html>