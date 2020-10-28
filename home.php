
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
   	
   </style>
	<title>Welcome to our School Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	
</head>
<body>
	
	
	 <div class="header">
	 	<img src="konapara_school.png" width=95px" height="90px">

          konapara High School

	 </div>
	 <div class="date">
	 <span style="float: right">
		<?php
		date_default_timezone_set('Asia/Dhaka');
		echo date("h:i a")."<br>";
	#echo date_default_timezone_get();
	 

		?>

	</span>
</div>

   <div>
   <table border="0">

   	<tr>

   		<div id="navbar">

   			<ul>
   				
     
		<li><a href="home.php">Home</a></li>
		<li><a href="admin.php">Adminpanel</a></li>
		<li><a href="image.php">Teaching staff</a></li>
		<li><a href="nonteaching.php">Non teaching staff</a></li>
		<li><a href="facilities.php">Facilities</a></li>
		<!-- <li><a href="#">Admission</a></li>
		<li><a href="#">Result</a></li> -->
		<li><a href="Academic.php">Academic Activities</a>
		<li><a href="for_login.php">Login</a></li>
		<li><a href="for_registration.php">Sign Up</a></li>
		

   			</ul>
   			
   		</div>

   		<td  border="1" width="100%">

   			<h1>Welcome to our School</h1>
   			<p>
   				We hope website gives you an insight into the opportunities we are able to offer you for academic,vocational studies.In addition to the course literature,we have included general information about the facilities and student services as well as contact details should require further assistance.We would like to develop our carriculum and activities.
   			</p>

   			<p>
   				 In website you will find an overview of our school .Here students and teacher are co-operate
			 each other.We are able to offer you a better eduaction and let us try to bloom your latent and talent.
			 A student can take
			 facilities sign up in a form ,we have included general information about the facilities and 
			 student services as well as contact details should require for further assistance.
   				
   			</p>
   			



   		</td>
   		

   	</tr>
   	


   </table>

   <br>

</div>

   
   	<table border="" width="100%">
   		<h2>Image Gallery</h2>
   		<tr>
   			
   			<td><marquee width="50%"><img src="konapara_school.png" width="100%" height="100%"></marquee></td>
		
		<td><marquee width="50%"><img src="konapara1.jpg" width="100%" height="100%"></marquee></td>
		
		<td><marquee width="50%"><img src="konapara2.jpg" width="100%" height="100%"></marquee></td>
		<td><marquee width="50%"><img src="minar.jpg" width="100%" height="100%"></marquee></td>
		<td><marquee width="50%"><img src="math.png" width="100%" height="100%"></marquee></td>


   		</tr>
   		
     <hr width="100%">

   	</table>
  
 

	
<br><br>
<br><br><br><br>


<div class="footer">
	copyright @2015 Konapara High School

	</div>

</div>


</body>
</html>