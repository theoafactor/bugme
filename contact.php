<?php
    include("./database/db.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Us Page Design using Html CSS</title>
    
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <section id="section-wrapper">
            
        <div class="form-wrap">
            <form action="contact.php" method="POST">
                <h1 class="form-title">Send us a message</h1>
                <div class="form-fields">
                    <div class="form-group">
                        <input type="text" class="fname" placeholder="First Name" name="First_name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="lname" placeholder="Last Name" name="Last_name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="email" placeholder="Mail" name="Email">
                    </div>
                    <div class="form-group">
                        <input type="number" class="phone" placeholder="Phone" name="Phone_number">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" placeholder="Write your message"></textarea>
                    </div>
                </div>
                <input type="submit" value="Send Message" name="submit" class="submit-button">
            </form>
        </div>
    </section>
</body>
</html>


<?php

    if(isset($_POST['submit'])){
    require './database/db.php';
    $getfirst=$_POST['First_name'];
    $getlast=$_POST['Last_name'];
    $getemail=$_POST['Email'];
    $getphone=$_POST['Phone_number'];
    $gettext=$_POST['message'];

    

    $sql="INSERT INTO `user_message` (`first_name`, `last_name`, `email`, `phone_number`, `message`) VALUES ('$getfirst', '$getlast', '$getemail', '$getphone', '$gettext')";
    
    try{
        $sqlres=mysqli_query($__conn, $sql);
        echo "message is sent";
    }
    catch(mysqli_sql_exception){
        echo 'Could Not register user';
    }
    }


    mysqli_close($__conn);
?>