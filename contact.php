<?php
    include("./database/db.php");
    include("./processes/contact_processes.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Page</title>
    <link rel="stylesheet" href="./css-container/contact.css">
</head>
<body>
    <div class="container">
        <div class="row">
                <h1>contact us</h1>
        </div>
        <div class="row">
                <h4 style="text-align:center">We'd love to hear from you!</h4>
        </div>

<?php
    
    // if the user submitted the form
    if(isset($_POST['submit'])){
    require './database/db.php';
    //getting the input
    $getfirst=$_POST['first_name'];
    $getlast=$_POST['last_name'];
    $getemail=$_POST['email'];
    $getphone=$_POST['phone_number'];
    $gettext=$_POST['message'];
    
    require('./processes/contact_processes.php');
    }
    mysqli_close($__conn); 
?>

        <form action="" method="post">
            <div class="row input-container">
                <div class="col-xs-12">
                    <div class="col-md-6 col-sm-12">
                        <div class="styled-input">
                            <input type="text" required name="first_name"/>
                            <label>First Name</label> 
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="styled-input" style="float:right;">
                            <input type="text" required name="last_name"/>
                            <label>Last name </label> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input">
                        <input type="text" required name="email"/>
                        <label>Email</label> 
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="styled-input" style="float:right;">
                        <input type="text" required name="phone_number"/>
                        <label>Phone Number</label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea required name="message"></textarea>
                        <label>Message</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <input type="submit" value="Send Message" class="btn-lrg submit-btn" name="submit">
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>            


<?php ob_flush(); ?>