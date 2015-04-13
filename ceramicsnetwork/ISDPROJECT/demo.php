<?php
            $connection = mysql_connect('localhost', 'root', '') or die(mysql_error()); //The Blank string is the password
			mysql_select_db('ceramics',$connection);
			
			$query = "SELECT * FROM companies"; //You don't need a ; like you do in SQL
			$result = mysql_query($query);
			
			
		
			
		//	while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
		     
			  while ($row = mysql_fetch_assoc($result)) {
				  echo $row["companyname"];
				  echo "<br>";				 
				   echo $row["history"];
				   echo "<br>";
				  echo $row["estd"];
				  echo "<br>";
				 // echo $row["history"];
			    }
			  

			
			
			
			
			mysql_close(); //Make sure to close out the database connection
			echo 'My name is Rasif'

?>