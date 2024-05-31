<!DOCTYPE html>
<html>
    <head>
        <title>KAFU Online Clearance System</title>
</head>
<link rel="icon" type="image/png" sizes="16x16" href="images/kafu.png">
<style>
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: green;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 20px 22px;
  text-decoration: none;
  font-family: arial,sans-serif;
  
}
h1{
    font-family:sans-serif;
    color: yellow;
  font-weight: bold;
  font-size: 20px;
    align: center;
    
}
.bg {
  /* The image used */
  background-image: url("images/kafu1.jpeg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 200px 150px;
}
/* Change the link color to #111 (black) on hover */
li a:hover {
  background-color: orange;
}
</style>
<body>
<h1 class="h1">KAFU ONLINE CLEARANCE SYSTEM</h1>
<nav>
    <div class="logo">
    <ul class="nav-links">
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
    <li><a href="admin"> Admin Login</a></li>
    <li><a href="fetch_eligible.php"> Students who are eligible to clear</a></li>
    <li><a href="support.php">Support</a></li>
    </ul>
    </div>
</nav>
<img src="images/kafulogo.png" width="400px" alt="">
<div 
   class="bg" style="background-image: url(images/kafu5.jpeg);">
</div>

<div class="row"> 
			<div class="col-md-5 mv">
				<center><h3>Mission</h3></center>
				<center><p>To provide quality education and training, research and innovation to meet the needs of a dynamic Society.</p></center>
			</div>
			<div class="col-md-5 mv">
				<center><h3>Core Values</h3></center>
        <center>	<p>  •	Accountability
                     •	Customer focus
                     •	Excellence
                     •	Equity
                     •	Professionalism
                     •	Teamwork
                     •	Friendship
                   </p></center>
				</div>
			<div class="col-md-5 mv">
				<center><h3>Vision</h3></center>
				<center><p>A centre of excellence in teaching, innovation and holistic development</p></center>
				</div>
				<div class="col-md-5 mv">
				<center><h3>Philosophy</h3></center>
				<center><p>The University endeavors to be ranked amongst the world class universities based on academic excellence and research that impact on societal needs.</p></center>
				</div>
			</div>
		</div>
 
<?Php include('footer.php');?>
</body>
</html>
