<?php session_start();
include 'check.php';?>
<style>table, th, td {
  font: center solid black;
}
</style>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="icon" 
      type="image/png" 
      href="images/logo.png">
<title>mint hotel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Tenor+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
    
	

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> 
	<script type="application/javascript" src="js/bootstrap.min.js"></script>
	<script type="application/javascript" src="js/lightbox.js"></script>

	
	
			<script>
				$(document).on('click','a[href^="#"]',function (event){
					event.preventDefault();
					
					$('html,body').animate(
					{scrollTop:$($.attr(this,'href')).offset().top
					},500);
				});
		</script>

	
</head>


	<body>
<div class="nav1">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="collapse navbar-collapse" >
    
    <ul class="navbar-nav m-auto">
    	
     <li class="nav-item"><?php  echo $_SESSION['username'];?></li>
      <li class="nav-item"><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Sign Out</a></li>
   
 </ul>
  </div>
</nav>
</div>

			<header>

					<div class="nav1">
							<nav class="navbar navbar-expand-lg navbar-dark bg-dark " >
						
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav m-auto">
						
								<li class="nav-item">
									<a class="nav-link" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about">About</a>
								</li>
						<li class="nav-item">
									<a class="nav-link" href="#gallery">Gallery</a>
								</li>
							<li class="nav-item">
									<a class="nav-link" href="#prices">Prices</a>
								</li>
							<li class="nav-item">
									<a class="nav-link" href="#contact">Contact Us</a>
								</li>
							
							
						
							</ul>
						
						</div>
						</nav>
								</div>







								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/car/img1.jpg" class="d-block w-100" alt="...">

					<div class="carousel-caption d-none d-md-block">
						<h1 class="animated fadeInDown"  style="font-size: 3vw">GIVE ELEGANCE</h1>
						<h2 class="animated fadeInRight" style="font-size: 3vw">TO YOUR MINI OCCASIONS</h2>
						<a href="#about"><button type="button" class="btn btn-outline-light animated slideInUp">View more</button></a>
					</div>

				</div>
				<div class="carousel-item">
					<img src="images/car/img2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1 class="animated slideInDown"  style="font-size: 3vw">ADD COLOUR</h1>
						<h2 class="animated slideInUp" style="font-size: 3vw">TO YOUR SPECIAL MOMENT</h2>
							<a href="#about"><button type="button" class="btn btn-outline-light animated slideInUp">View more</button></a>
				  	</div>
			  	</div>
				<div class="carousel-item">
					<img src="images/car/img3.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h1 class="animated fadeInLeft"  style="font-size: 3vw">BEST CUISINES WITH</h1>
						<h2 class="animated fadeInRight" style="font-size: 3vw">GREAT SERVICE</h2>
						<a href="#about"><button type="button" class="btn btn-outline-light animated slideInUp">View more</button></a>
				  	</div>
			  	</div>
									<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
								  </div>
								  </div>







  
			  </header>






			  
					
			
			  <section class="section section-light" id="about">
				  <div class="about">
					  <h1 style="font-size: 3vw">About Us</h1>
					  <p  style="text-align: justify"><h4 style="font-size: 2vw">MINT BANQUET is a elegant reception hall situated at Kottawa, very close to Southern Highway Express. Our services distinguishes from other banquet hall for a quite number of resons.
			Will you planning a small function with few guests, this is the your place. We arranged wedding, engagement, b'day parties, get together, conference and all kind of parties.
			Top quality services are provided by a professional and dedicated catering and banquet team who will assist you with the planning process throughout, making every effort to make your event a success. Our aim is to exceed your expectations by delivering an unsurpassable quality of service as you cherish the most memorable moments in your life.</h4></p>
				</div>
			  </section>
			
			  <div class="bg2" id="gallery">
				  <div class="galley" >
					<div class="container">
							<h1 style="font-size: 3vw">Our gallery</h1>
						<div class="gallery-grid">
                            
							<?php

									include 'dbCon.php';

									$sql="SELECT * FROM images ";

									$result=mysqli_query($conn, $sql);?>  

									<div class="row">
										<div class="col-sm-2"></div>
										<div class="col-sm-8">

												<?php
													while($row=mysqli_fetch_array($result)){
																echo "<div class='panel panel-primary'>";	
																echo "<div class='panel-body' >";
																echo " <table class='table'>";
																	echo"<tbody >"; 
																	echo "<tr >";
																	echo"<td>"; ?><img src="<?php echo $row['image_path'];?>" height="200" width="170"/> <?php echo "</td>";	
																	echo"<td><br/>"."<a  style='color:red; font-size:175%;' href=deleteimg.php?".$row['id']; echo">DELETE</a></td>";
																	echo "</tbody>";
																	echo "</table>";
																	echo "</div>";
																	echo "</div>";
														}
													?>

																					</div>	
																					</div>

																 																<?php

																	include 'dbCon.php';
																 // If upload button is clicked ...
  if (isset($_POST['upload'])) {
	// Get image name
	//$image = $_FILES['image'];
	
	// image file directory
	//$target = "images/".basename($image);
	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$sql = "INSERT INTO images (image) VALUES ('$image')";
	// execute query
	//mysqli_query($conn, $sql);
	$result=$conn->query($sql);
	
	
	if($result){
		?>
		<script>alert("Done");</script>
<?php
		
	
	}
	else{

		echo "NOT DONE";
	}
}
	?>	


																 <form method="POST" action="uploadimg.php" enctype="multipart/form-data" id="myForm">
																 	<input id="uploadImage" type="file" accept="image/*" name="image" class="btn btn-primary"/>
																	<img src="images/2.png" /><br><br>
																	<input class="btn btn-primary" type="submit" value="Upload">
																	</form>
																	<script>
																	function myFunction() {
																		document.getElementById("myForm").submit();
																	document.getElementById("myForm").reset();
																}
																	
																</script>
																		
																				


                            <br>
                            <br>
						</div>
					</div>
					
				</div>	
				  
			
				
			  </div>
			
			    <section class="section section-dark">
				  
					<div class="prices" id="prices" style="background-image: url(images/price.jpg); background-repeat: no-repeat; opacity: 0.8;">
					    <h1 style="font-size: 3vw">Prices</h1>
						<?php

									include 'dbCon.php';

									$s1="SELECT * FROM menues";
									
									$rs1=mysqli_query($conn, $s1);
									
									?>  
			
						<div class="row">
						<div class="row">
										<div class="col-sm-2"></div>
										<div class="col-sm-8">

												<?php
													while($row=mysqli_fetch_array($rs1)){
																echo "<div >";	
																echo "<div ><h4 > ".   $row['menu_name']   ."</h4></div>";
																echo "<div  >";
																echo " <table >";
																	echo"<tbody style='color:black;'>"; 
																	echo"<tr class='bg-danger'><th>Menu id</th><th>Price</th><th>Rice types</th><th>Curries</th><th>Desserts</th><th>Other</th><th></th></tr>";
																	echo "<tr class='table-danger'>";
																	echo "<td >".$row['menu_id']."</td>";
																	echo "<td >".$row['menu_price']."</td>";
																	echo  "<td>".$row['rice_types']."</td>";
																	echo  "<td >".$row['curries']."</td>";
																	echo  "<td >".$row['desserts']."</td>";
																	echo "<td>".$row['others']."</td>";
																	
																	
																	echo"<td><br/>"."<a style='color:black; font-size:175%;'href=editmenue.php?".$row['menu_id']; echo">EDIT</a></td>";
																	echo "</tr>";
																	echo "</tbody>";
																	echo "</table>";
																	echo "</div>";
																	echo "</div>";
														}
													?>

																					</div>	
																					</div> 
                            
                        </div>	
					
							
			        </div>
				
				
			    </section>
			
			  <div class="bg3">
					<div class="contactus" id="contact">
			
						<h1 style="font-size: 3vw">Contact Us</h1>
									
											
												<div class="map">
														<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.4318849258584!2d79.97662711403213!3d6.838712195057646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae251b892ea5fb1%3A0x257b64a8b978730f!2sMint+Reception+Hall!5e0!3m2!1sen!2slk!4v1545558059174" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		
							
					
				
												</div>
												
			
			
			
											
									
			</div>
			</div>
			
			  <section class="section section-darkk">
				<div class="container">
					<div class="row">
					  <div class="col-sm">
						<img src="images/contact/1.jpg" alt="contact" style="width:100%">
					  </div>
					  <div class="col-sm">
						<img src="images/contact/2.jpg" alt="contact" style="width:100%">
					  </div>
					  <div class="col-sm">
						<img src="images/contact/3.jpg" alt="contact" style="width:100%">
					  </div>
					</div>
				  </div>
			  </section>
			
			  <div class="pimg1">
			   
				</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>






  
	
	<script>
		$(document).ready(function(){

			$(".column").hover(
				function(){
					$(this).animate({
						marginTop:"-=1%",
					},200);
				},

				function(){
					$(this).animate({
						marginTop:"0%"
					},200);
				}	
		);


		});


		</script>




	
	
	
	
	
	
	
	<div class="row" style=" font-size: 60%; background-color: #575757; color: white; border-bottom-right-radius:15px; border-bottom-left-radius:15px;  padding-left: -1000px;">
			<div class="col-sm-4">
			</div>
	
			<div class="col-sm-4">
					<footer id="footer">
				<div id="footer-inner">
					<p>&copy; Copyright SriTech &#124; Terms of Use&#124; Privacy Policy</p>
					<div class="clr"></div>
				</div>
			</footer>
			</div>	
	</div>		
	
	
		
		

	
</body>
</html>
