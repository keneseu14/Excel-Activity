<?php include 'serverArray.php'; ?>
<html>
    <head>
        <title>System Information</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <!---Test Server -->
            <h1>Server and File Information</h1>
            <?php if($server): ?>
                <ul class="list-group">
                    <?php foreach($server as $key => $val): ?>
                        <li class="list-group-item">
                            <strong><?php echo $key; ?>: </strong>
                            <?php echo $val; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            
            <!-- FOR CLIENT -->
            <h1>Client and FIle Informantion</h1>
            <?php if ($client): ?>
                <ul class="list-group">
                    <?php foreach($client as $user => $valUser): ?>
                        <li class="list-group-item">
                            <strong><?php echo $user; ?>: </strong>
                            <?php echo $valUser; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>


        </div>
    </body>
</html>