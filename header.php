<header class="justify-content-between">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<style>
	
	.background{
			background-image:url(assets/images/drive.back.jpg);
			height: 100vh;
			background-repeat: no-repeat;
			background-size: cover;
			background-position: center;
			position: relative;
			margin-top: none;
		}
	</style>
	<script>
	function updateChar() {

var zone = document.getElementById("vehicleselete");

if (zone.value === "bike"){

	window.location.assign("http://localhost/Car-and-Scooty-School/bike.php");
}else{
	window.location.assign("http://localhost/Car-and-Scooty-School/car.php")
}

	</script>
</head>
<body>

        <nav class="navbar navbar-expand-sm navbar-light bg-dark ">
            <a href="index.php">
				<h1 class="nav-link text-light text-uppercase font-wieght-bold">Driving <br />School</h1>
			</a>
            <div class="navbar navbar-collapse justity-content-between">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="services.php">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="help.php">Help</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="about.php">About Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="payments.php">Payments</a>
					</li>
					<select class='btn btn-info btn-sm m-2' id='vehicleselete' onClick='updateChar();'>
					<option class='bg-light text-dark' >select vehicle</option>
					<option class='bg-light text-dark' to='bike'><a href='bike.php'>Bike</a></option>
					<option class='bg-light text-dark' to='car'><a href='car.php'>Car</a></option>
					</select>
				</ul>
				<ul class="navbar-nav">
					<form class="form-inline" >
                      <input class="form-control mr-sm-2" type="search" placeholder="Search Trainer" aria-label="Search" >
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href='search-trainer.php'><a href='search-trainer.php'>Search</a></button>
                    </form>
					<li class="nav-item">
						<a class="nav-link text-light font-wieght-bold" href="profile.php"></a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light text-uppercase font-wieght-bold" href="login.php" style="border-radius: 10px; border: 1px solid white;"><b>Login</b></a>
					</li>
				</ul>
        </div>
        </nav>
		
  </header>