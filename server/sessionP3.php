<?php
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Session page 3</title>
</head>
<body>
    <h1> Hello <?php echo $name; ?> </h1>
    
</body>
</html>