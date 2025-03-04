<?php
if(isset($_POST['fsubmit']))
{
    //fetching data from the html form
    $name=$_POST["fname"];
    $email=$_POST["femail"];
    $msg=$_POST["fmsg"];

    //database details
    $host="localhost";
    $username="form_user";
    $dbname="contact_data";
    $password="xyz123";

    //create connection
    $con=mysqli_connect($host,$username,$password,$dbname,'3307');

    //check connection whether it is working or not
    if(!$con)
    {
        die("connection failed-".mysqli_connect_error());
    }

    // inserting data from the html form
    $sql = "insert into user_entries(id,Name_fd,Email_fd,Message_fd) values (' ','$name','$email','$msg')";

    //save and check whether data is stored properly into database or not
    $save = mysqli_query($con,$sql);
    if($save)
    {
        /*echo "Thank you for sending us message. Visit again.";*/
       
    }
    else{
        echo "Error occured during sending the data.";
    }

    //close the connection
    mysqli_close($con);
}

?>

<?php

header("Location: index.php", true, 301);

exit();

?>
