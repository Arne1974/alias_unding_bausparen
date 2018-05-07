<?php
//Navigation: Hi-Lite
$nav = array();
$pagename = $_SERVER['SCRIPT_NAME'];
$pagename = explode('/', $pagename);
$pagename = str_replace('.php', '', end($pagename));

switch ($pagename) {
    case 'index':
//        $nav["active"] = "privatkunden";
        break;
    case 'angebot':
        $nav["active"] = "angebot";
        break;
    case 'content':
        $nav["active"] = "privatkunden";
        break;
    case 'download':
        $nav["active"] = "privatkunden";
        break;
    case 'magazin':
        $nav["active"] = "privatkunden";
        break;
    case 'produkt':
        $nav["active"] = "privatkunden";
        break;
    case 'service':
        $nav["active"] = "service";
        break;
    case 'sitemap':
        $nav["active"] = "service";
        break;
    case 'suchergebnis':
        $nav["active"] = "service";
        break;
    case 'trichter':
        $nav["active"] = "privatkunden";
        break;
    case 'trichter2':
        $nav["active"] = "privatkunden";
        break;
    default:
        $nav["active"] = '';
        break;
}
?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="language" content="de">
        <meta name="author" content="ALIAS UNDING, info@alias-unding.de">
        <meta name="revisit-after" content="7 days">
        <meta name="publisher" content="ALIAS UNDING, info@alias-unding.de">
        <meta name="owner" content="ALIAS UNDING, info@alias-unding.de">
        <meta name="keywords" content=""><!-- Wird durch das CMS gefüllt -->
        <meta name="description" content=""><!-- Wird durch das CMS gefüllt -->
        <meta name="title" content=""><!-- Wird durch das CMS gefüllt -->
        <meta name="robots" content="index">
        <meta name="robots" content="follow">
        <meta name="geo.region" content="DE-RP"><!-- Bundesland -->
        <meta name="geo.placename" content="Windhagen"><!-- Ort -->
        <meta name="geo.position" content="51.165691;10.451526"><!-- Geokoordinaten -->
        <meta name="ICBM" content="51.165691, 10.451526"><!-- Geokoordinaten -->
        <link rel="canonical" href=""><!-- Sollte bei Bedarf durch das CMS -->
		<!--[if IE 8]>
		<script>
			document.createElement("video");
			document.createElement("footer");
			document.createElement("header");
			document.createElement("main");
			document.createElement("details");
			document.createElement("aside");
		</script>
		<![endif]-->
        <title>ALIAS UNDING</title>
        <link rel="stylesheet" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" media="screen" href="css/si-font.css?v=0.1">
        <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<?php
        if($pagename === 'angebot') {
            echo '<link rel="stylesheet" media="screen" href="css/custom-form.css">';
        }elseif($pagename === 'aussendienstpartnersuche') {
            echo '<link rel="stylesheet" media="screen" href="css/custom-form.css">';
        }
?>
        <link rel="stylesheet" media="screen" href="css/main.css?v=0.1">
        <link rel="stylesheet" media="print" href="css/print.css">
        <!--<link rel="stylesheet" media="screen" href="css/main.min.css?v=0.1">-->
        
        <script src="js/jquery-1.11.3.min.js"></script>

        <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
        <script src="js/bootstrap.min.js"></script>
<?php
        if($pagename === 'index') {
            echo '<script src="js/jquery.carouFredSel-6.2.1-packed.js"></script>';
            echo '<script src="js/jquery.touchSwipe.js"></script>';
        } elseif ($pagename === 'angebot') {
            echo '<script src="js/custom-form-elements.min.js"></script>';
            echo '<script src="js/jquery.maskedinput.js"></script>';
        } elseif ($pagename === 'aussendienstpartnersuche') {
            echo '<script src="js/custom-form-elements.min.js"></script>';
            echo '<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>';
//            echo '<script type="text/javascript" src="js/adp_suche.js"></script>';
        }
?>
		<script src="js/main.js" async></script>
		<!--<script src="js/main.min.js"></script>-->
<?php
		if ($pagename === 'angebot') {
            echo '<script src="js/formular.js" async></script>';
        }elseif ($pagename === 'aussendienstpartnersuche') {
            echo '<script src="js/formular.js" async></script>';
        }
?>
		
        <script type="text/javascript">
		window.emosTrackVersion = 2;
		</script>
		<script src="js/emos2.js"></script>