<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1" />
		<title>Ceramics Network</title>
		<link rel="stylesheet" type="text/css" href="../css/screen_styles.css" />
		<link rel="stylesheet" type="text/css" href="../css/screen_layout_large.css" />
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)"   href="../css/screen_layout_small.css">
		<link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)"  href="../css/screen_layout_medium.css">
		<link rel="stylesheet" type="text/css" href="css/buyerdetails.css"/>
       
        <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
      
        <header class="topheader">
          <ul>
          <li><a href="adminpanel.php">Home</a></li>
          <li><a href="index.php">Sign Out</a></li>
         </ul>
        </header>
        
         </header>
        <br>
        <!--<div class="page">-->
          <div class="buttonpanel">
            <form method="post">
              <ul>
                <li> <input type="submit" class="ib" value="International Buyers" name="intb"></li>
                 <li><input type="submit" class="ib" value="Local Buyer" name="locb"></li>
              </ul>
              
              
            </form>
          </div>
          
          <div class="tablepanel">
          
				  
                  
                  <?php
				   
					   //header('Location: index.php');
					    $username="root";$password="";$database="ceramics";
                        mysql_connect("localhost",$username,$password);
                        @mysql_select_db($database) or die( "Unable to select database");
                           
                   if(isset($_POST['intb']))
                    {
						
                        $value1 = "International Buyers";
                        
                        
                        $query="SELECT id,ibname,email,country,company,website FROM intbuyer";
                        
                        $result = mysql_query($query);
                        if (!$result) {
                            DIE("Query to show fields from table failed");
                        }
                        echo '<table class="gridtable" >';
                        echo  '<tr>';
                        echo  '<th>Id</th><th>Int. Buuyer Name</th><th>email</th><th>country</th><th>company</th><th>website</th>';
                        echo  '</tr>';
                        
                        while($row = mysql_fetch_row($result))
                        {
                            echo "<tr>";
                         
                            // $row is array... foreach( .. ) puts every element
                            // of $row to $cell variable
                            foreach($row as $cell)
                                echo "<td>$cell</td>";
                         
                            echo "</tr>\n";
                        }
                        mysql_free_result($result);
        
        
                   }
                   else if(isset($_POST['locb']))
                    {
                     	$value1 = "Local Buyer";
						$query="SELECT id,ldname,email,outlet FROM ldealer";
                        
                        $result = mysql_query($query);
                        if (!$result) {
                            DIE("Query to show fields from table failed");
                        }
                        echo '<table class="gridtable" >';
                        echo  '<tr>';
                        echo  '<th>Id</th><th>Local Buyer Name</th><th>email</th><th>Outelet</th>';
                        echo  '</tr>';
                        
                        while($row = mysql_fetch_row($result))
                        {
                            echo "<tr>";
                         
                            // $row is array... foreach( .. ) puts every element
                            // of $row to $cell variable
                            foreach($row as $cell)
                                echo "<td>$cell</td>";
                         
                            echo "</tr>\n";
							echo "<br>";
                        }
                        mysql_free_result($result);

                    }
                 
                 // echo $_POST['intb'];
                   
                  ?>
              
                 <h1 class="buyerdetail">
				 <?php if(isset($value1))
				 {
					 echo $value1;
				 }
				 else
				   echo "Choose Buyer Type";
				 ?></h1>
                   
                   
                   
                   <!--Previous Next button-->   
                   <div class="nppanel">
                     
                   
                   </div>   
       
          </div>
          
        <!--</div>-->
		
	</body>
    
</html>




