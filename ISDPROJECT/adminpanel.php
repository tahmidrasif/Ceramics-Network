
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
		<link rel="stylesheet" type="text/css" href="css/adminpanel.css"/>
       
        <!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
      
        <header class="topheader">
         <ul>
		
		<li></li>

         
          <li><a href="index.php">Sign Out</a></li>
         </ul>
        </header>
        <br>
        <!--<div class="page">-->
          <aside class="mainpanel">
            <ul>
              <li><a href="homedemo.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="deals.php">Deals</a></li>
              <li><a href="customorder.php">Custom Order</a></li>
              <div <?php session_start();$type=$_SESSION['login'];if($type=='1') echo "style='display:none;";?>>
              <li><a href="buyerdetails.php">Buyer List</a></li>
              </div>
              
            </ul>
          </aside>
        <!--</div>-->
		
	</body>
    
</html>
