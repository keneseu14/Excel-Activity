<?php 

    if(isset($_POST['name'])){
        $name = htmlentities($_POST['name']);
        echo $name;
    }

?>
<html>
    <head>
        <title> My Website</title>
    </head>
    <body>
        <form action="get_post.php" method="POST">
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
    </body>
</html>