<!DOCTYPE html>
<html>
<head>
	<title>Pig &middot; Me</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="static/css/pigme-custom.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="static/css/materialize.min.css">
	<link rel="stylesheet" href="static/css/pigme-custom.css">

</head>
<body class="contact-us-bg">
	<main>
	<div class="navbar-fixed ">
		<nav class="nav-extended red darken-1">
			<div class="nav-wrapper row container" style="margin-bottom: 0px">
				<a href="index.php" class="brand-logo pigme-heading">Pig Me Up</a>
				<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down pigme-navbar" >
					<li><a href="index.php" >Home</a></li>
					<li><a href="pig_fact.php" >Pig's Facts</a></li>
					<li><a href="product.php" >Products</a></li>
					<li><a href="order.php" >How To Order</a></li>
					<li><a href="contact_us.php" >Contact Us</a></li>
				</ul>
			</div>
		</nav>
	</div>

	<ul class="sidenav red lighten-1" id="mobile-demo">
		<li><a href="index.php" class="white-text">Home</a></li>
		<li><a href="pig_fact.php" class="white-text">Pig's Facts</a></li>
		<li><a href="product.php" class="white-text">Products</a></li>
		<li><a href="order.php" class="white-text">How To Order</a></li>
		<li><a href="contact_us.php" class="white-text">Contact Us</a></li>
	</ul>
	
	<div class="row container">
		<div class="white darken-4 contact-us-form">
			<div class="row">
				<h2 class="contact-us-heading center-align">Contact Us</h2>
			</div>
			<div class="row">
				<div class="col m6 s12">
					<div class="row">
						<form id="pigmail" class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<input id="name" type="text" class="validate" required="true">
									<label for="name">Name</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="email" type="email" class="validate">
									<label for="email">Email</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<input id="phone" type="text" class="validate">
									<label for="phone_number">Phone Number</label>
								</div>
							</div>
							<div class="row">
								<div class="row">
							        <div class="input-field col s12">
							        	<i class="material-icons prefix">mode_edit</i>
							          	<textarea id="body" class="materialize-textarea"></textarea>
							          	<label for="textarea">Textarea</label>
							        </div>
							    </div>
							</div>
							

						</form>
					</div>
				</div>
				<div class="col m6 s12">
					asdasdasd
				</div>
			</div>
		</div>
	</div>

	</main>
	<footer class="page-footer red darken-1">
		<div class="container">
			<div class="row">
				<div class="col l6 s12">
					<h5 class="white-text">Pig Me Up Company</h5>
					<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content. asdasda sdasdasdas</p>
				</div>
				<div class="col l4 offset-l2 s12">
					<h5 class="white-text">Social Media</h5>
					<ul>
						<li style="display: inline"><a href="https://www.instagram.com/pigmeoinkoink/" target="_blank"><img class="icon" src="static/icons/instagram_icon.png" alt="pig-me-instagram-icon"></a></li>
						<li style="display: inline"><a href="contact_us.php"><img class="icon" src="static/icons/whatapp_icon.png" alt="pig-me-whatapp-icon"></a></li>
						<li style="display: inline"><a href="contact_us.php"><img class="icon" src="static/icons/line_icon.png" alt="pig-me-lineapp-icon"></a></li>
						<li style="display: inline"><a href="contact_us.php"><img class="icon" src="static/icons/gmail_icon.png" alt="pig-me-email-icon"></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright red darken-4">
			<div class="container">
			© 2018 Pig Me Up
			<a class="grey-text text-lighten-4 right" href="#!">BANDUNG CITY</a>
			</div>
		</div>
	</footer>

	
</body>
<!-- SCRIPT JS BELOW FOR OPTIMIZING LOADING ==================================================================================================== -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="static/js/materialize.min.js"></script>
<!-- END OF SCRIPT ============================================================================================================================= -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('.parallax').parallax();
			$('.sidenav').sidenav();
			$('#bt1').click(function() {
		        $('#fr1').attr('action','mailto:test@test.com?subject=' + $('#tb1').val() + '&body=' + $('#tb2').val());
		        $('#fr1').submit();
		    });
			//$(".dropdown-trigger-custom").dropdown({constrainWidth: false});
			//$(".dropdown-trigger").dropdown();
		});
	</script>
	
</html>
