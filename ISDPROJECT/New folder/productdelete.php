<?php
if(isset($_POST['delete_id']) && !empty($_POST['delete_id'])) 
{
  $delete_id = mysql_real_escape_string($_POST['delete_id']);
  mysql_query("DELETE FROM product WHERE id=".$delete_id);
  header('Location: products.php');
}
?>