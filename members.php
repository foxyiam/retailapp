<?php 

 // Connects to your Database 

 mysql_connect("localhost", "id1225771_alfox", "Sskakarot1") or die(mysql_error()); 

 mysql_select_db("id1225771_retail") or die(mysql_error()); 

 
 //checks cookies to make sure they are logged in 

 if(isset($_COOKIE['ID_my_site'])) 

 { 

 	$username = $_COOKIE['ID_my_site']; 

 	$pass = $_COOKIE['Key_my_site']; 

 	 	$check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error()); 

 	while($info = mysql_fetch_array( $check )) 	 

 		{ 

 

 //if the cookie has the wrong password, they are taken to the login page 

 		if ($pass != $info['password']) 

 			{ 			header("Location: login.php"); 

 			} 

 

 //otherwise they are shown the admin area	 

 	else 

 			{ 
$sql="SELECT*FROM users WHERE username = '$username'";
$result = mysql_query($sql);
while ($details = mysql_fetch_assoc($result)){
	
echo $details['username'];
echo $details['password'];
}
 			 echo "Admin Area<p>"; 

 echo "Your Content<p>"; 

 echo "<a href=logout.php>Logout</a>"; 

 			} 

 		} 

 		} 

 else 

 

 //if the cookie does not exist, they are taken to the login screen 

 {			 

 header("Location: login.php"); 

 } 

 ?>
