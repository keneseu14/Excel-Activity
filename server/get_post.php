<?php 

    if(isset($_GET['name'])){
        $name = htmlentities($_GET['name']);
    }
?>
<html>
    <head>
        <title> My Website</title>
    </head>
    <body>
        <form action="get_post.php" method="GET">
            <div>
                <label>Name:</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label>Email:</label><br>
                <input type="text" name="email">
            </div>
            <input type="submit" value="Submit">
        </form>
        <h1 style="color: red"><?php echo "$name's Profile"; ?> </h1>
    </body>
</html>