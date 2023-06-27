<?php

if(!$getfirst && !$getlast && !$getemail && !$getphone && !$gettext){
    echo "Details required";
}
else {
    if($sql="INSERT INTO `User_Message` (`first_name`, `last_name`, `email`, `phone_number`, `message`) VALUES ('$getfirst', '$getlast', '$getemail', '$getphone', '$gettext')"){
    header("Location: thanks.php");
    $sqlres=mysqli_query($__conn, $sql);
}else{
    echo 'Could Not register user';
}
}

?>