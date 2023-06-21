<?php

// Make a MySQL Connection

$conn= mysqli_connect("localhost", "root", "", "project");

//$database= mysqli_select_db($conn,"project");

if (!$conn) {

 die("Connection failed: " . mysqli_connect_error()); }



$sql= mysqli_query($conn,"INSERT INTO customer (firstname,lastname,country,age,email,phonenumber,textarea) VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[country]','$_POST[age]','$_POST[email]','$_POST[phonenumber]','$_POST[textarea]')");



//$sql =mysqli_query($conn,$query);



if($sql){

echo "New record created sccessfully ";

}

else {

echo "Error: ", "<br>" . mysqli_error($sql);

}

?>