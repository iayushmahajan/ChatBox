<?php
//Connecting to MySQL
$con = mysqli_connect("localhost","root","Asm@1947","chatbox");

//Testing Connection
if(mysqli_connect_errno()){
	echo 'Failed to connect with MySQL: '.mysqli_connect_error();
}