<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>CSS Registration Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <link rel="stylesheet" type="text/css" href="css/reg.css"/>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
     </head>   
     <body>
       <header class="topheader">
         <ul>
          <li><a href="index.php">Sign In</a></li>
          <li><a href="reg.php">Register</a></li>
         </ul>
        </header>
        <br/> 
         
           <br/>  
           
        <form action="reg.php" method="post" class="register">
            <header class="formheader">
            <h1>Registration</h1>
            </header>
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Email *
                    </label>
                    <input type="text" name="emailfield"/>
                    <label>Repeat email *
                    </label>
                    <input type="text" name="confemailfield"/>
                </p>
                <p>
                    <label>Password*
                    </label>
                    <input type="password"/ name="passfield">
                    <label>Repeat Password*
                    </label>
                    <input type="password" name="confpassfield"/>
                    <label class="obinfo">* obligatory fields
                    </label>
                </p>
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
                <p>
                    
                    <label>Name *</label>
                    <input type="text" class="long" name="namefield"/>
                </p>
                
                <p>
                    <label>Buyer Type *
                    </label>
                    <input type="radio" name="buyer" value="International Buyer" id="ib" /><label> International Buyer </label>
                    <input type="radio" name="buyer" value="Local Buyer" id="lb" /><label> Local Buyer </label> 
                    
                
                </p>
                      
                 <p>
                    <label id="companyoutlet">Company/Outlet Name </label> <!--//javascript-->
                    <span id="update"></span>
                    <input type="text" maxlength="20" id="comp" name="compoutfield"/>
                </p>
               
                
                <p>
                    <label>Country *
                    </label>
                    <select name="country">
                        <option>
                         </option>
                        <option value="Bangladesh">Bangladesh
                         </option>
                        <option value="United States">United States
                        </option>
                        <option value="United Kingdom">United Kingdom
                        </option>
                        <option value="Finland">Finland
                        </option>
                        <option value="France">France
                        </option>
                        <option value="Italy">Italy
                        </option>
                        <option value="Germany">Germany
                        </option>
                    </select>
                </p>
                <p>
                    <label class="optional">Website
                    </label>
                    <input class="long" type="text" value="http://" name="webfield"/>
                    <label class="optional">Not Applicable For Local Dealers.
                    </label>
                </p>
            </fieldset>
            
            <fieldset class="row4">
                <legend>Terms and Mailing
                </legend>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>*  I accept the <a href="#">Terms and Conditions</a></label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>I want to receive personalized offers by your site</label>
                </p>
                <p class="agreement">
                    <input type="checkbox" value=""/>
                    <label>Allow partners to send me personalized offers and related services</label>
                </p>
            </fieldset>
            <div><input name="register" type="submit" class="button" id="register"></input></div>
<!--            <div><button class="button">Register &raquo;</button></div>-->     
            </form>
        
    </body>
</html>
<?php 
			if(isset($_POST['register']))
					   {
						 //  echo "Clicked";
						   $email=$_POST['emailfield'];
						   $confemail=$_POST['confemailfield'];
						   $pass=$_POST['passfield'];
						   $confpass=$_POST['confpassfield'];
						   $name=$_POST['namefield'];
						   $compout=$_POST['compoutfield'];
						   $country=$_POST['country'];
						   $website=$_POST['webfield'];
						   $buyer = $_POST['buyer'];
				           
						   
						   if(!empty($email)&&!empty($confemail)&&!empty($pass)&&!empty($confpass)&&!empty($name)&&!empty($compout)&&!empty($country)&&!empty($website))
						   {
								if($email!=$confemail || $pass!=$confpass){
								 echo "<script>alert('Email or Password not Match');</script>";
								}
							else{
							// $passhash=md5($pass);	
							
							}	   	 
							 $username="root";$password="";$database="ceramics";
							 mysql_connect("localhost",$username,$password);
							 @mysql_select_db($database) or die( "Unable to select database");
							 if($buyer=="International Buyer")
							 {
								$query= "INSERT INTO intbuyer (ibname, email, password, country, company, website) VALUES ('".$name."','".$email."','".$pass."','".$country."','".$compout."','".$website."')";  
                                 mysql_query($query) or  die('Invalid query: ' . mysql_error());
								 $query1= "INSERT INTO logintype (name, type) VALUES ('".$name."','2')";  
                                 mysql_query($query1) or  die('Invalid query: ' . mysql_error());
							 }
							 else if($buyer=="Local Buyer")
							 {
								$query= "INSERT INTO ldealer (ldname, email, password, outlet) VALUES ('".$name."','".$email."','".$pass."','".$compout."')";  
                                 mysql_query($query) or  die('Invalid query: ' . mysql_error());
								  $query1= "INSERT INTO logintype (name, type) VALUES ('".$name."','3')";  
                                 mysql_query($query1) or  die('Invalid query: ' . mysql_error());
 
							 }							 							 
		                        mysql_close();
								echo "<script type='text/javascript'>\n"; 
							    echo "alert('Your Registration is Succesful')\n"; 
							    echo "</script>"; 
							    header('Location:index.php');
							}
							else{
								echo "<script>alert('Some Fields are missing');</script>";
							   }	
							   
							
					   }  

?>  
		     




