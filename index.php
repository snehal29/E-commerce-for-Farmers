<?php session_start(); ?>
									
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroCulture</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="bootstrap\js\bootstrap.min.js"></script>
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="login.css"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="stylesheet" href="indexfooter.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>

	<?php
		require 'menu.php';
	?>


<marquee class="marq"
                 bgcolor="#AED6F1"
                 direction="left" 
                 loop="5"> 
            
            <div class="geek1" style="color: #633974">Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Product Our Market&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our Product Our Market</div> 
</marquee>

		<!-- Banner -->
			<section id="" class="wrapper">
				<div class="container">
				<h1 style="color: #FF0000;"><center><b>AgroCulture</b></center></h1>

<div id="myCarousel" class="carousel slide" data-interval="6000" data-ride="carousel">
    <!-- Carousel indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>   
<div class="row"></div>
	<!-- Carousel items -->
    	<div class="carousel-inner" role="listbox" style=" width:100%; height:250px !important;">
        <div class="item active">
            <img src="images/y.jpg" alt="First Slide" width="100%" height="50%">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="images/z2_.jpg" alt="Second Slide" width="100%" >
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="images/a123.png" alt="Third Slide" width="100%">
            <div class="carousel-caption" color="white">
            </div>
        </div>
    </div>



    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
				

				<p></p>
				<br><br>
				<center>
					<div class="row uniform">
						<div class="4u 1u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id01').style.display='block'" style="width:auto"> LOGIN </button>
						</div>

						<div class="u 1u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id02').style.display='block'" style="width:auto">FARMER</button>
						</div>
						
						<div class="4u 1u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id03').style.display='block'" style="width:auto">BUYER</button>
						</div>
						
						<!--div class="2u 1u$(xsmall)">
							<button class="button fit" onclick="document.getElementById('id04').style.display='block'" style="width:auto">
								<a href="logout.php" class="button special">LOG OUT</a>
							</button>
						</div-->

					</div>
				</center>


			</section>

		


		<!-- Footer -->
		<footer class="footer-distributed" style="background-color:black" id="aboutUs">
		<center>
			<h1 style="font: 35px calibri;">About Us</h1>
		</center>
		<div class="footer-left">
			<h3 style="font-family: 'Times New Roman', cursive;">AgroCulture &copy; </h3>
		<!--	<div class="logo">
				<a href="index.php"><img src="images/logo.png" width="200px"></a>
			</div>-->
			<br />
			<p style="font-size:20px;color:white">Our product Our market !!!</p>
			<br />
		</div>

		<div class="footer-center">
			<div>
				<i class="fa fa-map-marker"></i>
				<p style="font-size:20px">we are here<span>Pune</span></p>
			</div>
			<div>
				<i class="fa fa-phone"></i>
				<p style="font-size:20px">123456789</p>
			</div>
			<div>
				<i class="fa fa-envelope"></i>
				<p style="font-size:20px"><a href="mailto:snehallondhe298@gmail.com" style="color:white">AgroCulture@gmail.com</a></p>
			</div>
		</div>

		<div class="footer-right">
			<p class="footer-company-about" style="color:white">
				<span style="font-size:20px"><b>About AgroCulture</b></span>
				AgroCulture is our platform for farmers help to sell their grains & grocerries!!!!
			</p>
			<div class="footer-icons">
				<a  href="#"><i style="margin-left: 0;margin-top:5px;"class="fa fa-facebook"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-instagram"></i></a>
				<a href="#"><i style="margin-left: 0;margin-top:5px" class="fa fa-youtube"></i></a>
			</div>
		</div>

	</footer>

<!--LOGIN BUttON-->
<div id="id01" class="modal">

  <form class="modal-content animate" action="Login/login.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <h3>Login</h3>
							<form method="post" action="Login/login.php">
								<div class="row uniform 50%">
									<div class="7u$">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" style="width:80%" required/>
									</div>
									<div class="7u$">
										<input type="password" name="pass" id="pass" value="" placeholder="Password" style="width:80%" required/>
									</div>
								</div>
									<div class="row uniform">
										<p>
				                            <b>Category : </b>
				                        </p>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="farmer" name="category" value="1" checked>
				                            <label for="farmer">Farmer</label>
				                        </div>
				                        <div class="3u 12u$(small)">
				                            <input type="radio" id="buyer" name="category" value="0" checked>
				                            <label for="buyer">Buyer</label>
				                        </div>
									</div>
									<center>
									<div class="row uniform">
										<div class="7u 12u$(small)">
											<input type="submit" value="Login" />
										</div>
									</div>
									</center>
								</div>
							</form>
						</section>
</div>
    </div>
    </div>
  </form>
</div>


<div id="id02" class="modal">

  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
<section>

							<h3>SignUp</h3>
							<form method="post" action="Login/signUp.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
									<p>
			                            <b>Category : </b>
			                        </p>
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="farmer" name="category" value="1" checked >
			                            <label for="farmer">Farmer</label>
			                        </div>
			                      
								</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" /></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>


<div id="id03" class="modal">

  <form class="modal-content animate" action="Login/signUp.php" method='POST'>
    <div class="imgcontainer">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <div class="container">
<section>

							<h3>SignUp</h3>
							<form method="post" action="Login/signUp.php">
								<center>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="name" id="name" value="" placeholder="Name" required/>
									</div>
									<div class="3u 12u$(xsmall)">
										<input type="text" name="uname" id="uname" value="" placeholder="UserName" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
										<input type="text" name="mobile" id="mobile" value="" placeholder="Mobile Number" required/>
									</div>

									<div class="3u 12u$(xsmall)">
										<input type="email" name="email" id="email" value="" placeholder="Email" required/>
									</div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(xsmall)">
			                            <input type="password" name="password" id="password" value="" placeholder="Password" required/>
			                        </div>
			                        <div class="3u 12u$(xsmall)">
			                            <input type="password" name="pass" id="pass" value="" placeholder="Retype Password" required/>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="addr" id="addr" value="" placeholder="Address" style="width:80%" required/>
									</div>
								</div>
								<div class="row uniform">
									<p>
			                            <b>Category : </b>
			                        </p>
			                       
			                        <div class="3u 12u$(small)">
			                            <input type="radio" id="buyer" name="category" value="0" checked >
			                            <label for="buyer">Buyer</label>
			                        </div>
								</div>
								<div class="row uniform">
									<div class="3u 12u$(small)">
										<input type="submit" value="Submit" name="submit" class="special" /></li>
									</div>
									<div class="3u 12u$(small)">
										<input type="reset" value="Reset" name="reset"/></li>
									</div>
								</div>
							</center>
							</form>
						</section>

    </div>
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal1= document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

</script>


	</body>
</html>
