<?php

$user = "root"; //Enter the user name
$password = ""; //Enter the password
$host = "localhost"; //Enter the host
$dbase = "covid_res"; //Enter the database


$connection= mysqli_connect ($host, $user, $password,$dbase);
if ($connection)
{
    // echo "connection sucess ";
}
else{
    echo " Connection Failed".mysqli_connect_error();
}

?>
