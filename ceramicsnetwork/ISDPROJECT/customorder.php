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
		<link rel="stylesheet" type="text/css" href="css/customorder.css"/>
       
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
          
          
          <div class="tablepanel" style="margin-left:80px; height:2000px; width:90%;">
           <h1 style="text-align:center; color:black; margin-top:5px;">Custome Order From International Buyers</h1>
		   <?php
				 $username="root";$password="";$database="ceramics";
                        mysql_connect("localhost",$username,$password);
                        @mysql_select_db($database) or die( "Unable to select database");
                           
                  
						
                       
                        
                        
                        $query="SELECT * FROM ibordercustom";
                        
                        $result = mysql_query($query);
                        if (!$result) {
                            DIE("Query to show fields from table failed");
                        }
                        echo '<table class="gridtable" >';
                        echo  '<tr>';
                        echo  '<th>Order No.</th><th>Int. Buuyer Id</th><th>Image</th><th>Details</th><th>Date and Time of Order</th>';
                        echo  '</tr>';
                        
                        while($row = mysql_fetch_assoc($result))
                        {
                            $orderno=$row["corderid"];
							$ibid=$row["ibid"];
							$path=$row["image"];
							$detail=$row["detail"];
							$timedate=$row["date"];
							
							echo "<tr>";
							echo "<td>".$orderno."</td>";
							echo "<td>".$ibid."</td>";
							echo "<td><img src=".$path." style='width=10px; height=10px'></td>";
							echo "<td>".$detail."</td>";
							echo "<td>".$timedate."</td>";
                            echo "</tr>";
                        }
                        mysql_free_result($result);
        
        
                
            ?>       
       
          </div>
          
        <!--</div>-->
		
	</body>
    
</html>