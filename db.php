<?php
$conn=new mysqli("localhost","root","","mydb");

if($conn)
{
	echo "successful";
}
else
{
	echo"fail";
}
?>