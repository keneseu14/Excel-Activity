<?php
    $mess = "";
    $msgClass = "";
    #check the submit button
    if(filter_has_var(INPUT_POST,'submit')){
        #get Form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message =$_POST['message'];
        if(!empty($email) && !empty($name) && !empty($message)){
          
            if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
                $mess = "Please use a valid email";
                $msgClass ="alert-danger";
            }else{
               $mess = "Your email has been sent";
               $msgClass ="alert-danger";
            }
        }else {
            $mess = "Please fill all fields";
            $msgClass ="alert-danger";
        }
    } 
?>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">My Website</a>
                </div>
            </div>
        </nav>
        <div class="container">
            <?php if($mess != ""):?>
                <div class="alert <?php echo $msgClass; ?>">
                    <?php echo $mess;?>
                </div>
            <?php endif;?>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" value="">
                </div>
                <div class="form-control">
                    <label>Message</label>
                    <textarea class="form-control" rows="10" cols="10" name="message"></textarea><br>
                    <button type="submit" name="submit" class="btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>