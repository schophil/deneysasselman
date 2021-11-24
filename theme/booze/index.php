<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Titan+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    <?php 
        echo Theme::metaTags('title'); 
        echo Theme::metaTags('description');
    ?>
    <?php 
        // echo Theme::css('style/orange/booze_bootstrap.css');
        echo Theme::css('style/navy/style.css');
        // echo Theme::css('style/orange/style.css');
    ?>
</head>
<body>
<div class="container shadow-sm p-0 bg-light shadow-lg" id="main">
    <nav class="navbar navbar-expand-lg navbar-dark p-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="/">Drankencentrale De Neys-Asselman</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/berrevoesj">Berrevoesj</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/over-ons">Over ons</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://nl-be.facebook.com/pages/category/Shopping---Retail/Bier-en-Wijnhandel-De-Neys-Asselman-406310812859379/"><i class="fab fa-facebook">&nbsp;</i></a>
                </li>     
                <li class="nav-item">
                    <a class="nav-link" href="mailto:de.neys-asselman@pandora.be"><i class="fas fa-at">&nbsp;</i></a>
                </li>     
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <div id="content-wrapper">
	<?php
		// $WHERE_AM_I variable detect where the user is browsing
		// If the user is watching a particular page the variable takes the value "page"
		// If the user is watching the frontpage the variable takes the value "home"
		if ($WHERE_AM_I == 'page') {
			include(THEME_DIR_PHP.'page.php');
		} else {
			include(THEME_DIR_PHP.'home.php');
		}
    ?>
    </div>

    <div class="text-white pt-3 pb-3" id="footer">
        <p class="text-center mb-2">Opperstraat 4-8, Liedekerke</p>
        <p class="text-center mb-2">Tel: 053/66.61.30</p>
        <p class="text-center mb-2">Fax: 053/67.35.71</p>
        <p class="text-center mb-2">Openingsuren: donderdag, vrijdag en zaterdag van 9u tot 18u</p>
        <p class="text-center"><a class="text-white-50" href="/admin">admin</a></p>
    </div>
</div>

<script src="https://kit.fontawesome.com/8aa504b97d.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
