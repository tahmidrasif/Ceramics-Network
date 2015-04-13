<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"/>
   <title>ceramicsbd</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="css/main1.css">
   

 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
   <script type="text/javascript" src="jquery.sticky.js"></script>
  
    <script>
    $(window).load(function(){
      $("nav").sticky({ topSpacing: 0 });
    });
	
    </script>
    <script type="text/javascript">
		function updatepicture(pic)
		{
			document.getElementById("image_").setAttribute("src",pic);
		}
    
    </script>
    <style type="text/css">
    	.image{ width:20px}
    </style>
</head>

<body>
<header class="topheader">
         <form action="homedemo.php" method="post">
          <input type="search" name="searchbox" placeholder="Price, Type or company" style="margin-top:5px; width:600px; height:40px; margin-left:5px; font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:24px;">
          <input type="submit" name="search" value="Search" style="height:40px; width:200px;">
         </form>
         <ul>
	      <li><a href="homedemo.php" style="margin-top:5px; color:white;">Home</a></li>
          <li><a href="index.php" style="margin-top:5px; color:white;">Logout</a></li>
         
         </ul>
        </header>
<div id="wrapper">
    <header>
      <div class="flexslider">
         <ul class="slides">
           <li>
            <img src="img/1.jpg" />
           </li>
         
         </ul>
       </div>
    </header>

 <nav id="navbar">
   <ul>
     <li><a href="#">Latest Products</a></li>
     <li><a href="#">Companies</a>
       <ul>
         <li><a href="#">Munno Ceramics</a></li>
         <li><a href="#">Rak Ceramics</a></li>
         <li><a href="#">Shinepukur Ceramics</a></li>
        
       </ul>
     </li>
     <li><a href="#">Upload Custom Design</a></li>
     <li><a href="#">About Us</a></li>
   </ul>
 </nav>
 <div class="products">
   <div class="heading" ><p>Latest Products</p></div>
   
   <?php
    // session_start();
          if(!isset($_POST["search"]))
		  {
								$username="root";$password="";$database="ceramics";
								mysql_connect("localhost",$username,$password);
								@mysql_select_db($database) or die( "Unable to select database");
								
								$query="SELECT * FROM product";
								$result = mysql_query($query);
								if (!$result)
								 {
								   DIE("Query to show fields from table failed");
								 }
								while ($row = mysql_fetch_array($result)) 
								{
									 $id=$row["id"];
									 $company=$row["companyname"];
									 $detail=$row["detail"];
									 $price=$row["price"];
									 $src=$row["image"];
									 $date=$row["date"];
									 $sts=$row["productsts"];
									 $type=$row["type"];
									 
									echo "<div class='row1' style='background-image:url(images/1.jpg);'>";
									echo "<div class='col1' >";
									  echo "<div class='round_image'>";
										echo "<a href='#' class='thumbnail'>";
										echo  "<img src='".$src."'/>";
										echo "</a>"; 
									  echo "</div>";
									  echo "<p><h3 style='color:blue;'>Product Id:</h3><strong>".$id."</strong></p>";
									  echo "<p><h3 style='color:blue;'>A Product Of:</h3><strong>".$company."</strong></p>";
									  echo "<p><h3 style='color:blue;'>Type:</h3><strong>".$type."</strong></p>";
									  echo "<p><h3 style='color:blue;'>Details:</h3><strong>".$detail."</strong></p>";
									  echo "<p><h3 style='color:blue;'>Status:</h3><strong>".$sts."</strong></p>";
									  echo "<p><h3 style='color:blue;'>Release Date:</h3><strong>".$date."</strong></p>";
									  echo "<p><h3 style='color:red;'>Price:</h3><strong>".$price."</strong></p>";	
				
				  
				                      
									 echo  "<form action='#' method='post'>";
									 echo  "<input type='submit' value='Read More' name='rasif' class='read' >";
									 echo  "<input type='submit' value='Buy Product".$id."' name='buy' class='read' >";
									 echo "</form>";
								
								
			
									echo "</div>";
									echo "</div>";
						        }
		   }
		  
		   else{
			    $value=$_POST["searchbox"];
				//echo $value;
				$username="root";$password="";$database="ceramics";
				mysql_connect("localhost",$username,$password);
				@mysql_select_db($database) or die( "Unable to select database");
								
			    $query1="SELECT * FROM product where type='".$value."'";
				$result1 = mysql_query($query1);
								if (!$result1)
								 {
								       mysql_free_result($result1);
									   $value2=$_POST["searchbox"];
									   $query2="SELECT * FROM product where price='".$value2."'";
									   $result2 = mysql_query($query2);
									if (!$result2)
									 {
									
									   DIE("Query to show fields from table failed");
									   
									 }
									 else
									 {
										 while ($row = mysql_fetch_array($result1)) 
										   {
												 $id=$row["id"];
												 $company=$row["companyname"];
												 $detail=$row["detail"];
												 $price=$row["price"];
												 $src=$row["image"];
												 $date=$row["date"];
												 $sts=$row["productsts"];
												 $type=$row["type"];
												 
												echo "<div class='row1' style='background-image:url(images/1.jpg);'>";
												echo "<div class='col1' >";
												  echo "<div class='round_image'>";
													echo "<a href='#' class='thumbnail'>";
													echo  "<img src='".$src."'/>";
													echo "</a>"; 
												  echo "</div>";
												  echo "<p><h3 style='color:blue;'>Product Id:</h3><strong>".$id."</strong></p>";
												  echo "<p><h3 style='color:blue;'>A Product Of:</h3><strong>".$company."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Type:</h3><strong>".$type."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Details:</h3><strong>".$detail."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Status:</h3><strong>".$sts."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Release Date:</h3><strong>".$date."</strong></p>";
												  echo "<p><h3 style='color:red;'>Price:</h3><strong>".$price."</strong></p>";	
							
							  
							
												 echo  "<form action='homedemo.php' method='post'>";
												 
												 echo  "<input type='submit' value='Read More' name='".$id."' class='read'>";
												 echo  "<input type='submit' value='Buy Product".$id."' name='buy' class='read' >";
												 echo "</form>";
											
											
							
													echo "</div>";
													echo "</div>";
											  }//end of while
	 
									 }//end of else
								   
								 }
								 else
								 {
										 while ($row = mysql_fetch_array($result1)) 
										   {
												 $id=$row["id"];
												 $company=$row["companyname"];
												 $detail=$row["detail"];
												 $price=$row["price"];
												 $src=$row["image"];
												 $date=$row["date"];
												 $sts=$row["productsts"];
												 $type=$row["type"];
												 
												echo "<div class='row1' style='background-image:url(images/1.jpg);'>";
												echo "<div class='col1' >";
												  echo "<div class='round_image'>";
													echo "<a href='#' class='thumbnail'>";
													echo  "<img src='".$src."'/>";
													echo "</a>"; 
												  echo "</div>";
												  echo "<p><h3 style='color:blue;'>Product Id:</h3><strong>".$id."</strong></p>";
												  echo "<p><h3 style='color:blue;'>A Product Of:</h3><strong>".$company."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Type:</h3><strong>".$type."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Details:</h3><strong>".$detail."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Status:</h3><strong>".$sts."</strong></p>";
												  echo "<p><h3 style='color:blue;'>Release Date:</h3><strong>".$date."</strong></p>";
												  echo "<p><h3 style='color:red;'>Price:</h3><strong>".$price."</strong></p>";	
							
							  
							
												 echo  "<form action='homedemo.php' method='post'>";
												 echo  "<input type='submit' value='Read More' name='read' class='read'>";
												 echo  "<input type='submit' value='Buy Product".$id."' name='buy' class='read' >";
												 echo "</form>";
											
											
						
												echo "</div>";
												echo "</div>";
									      }//end of while
 
								 }//end of else
								 
								 
								 
			   
			   }//end of else
						
				
						
	?>
						
	  
       
	
   
   
   <!--End of Products-->
   
   <div class="companies">
     <div class="heading"><p>About Companies</p></div>
     
       <?php
	        
            $connection = mysql_connect('localhost', 'root', '') or die(mysql_error()); //The Blank string is the password
			mysql_select_db('ceramics',$connection);
			
			$query = "SELECT * FROM companies"; //You don't need a ; like you do in SQL
			$result = mysql_query($query);
			
			
			
		//	while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
		 
			   while ($row = mysql_fetch_assoc($result)) 
			   {
				   $name=$row['companyname'];
				   $estd=$row["estd"];
				   $history=$row["history"];
				   $logo=$row["logo"];
		 	       $class=$row["class"];
                   $date1= date("Y-m-d");
				   echo "<div class='m'>";
				   echo "<h1>".$name."</h1>";
				   echo "<h3>Established in ".$estd."</h3>"; 
				   echo "<img class='logo3' src='".$logo."'/>";
				   echo "<article class='munart'>";
				   echo "<p>".$history."</p>";
				   echo "<p>".$date1."</p>";
				   echo "</article>";
				   
				   echo "</div>";
			
			  }

			
			
			
			
			mysql_close(); //Make sure to close out the database connection  
		  
		 

	   
	   ?>
       
       <?php 
	   
	   session_start();
	   $type=$_SESSION['login'];
	   $name1=$_SESSION['user'];
	   //echo "<h1>".$name1."<h1>";
	   //echo "<h1>".$type."<h1>";
	    if(isset($_POST["buy"]))
		 {
		  
			$prodid=$_POST["buy"];
			$int=filter_var($prodid,FILTER_SANITIZE_NUMBER_INT);	
		
			echo         "<script type='text/javascript'>\n"; 
							  echo "alert('".$int."');\n"; 
							  echo "</script>"; 			  
			$connection = mysql_connect('localhost', 'root', '') or die(mysql_error()); //The Blank string is the password
			mysql_select_db('ceramics',$connection);
			if($type=='2')
			{
				$buyertype='ib';
				$query5 = "SELECT id FROM intbuyer WHERE ibname='".$name1."'";
				$result5 = mysql_query($query5);
							if (!$result5) {
								DIE("Query to show fields from table failed");
							}
							while ($row = mysql_fetch_array($result5)) 
						     {
								 $ibid=$row['id'];
								 
							 }
							// echo "<h1>".$ibid."</h1>";
			}
			else if($type=='3')
			{
				$buyertype='lb';
				$query6 = "SELECT id FROM ldealer WHERE ldname='".$name1."'";
				$result6 = mysql_query($query6);
							if (!$result6) {
								DIE("Query to show fields from table failed");
							}
							while ($row = mysql_fetch_array($result6)) 
						     {
								 $ldid=$row['id'];
							 }
							// echo "<h1>".$ldid."</h1>";
			}
			  
			  
			if($buyertype=='ib')
			{
				//$ibid='1';
				
				$date = date("Y-m-d", strtotime($_POST['date']));
				$query3 = "INSERT INTO ibdealproduct ( ibuyerid, productid) VALUES ('".$ibid."','".$int."')";
			     mysql_query($query3) or  die('Invalid query: ' . mysql_error());
				 echo         "<script type='text/javascript'>\n"; 
							  echo "alert('Thanks For The Deal in www.ceramics.com. You will be connected by the provider Very Soon');\n"; 
							  echo "</script>"; 
							  
			}
			else if($buyertype=='lb'){
					//$lbid='2';
					
					$date = date("Y-m-d", strtotime($_POST['date']));
					$query4 = "INSERT INTO lbdealproduct ( lbid, productid) VALUES ('".$ldid."','".$int."')";
					 mysql_query($query4) or  die('Invalid query: ' . mysql_error());
					 echo         "<script type='text/javascript'>\n"; 
							  echo "alert('Thanks For The Deal in www.ceramics.com. You will be connected by the provider Very Soon');\n"; 
							  echo "</script>"; 
				}  
			
							  
						  
			 header('Location:homedemo.php')	;
		 }
	   
	   ?>
       
       
   
   <!--End of About Companies-->
   <div class="customdesign" <?php  if($type=='3') echo "style='display:none;";?>>
         <div class="heading"><p>Upload Custom Design</p></div>
         <div class="customdiv">
             
             
             <!--<form action="upload.php" class="picupload" id="form" method="post" enctype="multipart/form-data" target="iframe">
               <p>
                 <input type="file" id="file" name="file" class="field1">
               </p>
               <p>&nbsp; </p>
               <p>&nbsp;</p>
               <p> 
                 <input type="text" name="description" class="field2" placeholder="Product Details">
               </p>
               <p>&nbsp;</p>
               <p>
                 <input id="submit" type="submit" name="submit" value="Upload" class="picbtn">
               </p>
               <p>&nbsp;</p>
              
             </form>
             <p id="message"></p>
             <img id="image_" style="min-height:100;min-width:120;max-height:100" /><br><br>
             <iframe style="display:none" name="iframe"></iframe>-->
             
             <!--
              <div id="preview">
                  <!--<img width="100px" height="100px" src="humb">
              </div>
              -->
              <br>
               <form enctype="multipart/form-data" action="#" method="post" name="changer" class="corder">
                                
                                <p class="insert">
                                 <label>Detail:</label> <input type="text" name="detail">
                                </p>
                                
                                <p class="insert">
                                 <label>Image:</label><input name="image" accept="image/jpeg" type="file">
                                 <!--accept="image/jpeg,image/pjpeg,image/bmp,image/gif,image/jpeg,image/png"-->
                                </p>
                                
                                <p class="insert">
                                 <input type="submit" name="custom" value="Submit" style="width:100px; height:40px; margin:5px; margin-left:10px;">
                                </p> 
                                
                                                
                      </form>
                      <br>
                      <img src="images/7.jpg" style=" max-width:150px; max-height:150px; margin:0px auto">
         </div>
    </div>
   <br/>
   <br/>
   
   
 </div>
 <div class="footer" style="display:block;">
   <p>&copy; Broken Ceramics Corporation</p>
        
   </div>

<?php
if(isset($_POST['custom']))
		  {
			   if ($_FILES["image"]["error"]  > 0)
				{
				   echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
				  // echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
				 }
				 else
				 {
				   move_uploaded_file($_FILES["image"]["tmp_name"],"customimage/" . $_FILES["image"]["name"]);
				 //  echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";
			  
				   $path="customimage/".$_FILES["image"]["name"];
				   
				  
				 }
					
					     $detail=$_POST['detail'];
						 
						 
						 //$date = date("Y-m-d");
						
						 
						 
						  
								 
						 //echo $company." ".$detail." ".$price." ".$path." ".$date." ".$status." ".$viewer;
						 
						 if(!empty($detail))
						 {
							 $username="root";$password="";$database="ceramics";
							 mysql_connect("localhost",$username,$password);
						    @mysql_select_db($database) or die( "Unable to select database");
							$query8 = "SELECT id FROM intbuyer WHERE ibname='".$name1."'";
				             $result8 = mysql_query($query8);
							if (!$result8) {
								DIE("Query to show fields from table failed");
							}
							while ($row = mysql_fetch_array($result8)) 
						     {
								 $ibid=$row['id'];
								 
							 }
							 
								$query9= "INSERT INTO ibordercustom (ibid, detail, image) VALUES ('".$ibid."','".$detail."','".$path."')";  
							    mysql_query($query9) or  die('Invalid query: ' . mysql_error());
								
							//	 $detail="";
								// $price="";
							//	 $date="";
							//	 $date = "";
							//	 $date = "";
							//	 $date = "";
							//	 $status="";
							//	 $type="";
								// $company="";
							 mysql_close();
						 }
						 
						 else
				         {
					      echo "Some fields are missing";
				         }
				  
				 
				 
		  }
 

?>
</body>
  
</html>