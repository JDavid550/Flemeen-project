<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Flameen Dance Academy is located in Bogotá Colombia and  wants to take to the next dancers generation in Latam to the next level">
	<meta name="keywords" content="ART, DANCE, ARTE, DANZA, LATAM, TALENT, SALSA, TANGO, URBANO">
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/styles.css">
	

</head>
<body>
	<header>
		
		<div class="logo">
			<h2>Flemeen</h2>
			<h4>Dance Academy</h4>
		</div>	
			
		<nav class="menu"> 
		<ul class="menu_ul"></ul>
			<li class="menu_ul-li">
				<a href="../index.html">Home</a>
			</li>
			<li class="menu_ul-li">
				<a href="../pages/about.html">About us</a>
			</li>
			<li class="menu_ul-li">
				<a href="../pages/services.html">Services</a>
			</li>
			<li class="menu_ul-li">
				<a href="../pages/events.html">Events</a>
			</li>
			<li class="menu_ul-li">
				<a href="../pages/info.html">Info</a>
			</li>
		</ul>
		</nav>

		<div class="dropdown">
			<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
				Menu
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			  <li><a class="dropdown-item" href="../index.html">Home</a></li>
			  <li><a class="dropdown-item" href="../pages/about.html">About us</a></li>
			  <li><a class="dropdown-item" href="../pages/services.html">Services</a></li>
			  <li><a class="dropdown-item" href="../pages/events.html">Events</a></li>
			  <li><a class="dropdown-item" href="../pages/info.html">Info</a></li>
			</ul>
		  </div>

	</header>
    <main>
        <section class="form">
            <div class="form-title">
                <h1>Join us to our next session <br>¡Register now!</h1>
            </div>
           
            <div class="form-div">
                <form class="row g-3" id="register_form" method="POST">
                    <div class="col-md-6">
                      <label for="inputEmail4" class="form-label">Name</label>
                      <input type="text" class="form-control" id="inputEmail4" name="name">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword4" class="form-label">Lastname</label>
                      <input type="text" class="form-control" id="inputPassword4" name="lastname" >
                    </div>
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputAddress" placeholder="1234 Main St" name="email">
                    </div>
                    <div class="col-12">
                      <label for="inputAddress2" class="form-label">Adress</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="address">
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label">Phone</label>
                      <input type="text" class="form-control" id="inputCity" name="phone">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Class you want to take</label>
                      <select id="inputState" class="form-select" name="class">
                        <option selected>Salsa</option>
                        <option>Tango</option>
                        <option>Urbano</option>
                        <option>Ballet</option>
                      </select>
                    </div>
                    <div class="boton" class="col-6">
                      <button type="submit" class="btn" name="register">Register</button>
                    </div>
                  </form>
				  <?php
				  	require('../php/register.php')
				  ?> 
            </div>
        </section>
	</main>
	<footer>
        <section class="footer__section"> 
			<div class="footer__section--div">
				<h2>Flemeen</h2>
				<h4>Dance Academy</h4>
			</div>
			<div class="footer__section--div">
			<ul>
				<li><a href="../index.html">Home</a></li>
				<li><a href="../pages/about.html">About Us</a></li>
				<li><a href="../pages/services.html">Services</a></li>
			</ul>
			</div>
			<div class="footer__section--div">
			<ul>
				<li><a href="../pages/events.html">Events</a></li>
				<li><a href="../pages/info.html">Info</a></li>
				<li><a href="../index.html">Policy</a></li>
			</ul>
			</div>
			
			<div class="footer__section--div">
			<ul>
				<li><h4>Contact us</h4></li>
				<li>317 7633 982</li>
				<li>Cra 7 #26-12 Bogotá</li>
				<li>info@flameen.com</li>
			</ul>
				
			</div>
		</section>
        <div class="footer__div">
            Created by <strong>J.David Sarmiento</strong> for Valdor Academy Dance
        </div>
	</footer>
	
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootstrap.bundle.js"></script>
</body>
</html>