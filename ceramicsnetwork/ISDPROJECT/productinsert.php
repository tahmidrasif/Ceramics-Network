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
		<link rel="stylesheet" type="text/css" href="css/productinsert.css"/>
       
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
                
                 <li> <a href="products.php" class="ib" >Back</a></li>
              </ul>
              
              
            </form>
          </div>
          
         
          
			<div class="productform">
                      <form enctype="multipart/form-data" action="#" method="post" name="changer">
                                <p class="insert">
                                 <label>Company Name:</label>
                                    <select name="company">
                                        <option value="" disabled selected>Select Company
                                         </option>
                                        <option value="Shinepukur Ceramics">Shinepukur Ceramics
                                         </option>
                                        <option value="Munno Ceramics">Munno Ceramics
                                        </option>
                                        <option value="Rak Ceramics">Rak Ceramics
                                        </option>
                                    </select>
                                </p>
                                <p class="insert">
                                 <label>Detail:</label> <input type="text" name="detail">
                                </p>
                                <p class="insert">
                                 <label>price:</label> <input type="text" name="price">
                                </p>
                                <p class="insert">
                                 <label>Image:</label> <input name="image" accept="image/jpeg" type="file">
                                 <!--accept="image/jpeg,image/pjpeg,image/bmp,image/gif,image/jpeg,image/png"-->
                                </p>
                                <p class="insert">
                                 <label>date:</label> <input type="date" name="date">
                                </p>
                                <p class="insert">
                                 <label>product status:</label> <input type="radio" name="sts" value="available"><label>Available</label>
                                 <input type="radio" name="sts" value="not available"><label>Not Available</label>
                                </p>
                                <p class="insert">
                                 <label>Type:</label>
                                    <select name="type">
                                        <option value="" disabled selected>Select Type
                                         </option>
                                        <option value="Bone China">Bone China
                                         </option>
                                        <option value="Porceline">Porceline
                                        </option>
                                        <option value="Ivory China">Ivory China
                                        </option>
                                    </select>
                                </p>
                                <p class="insert">
                                 <input type="submit" name="insert" value="Submit" style="width:100px; height:40px; margin:5px; margin-left:10px;">
                                           
                                </p>                 
                      </form>
                      
              </div>	  
                  
                  
                   
                   
                   
              
          
        <!--</div>-->
		
	</body>
 <?php
        	
          if(isset($_POST['insert']))
		  {
			   if ($_FILES["image"]["error"]  > 0)
				{
				   echo "<font size = '5'><font color=\"#e31919\">Error: NO CHOSEN FILE <br />";
				  // echo"<p><font size = '5'><font color=\"#e31919\">INSERT TO DATABASE FAILED";
				 }
				 else
				 {
				   move_uploaded_file($_FILES["image"]["tmp_name"],"productimage/" . $_FILES["image"]["name"]);
				 //  echo"<font size = '5'><font color=\"#0CF44A\">SAVED<br>";
			  
				   $path="productimage/".$_FILES["image"]["name"];
				   
				  
				 }
					
					     $detail=$_POST['detail'];
						 $price=$_POST['price'];
						 
						 $date = date("Y-m-d", strtotime($_POST['date']));
						// echo $date;
						 $status=$_POST['sts'];
						 $type=$_POST['type'];
						 $company=$_POST['company'];
						 
						  
								 
						 //echo $company." ".$detail." ".$price." ".$path." ".$date." ".$status." ".$viewer;
						 
						 if(!empty($detail)&&!empty($price)&&!empty($date)&&!empty($status)&&!empty($type)&&!empty($company))
						 {
							 $username="root";$password="";$database="ceramics";
							 mysql_connect("localhost",$username,$password);
							 @mysql_select_db($database) or die( "Unable to select database");
							 
								$query= "INSERT INTO product (companyname, detail, price, image, date, productsts, type) VALUES ('".$company."','".$detail."','".$price."','".$path."','".$date."','".$status."','".$type."')";  
								 mysql_query($query) or  die('Invalid query: ' . mysql_error());
								
								 $detail="";
								 $price="";
								 $date="";
								 $date = "";
								 $date = "";
								 $date = "";
								 $status="";
								 $type="";
								 $company="";
							 mysql_close();
						 }
						 
						 else
				         {
					       echo "Some fields are missing";
				         }
				  
				 
				 
		  }
			
    ?>   
</html>
