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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
