<?php

ob_start(); //Turns on output buffering

$timezone = date_default_timezone_set("Africa/Lagos");

$con = mysqli_connect("localhost", "root", "", "ecommerce"); //Establish Connection

//Check for errors
if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>