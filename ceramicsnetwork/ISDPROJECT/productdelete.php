<?php

//$host="localhost"; // Host name 
//$username=""; // Mysql username 
//$password=""; // Mysql password 
//$db_name="ceramics"; // Database name 
//$tbl_name="product"; // Table name 
//
//// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
$username="root";
									$password="";
									$database="ceramics";
                                    mysql_connect("localhost",$username,$password);
                                    @mysql_select_db($database) or die( "Unable to select database");
// get value of id that sent from address bar 
$id=$_GET['del'];

// Delete data in mysql from row that has this id 
$sql="DELETE FROM product WHERE id='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
//echo "<BR>";
//echo "<a href='delete.php'>Back to main page</a>";
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>