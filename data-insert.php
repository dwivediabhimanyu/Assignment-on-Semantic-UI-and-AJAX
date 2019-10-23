<?php
    $db_username ='akash';
    $db_password ='akash';
    $con = mysqli_connect('localhost', $db_username, $db_password);
    if(!$con) {
        die('Not Connected To Server');
    }
    if(!mysqli_select_db($con, 'form_data')) {
        echo 'Database Not Selected';
    }
    $email = $_POST['email'];
    $query = mysqli_query($con,"INSERT INTO form (email) VALUES ('$email')");

    if(!mysqli_query($con, $sql)) {
        echo 'Could not insert';
    }
    mysqli_close($con);
 ?>
