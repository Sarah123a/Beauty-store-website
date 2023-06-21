<?php

// Make a MySQL Connection

$conn= mysqli_connect("localhost", "root", "", "project");

//$database= mysqli_select_db($conn,"project");

if (!$conn) {

 die("Connection failed: " . mysqli_connect_error()); }



$sql= mysqli_query($conn,"INSERT INTO products (name,price,code_number,country,p_expiration) VALUES ('$_POST[name]','$_POST[price]','$_POST[code]','$_POST[country]','$_POST[exp]')");



//$sql =mysqli_query($conn,$query);



if($sql){

echo "New record created sccessfully ";

}

else {

echo "Error: ", "<br>" . mysqli_error($sql);

}

?>