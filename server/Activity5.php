<?php 
    if(isset($_POST['submit'])){
        $fname = htmlentities($_POST['fname']);
        $lname = htmlentities($_POST['lname']);
        $bday = htmlentities($_POST['bday']);
        $address = htmlentities($_POST['address']);
        $contact = htmlentities($_POST['contact']);
        $email = htmlentities($_POST['email']);
    }
?>
<html>
    <head>
        <title> Learner's Profile </title>
        <Style>
            #learn {
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
            }

            #learn th {
            border: 1px solid black;
            padding: 15px;
            }
            #learn td {
            border: 1px solid black;
            padding: 10px;
            }
            
            #learn tr:hover {
                background-color: lightblue;
            }
            
            #learn th {
            text-align: left;
            background-color: black;
            color: white;
            } 
            .prof{
                text-align: center;
            }
        </Style>
    </head>
    <body>
        <form action="Activity5.php" method="POST">
            <h1>Learner's Profile</h1>
            <div>
                <label>Firstname:</label>
                <input type="text" name="fname" value="firstname
                "> <br>
            </div>
            <div>
                <label>Lastname:</label>
                <input type="text" name="lname"> <br>
            </div>
            <div>
                <label>Birthday :</label>
                <input type="date" name="bday"> <br>
            </div>
            <div>
                <label>Address :</label>
                <input type="text" name="address"> <br>
            </div>
            <div>
                <label>Contact #:</label>
                <input type="text" name="contact"> <br>
            </div>
            <div>
                <label>Email Address:</label>
                <input type="email" name="email"> <br>
            </div>
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Reset">
        </form>

        <h1 class="prof"> Profile Information</h1>
        <table id="learn">
            <tr>
                <th>Firstname</th>
                <th>Lastname</th> 
                <th>Birthday</th>
                <th>Address</th> 
                <th>Contact #</th>
                <th>Email Address</th> 
            </tr>
            <tr>
                <td><?php echo $fname;?></td>
                <td><?php echo $lname;?></td>
                <td><?php echo $bday;?></td>
                <td><?php echo $address;?></td>
                <td><?php echo $contact;?></td>
                <td><?php echo $email;?></td>
            </tr>
        </table>
        
    </body>
</html>