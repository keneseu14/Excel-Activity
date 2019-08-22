<?php

    if(isset($_POST['submit'])){
        session_start();
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        header('Location: sessionP2.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Sessions</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                <div class="form-group">
                    <label>Name </label>
                    <input type="text" class="form-control" name="name" value="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" rows="5" cols="5" name="message"></textarea><br>
                    <button type="submit" name="submit" class="btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>