<?php
session_start();

$msg="";
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="cc"; // Database name 
$tbl_name="admin"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$admin_name=$_POST['admin_name']; 
$admin_pass=$_POST['admin_pass']; 


$admin_name = stripslashes($admin_name);
$admin_pass = stripslashes($admin_pass);
$admin_name = mysql_real_escape_string($admin_name);
$admin_pass = mysql_real_escape_string($admin_pass);
$sql="SELECT * FROM admin WHERE admin_name='$admin_name' and admin_pass='$admin_pass'";
$result=mysql_query($sql);


$count=mysql_num_rows($result);


if($count==1)
{
	$_SESSION['khalid']=$_POST["admin_name"];
	header("location:adminpanel.php");
}
else
{	
	$_SESSION['session_msg']  = "Invalid Admin Name or Password";
	header("location:index.php");
}

?>