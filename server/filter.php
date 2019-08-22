<?php 
    #Check for Posted data

    // if(filter_has_var(INPUT_POST,'data')){
    //     echo "Data Found!";
    // } else {
    //     echo "NO Data!";
    // }
    // $email = $_POST['data'];
    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // if (filter_has_var(INPUT_POST, 'data')) {
    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)===false){
    //          echo 'Email is valid!';
    //     }
    // } else {
    //     echo "Email is not valid!";
    // }

    // $var = 23;
    // if(filter_var($var, FILTER_VALIDATE_INT)){
    //     echo $var." is a number";
    // } else {
    //     echo $var. " is NOT a number!";
    // }

    // $var = "qweqweqweqweqweqweqweqweqwe834371bsb";
    // echo filter_var($var, FILTER_SANITIZE_NUMBER_INT);

    // $var1 = "<script>alert(1)</script>11111";
    // var_dump (filter_var($var1, FILTER_SANITIZE_SPECIAL_CHARS));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Webpage</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="data"><br>
    <button type="submit">Submit</button>
    </form>
</body>
</html>