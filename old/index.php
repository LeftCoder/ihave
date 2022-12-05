<?php
	require_once "includes/init.php";
	$data_array = XmlToArray("cennik/cennik.xml");
?>

<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="iHave serwis, to firma zajmująca się serwisem telefonów Apple z siedzibą w Poznaniu. Sprawdź nasz cennik i dowiedz się czy Twój smartfon da się naprawić.">

  <!-- /title -->
	<title>iHave - Serwis Telefonów Apple</title>

	<!-- /favicon -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	
	<!-- /css & fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/magnific.css">
	<link rel="stylesheet" href="css/app.css">
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127750007-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127750007-1');
</script>


	<!-- /google recaptcha -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
	<div id="grid-container">
		<header class="navbar fixed-top navbar-expand-lg">
			<nav class="container-fluid">
			  <a class="navbar-brand" href="./"><div class="logo"></div></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavigation" aria-controls="mainNavigation" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fas fa-bars"></i>
			  </button>
			  <div class="collapse navbar-collapse" id="mainNavigation">
			    <div class="navbar-nav">
			      <a class="nav-item nav-link" href="#hero-text">Start</a>
			      <a class="nav-item nav-link" href="#galeria">Galeria</a>
			      <a class="nav-item nav-link" href="#onas">O nas</a>
			      <a class="nav-item nav-link" href="#cennik-mobile">Cennik</a>
			      <a class="nav-item nav-link" href="#zalety">Zalety</a>
			      <a class="nav-item nav-link" href="#kontakt">Kontakt</a>
			    </div>
			    <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#cennik-modal">Nasz cennik</button>
			  </div>
			</nav>
		</header>

		<main class="container">
			<section id="hero-text">
				<div class="hero-text-wrapper fadeIn wow">
					<h1>Twój serwis telefonów Apple</h1>
					<p>Wybierz nas. Nie pożałujesz.</p>
					<button type="submit" class="btn btn-default" data-toggle="modal" data-target="#cennik-modal">Zobacz nasz cennik</button>
				</div>
			</section>
			
			<section id="galeria" class="popup-gallery">
				<div class="row fadeIn wow">
					<div id="img-1" class="col-lg-3">
						<a href="images/gallery/1-big.jpg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/1-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
					<div id="img-2" class="col-lg-3">
						<a href="images/gallery/2-big.jpg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/2-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
					<div id="img-3" class="col-lg-3">
						<a href="images/gallery/3-big.jpg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/3-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
					<div id="img-4" class="col-lg-3">
						<a href="images/gallery/4-big.jpeg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/4-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
				</div>
				<div class="row fadeIn wow">
					<div id="img-5" class="col-lg-3">
						<a href="images/gallery/5-big.jpeg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/5-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
					<div id="img-6" class="col-lg-3">
						<a href="images/gallery/6-big.jpg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/6-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
					<div id="img-7" class="col-lg-3">
						<a href="images/gallery/7-big.jpg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/7-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
					<div id="img-8" class="col-lg-3">
						<a href="images/gallery/8-big.jpg" title="Poglądowe zdjęcie - iPhone">
							<div class="img-wrapper">
								<img class="img-fluid" src="images/gallery/8-small.jpg" alt="mobile phone">
								<div class="overlay"></div>
							</div>
						</a>
					</div>
				</div>
			</section>

			<section id="onas" class="fadeIn wow">
				<div class="row">
					<div id="tile-1">
						<h2>Prostota,<br>czyli dwa słowa<br><span class="main-text">o nas</span>.</h2>
					</div>
					<div id="tile-2">
						<p><strong>Oddaj swój telefon w dobre ręce.</strong></p><br>
						<p><i class="far fa-dot-circle"></i>&nbsp;&nbsp;Tak jak Ty jesteśmy miłośnikami telefonów z jabłkiem i wiemy, że jest to jedna z najważniejszych rzeczy w Twoim codziennym życiu, dlatego możesz nam zaufać.</p>
						<p><i class="far fa-dot-circle"></i>&nbsp;&nbsp;Wieloletnie doświadczenie w branży pozwala nam ze spokojem podejść do serwisu twojego urządzenia.</p>
						<p><strong>Dla nas nie ma sytuacji bez wyjścia.<br>Zawsze coś zaradzimy aby uzdrowić Twój iPhone.</strong></p>
					</div>
				</div>
			</section>
			
			<section id="cennik-mobile">
			  <div class="input-group">
			    <input id="searchbox-mobile" class="form-control" type="text" placeholder="znajdź usterkę...">
			    <div class="input-group-append">
    				<button class="btn" type="submit"><i class="fas fa-search"></i></button>
  				</div>
			  </div>
			  <table id="cennik-mobile-serwisu" class="table table-striped">
			    <thead>
			      <tr>
			        <th>#</th>
			        <th>Model</th>
			        <th>Naprawiany element</th>
			        <th>Cena</th>
			      </tr>
			    </thead>
			    <tbody>
			      <?php echo $output = DrawTableRows($data_array); ?>
			    </tbody>
			  </table>
			</section>

			<hr>

			<section id="zalety" class="fadeIn wow">
				<div class="row">
					<div id="tile-3">
						<h2>Zobacz co<br>wyróżnia nasz<br><span class="main-text">serwis</span>.</h2>
					</div>
					<div id="tile-4">
						<div class="row">
							<div class="icon-square"><i class="fas fa-stethoscope"></i></div>
							<div class="tile-title"><h3>&nbsp;Szybka i profesjonalna diagnoza</h3></div>
						</div>
						<div class="row">
							<p><strong>Zbiłeś szybkę, aparat przestał działać, a może w głośniku cisza?</strong><br>Jesteśmy po to, by szybko i sprawnie przywrócić Twojego iPhone’a do życia. Kiedy liczy się czas, trafna diagnoza usterki to już połowa sukcesu.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="tile-5">
						<div class="row">
							<div class="icon-square"><i class="far fa-check-circle"></i></div>
							<div class="tile-title"><h3>&nbsp;Możesz nam zaufać</h3></div>
						</div>
						<div class="row">
							<p><strong>Nie mamy zamiaru przyciągać Cię oklepanymi frazesami.</strong><br>Skorzystaj z naszych usług i przekonaj się, że jesteśmy solidną firmą oferującą realne usługi w konkurencyjnych cenach.</p>
						</div>
					</div>
					<div id="tile-6">
						<div class="row">
							<div class="icon-square"><i class="fas fa-leaf"></i></div>
							<div class="tile-title"><h3>&nbsp;Stawiamy na zasady fair-play</h3></div>
						</div>
						<div class="row">
							<p><strong>Nie wystawimy Ci wygórowanego rachunku</strong><br>za coś czego nie naprawiliśmy. W przypadku skomplikowanej usterki skontaktujemy się i to Ty zdecydujesz co dalej zrobić.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div id="tile-7">
						<div class="row">
							<div class="icon-square"><i class="fas fa-wrench"></i></div>
							<div class="tile-title"><h3>&nbsp;Wspierają nas autoryzowane serwisy</h3></div>
						</div>
						<div class="row">
							<p><strong>W przypadku większych awarii Twojego sprzętu,</strong><br>oferujemy możliwość współ-naprawy u autoryzowanych serwisów Apple. Co ważne, wszystko to nadal według naszego cennika.</p>
						</div>
					</div>
					<div id="tile-8">
						<h2>Twój iPhone<br>jest zepsuty?<br><span class="main-text">Daj nam znać</span>.</h2>
					</div>
				</div>
			</section>

			<hr>

			<section id="kontakt" class="fadeIn wow">
				<div class="row">
					<div id="contact-form" class="col-lg-4">
						<div id="contact-title">
							<h2>Wyślij swoją<br><span class="main-text">wiadomość</span>.</h2>
							<div id="message-box" class="alert "></div>
						</div>
						<div id="form">
							<form id="send-email" method="POST" action="./includes/send_email.php">
								<div class="form-group">
									<label for="name-1">Imię</label>
  								<input class="form-control" id="name-1" type="text" name="user-name" required>
								</div>
								<div class="form-group">
									<label for="email-1">Twój e-mail</label>
  								<input class="form-control" id="email-1" type="text" name="email-address" required>
								</div>							
								<div class="form-group">
									<label for="message">Twoja wiadomość</label>
									<textarea id="message" name="message" required></textarea>
								</div>
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="6Lchg1wUAAAAAKtswmxU9jjo6kYmgRgzYdtoN_U8"></div>
								</div>
								<div class="form-group">
									<button type="submit" onClick="gtag('event', 'Wyslany Formularz Verseo')" class="btn btn-block btn-default">Wyślij wiadomość</button>
								</div>
							</form>
						</div>
					</div>
					<div id="details" class="col-lg-8">
						<div id="address">
							<div class="logo"></div>
							<address>
								ul. Obornicka 309<br>
								60-689 Poznań
							</address>
							<div class="row contacts-wrap">
								<div class="col-lg-4"><a href="mailto:serwis@ihave.gsm.pl"><i class="fas fa-envelope"></i>&nbsp;serwis&commat;ihave.gsm.pl</a></div>
								<div class="col-lg-4"><a href="tel:+48576820728"><i class="fas fa-phone"></i>&nbsp;&nbsp;576 820 728</a></div>
							</div>
						</div>
						<div id="google-map" class="find-us">
							<a title="Zobacz jak do nas trafić" href="images/other/mini_map.jpg">
								<div class="img-wrapper">
									<img class="img-fluid" src="images/other/mini_map.jpg" alt="Jak do nas trafić">
									<div class="overlay">
										<div class="napis">Zobacz<br>jak do nas trafić</div>
									</div>
								</div>
							</a>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1445.6190420006271!2d16.897089070900684!3d52.456830390501516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4704436cb7029b21%3A0x4215e4788dc04884!2sObornicka+309%2C+Pozna%C5%84!5e0!3m2!1spl!2spl!4v1525523832397" allowfullscreen></iframe>
						</div>
					</div>	
				</div>
			</section>
		</main>

		<footer>
			<div id="footer_content">2018 &copy; Copyright by Kamil Graczyk</div>
		</footer>
	</div>

	<!-- /modal price table -->
	<?php require_once "includes/price_table.php"; ?>
	
	<!-- /javascript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/v/bs4/dt-1.10.16/datatables.min.js"></script>
	<script src="http://cookiealert.sruu.pl/CookieAlert-latest.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/magnific.js"></script>
	<script src="js/main.js"></script>
</body>
</html>