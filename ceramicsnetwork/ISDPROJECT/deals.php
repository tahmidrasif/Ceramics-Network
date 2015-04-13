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
		<link rel="stylesheet" type="text/css" href="css/deals.css"/>
       
        <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
      
        <header class="topheader">
         <ul>
         <li><a href="adminpanel.html">Home</a></li>
          <li><a href="index.html">Sign Out</a></li>
         </ul>
        </header>
        <br>
        <!--<div class="page">-->
          <div class="buttonpanel">
            <form method="post" action="#">
              <ul>
                <li> <input type="submit" class="ib" value="IB Deals" name="intb"></li>
                 <li><input type="submit" class="ib" value="LB Deals" name="locb"></li>
              </ul>
              
              
            </form>
          </div>
          <div class="tablepanel">
                      <h1 class="buyerdetail" style="margin-left:600px; margin-top:10px; color:white; font-size:54px;">Deals</h1>
                      <?php
				   
					   //header('Location: index.php');
					    $username="root";$password="";$database="ceramics";
                        mysql_connect("localhost",$username,$password);
                        @mysql_select_db($database) or die( "Unable to select database");
                           
                   if(isset($_POST['intb']))
                    {
						
                        $value1 = "International Buyers";
                        
                        
                        $query="SELECT * FROM ibdealproduct";
                        
                        $result = mysql_query($query);
                        if (!$result) {
                            DIE("Query to show fields from table failed");
                        }
                        echo '<table class="gridtable" >';
                        echo  '<tr>';
                        echo  '<th>Deal No.</th><th>Int. Buyer Name</th><th>country</th><th>Product ID</th><th>Date</th>';
                        echo  '</tr>';
                        
                        while ($row = mysql_fetch_array($result)) 
						{
							 $id=$row["ibuyerid"];
							 $dealno=$row["dealno"];
                             $prodid=$row["productid"];
							 $date=$row["date"];
													
							$query1="SELECT ibname, country FROM intbuyer WHERE id=".$id."";
							$result1 = mysql_query($query1);
							if (!$result1) {
								DIE("Query to show fields from table failed");
							}
							while ($row = mysql_fetch_array($result1)) 
						     {
								 $ibname=$row['ibname'];
							     $country=$row['country'];
								// echo " ".$ibname;
								// echo "  ".$country;
							 }
							 echo "<tr>";
							echo "<td>".$dealno."</td>";
							echo "<td>".$ibname."</td>";
							echo "<td>".$country."</td>";
							echo "<td><a href='products.php' style='text-decoration:none; color:blue;'>".$prodid."</a></td>";
							echo "<td>".$date."</td>";
                            echo "</tr>";
						 
                            // $row is array... foreach( .. ) puts every element
                            // of $row to $cell variable
                          //  foreach($row as $cell)
                              //  echo "<td>$cell</td>";
                         
                          //  echo "</tr>\n";
                        }
                        mysql_free_result($result);
						mysql_free_result($result1);
                        echo "</table>";
        
                   }
                   else if(isset($_POST['locb']))
                    {
                     	$value1 = "Local Buyer";
						$query="SELECT * FROM lbdealproduct";
                        
                        $result = mysql_query($query);
                        if (!$result) {
                            DIE("Query to show fields from table failed");
                        }
                        echo '<table class="gridtable" >';
                        echo  '<tr>';
                        echo  '<th>Deal No.</th><th>Local Buyer Name</th><th>email</th><th>Product Id</th><th>Date</th>';
                        echo  '</tr>';
                        
                         while ($row = mysql_fetch_array($result)) 
						{
							 $id=$row["lbid"];
							 $dealno=$row["dealno"];
                             $prodid=$row["productid"];
							 $date=$row["date"];
													
							$query1="SELECT ldname, email FROM ldealer WHERE id=".$id."";
							$result1 = mysql_query($query1);
							if (!$result1) {
								DIE("Query to show fields from table failed");
							}
							while ($row = mysql_fetch_array($result1)) 
						     {
								 $ldname=$row['ldname'];
							     $email=$row['email'];
								 //echo " ".$ibname;
								// echo "  ".$country;
							 }
							echo "<tr>";
							echo "<td>".$dealno."</td>";
							echo "<td>".$ldname."</td>";
							echo "<td>".$email."</td>";
							echo "<td><a href='products.php' style='text-decoration:none; color:blue;' >".$prodid."</a></td>";
							echo "<td>".$date."</td>";
                            echo "</tr>";
                            // $row is array... foreach( .. ) puts every element
                            // of $row to $cell variable
                          //  foreach($row as $cell)
                              //  echo "<td>$cell</td>";
                         
                          //  echo "</tr>\n";
                        }
                        mysql_free_result($result);
                        mysql_free_result($result1);
                    }
                 
                 // echo $_POST['intb'];
                   
                  ?>
              
                 
                              
          </div>
          
        <!--</div>-->
		
	</body>
    
</html>
