<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kubirub</title>
	<link rel="shortcut icon" href="images/logo.ico"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link href="{{ asset('css/index.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
	<div class="container-fluid all">
		<header>
		<div class="row">
			<nav class="navbar navbar-expand-md bg-dark navbar-dark">
			  <a id="home" href="/" class="navbar-brand" ><img src="images/logo.png"></a>
			  <button id="menyu" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			</nav>
		</div>
		</header>
		<main>
			<div class="row">
				<div class="col-md-8">
					<section id="homepage5">
					<div class="row">
						<div class="offset-md-1 col-md-6">
							<h5>Feed back us</h5>
							<form method="POST" action="{{ route('sendcontact') }}" enctype="multipart/form-data">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							<input placeholder="Name" class="namesur" style="display: inline;" type="text" name="firstname">
							<input placeholder="Surname" class="namesur" style="display: inline; float: right;" type="text" name="lastname">
							<input placeholder="Your mail adress" class="inputs" type="email" name="email">
							<input placeholder="Topic" class="inputs" type="text" name="topic">
							<textarea rows="5" placeholder="Text..." name="message"></textarea>
							<input class="submit" value="SEND" type="submit" name="">
							</form>
						</div>
						<div class="col-md-5">
							<div class="info">
							<div><img src="images/location.svg">Azadlig ave.20.Baku,Azerbaijan<br>Postal Code: AZ1010</div>
							<div><img src="images/phone.svg">+994 55 753 19 35</div>
							<div><img src="images/envelope.svg">support@kubirub.online</div>
							</div>
						</div>
					</div>
					</section>

				</div>
				<div class="col-md-3 phone">
					<img src="images/ix.png">
					<a href=""><img class="topstore stores" src="images/astore.png"></a>
					<a href=""><img class="bottomstore stores" src="images/pstore.png"></a>
				</div>
				<div class="col-md-1">
					<div class="mediaContent">
                        <a href="#" class="linkedin">
                        <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="twitter">
                        <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="facebook">
                        <i class="fab fa-facebook-f"></i>
                       	</a>
                    </div>
				</div>
			</div>
		</main>
		<div class="col-md-12">
			
		<footer>
			<div class="row footer">
				<div class="col-md-4 left">
					<p>All rights <span>reserved</span></p>
				</div>
				<div class="col-md-4 center">
					<p>Product by <span><a href="http://teching.co/">TECHING</a></span></p>
				</div>
				<div class="col-md-4 right">
					<p>Baku <span>2018</span></p>
				</div>
			</div>
		</footer>
		</div>
	</div>

</body>
</html>