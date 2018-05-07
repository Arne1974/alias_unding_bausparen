<?php
include_once 'prehead.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Berlin');
include_once("adp_suche/lib/app/controller/suche.php");
header('Access-Control-Allow-Origin: *');

//var_dump($_REQUEST);
?>
<!DOCTYPE html>

<html>
    <head>
        <?php include_once 'head.php'; ?>
    </head>
    <body>
        <header>
            <?php include_once 'header.php'; ?>
        </header>
        <main>
            <section class="adp-maps">
                <article id="map_canvas"></article>
            </section>
            <section class="with-sidebar clear">
                <article class="breadcrumb">
                    <a href="#">Start</a>
                    <a href="#">Service</a>
                    <a href="#">Außendienstmitarbeiter</a>
                </article>
                <article>
                    <div class="h7">Service</div>
                    <h1 class="si-blue">Außendienstpartner-Suche</h1>
                    <h2 class="si-blue si-bold">Ihr Fachberater vor Ort</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </article>
            </section>
            <section class="finden-sie si-bold">
                <div class="first-block">
                    <span>Finden Sie einen ALIAS UNDING Außendienstpartner in Ihrer Nähe</span>
                </div>
                <div class="second-block">
                    <span class=""><input type="text" name="plz-ort" id="plz-ort" placeholder="PLZ oder Ort eingeben"></span>
                    <span class="si-bold si-blue icon-search-find submit"></span>
                </div>
            </section>
            <section class="no-sidebar clear ext-search">
                <article class="accordion clear">
                    <div class="wrapper">
                        <input type="radio" id="accordion_left_03" name="accordion-check-grp" class="accordion-check-grp">
                        <figure class="left">
                            <label for="accordion_left_03">
                                <span class="outer">
                                    <span class="box-control si-blue si-bold">
                                        <span class="icon icon-plus"></span>
                                        <span class="icon icon-minus"></span>
                                    </span>
                                    <span class="inner">Erweiterte Suche</span>
                                </span>
                            </label>
                        </figure>
                        <aside class="info_content_overbox si-bg-gray">
                            <form method="post" action="" enctype="application/x-www-form-urlencoded">
                                <div class="erweiterte-suche formular" id="adp-overlay-suchbox">
                                    <div class="formular-box">
                                        <aside class="box-form">
                                            <div class="form-nachname">
                                                <label for="nachname">Name</label>
                                                <div class="wrapper">
                                                    <input type="text" name="name" id="adp-overlay-input-name">
                                                </div>
                                                <span class="question-mark"></span>
                                                <div class="info-box">
                                                    <div class="msg">Lorem ipsum dolor</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                                <span class="icon-achtung-round"></span>
                                                <div class="error-box">
                                                    <div class="msg">Testerror Text</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                            </div>
                                            <div class="form-plz-ort">
                                                <label for="plz">PLZ / </label>
                                                <label for="ort">Ort</label>
                                                <div class="wrapper">
                                                    <input type="text" name="plz" id="adp-overlay-input-plz" />
                                                    <input type="text" name="ort" id="adp-overlay-input-ort" />
                                                </div>
                                                <span class="question-mark"></span>
                                                <div class="info-box">
                                                    <div class="msg">Lorem ipsum dolor</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                                <span class="icon-achtung-round"></span>
                                                <div class="error-box">
                                                    <div class="msg">Testerror Text</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                            </div>
                                            <div class="form-familienstand">
                                                <label for="familienstand">Max. Entfernung <span class="optional">(km)</span></label>
                                                <div class="wrapper">
                                                    <input type="text" name="maxdist" id="adp-overlay-input-entfernung" />
                                                </div>
                                                <span class="question-mark"></span>
                                                <div class="info-box">
                                                    <div class="msg">Lorem ipsum dolor</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                            </div>
                                            <div class="form-zusatz-1">
                                                <div class="wrapper">
                                                    <input type="checkbox" id="tierhalterrisiko" class="styled" name="mit_homepage">
                                                    <label for="tierhalterrisiko"><span class="si-bold">Nur Außendienstpartner mit eigener Homepage anzeigen</span><span class="hide768"><br>&nbsp;</span></label>
                                                </div>
                                                <span class="question-mark"></span>
                                                <div class="info-box">
                                                    <div class="msg">Lorem ipsum dolor</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                                <span class="icon-achtung-round"></span>
                                                <div class="error-box">
                                                    <div class="msg">Testerror Text</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                                <div class="acc-abbinder clear" id="adp-overlay-button">
                                    <input type="image" src="images/suchen.png" title="suchen" alt="suchen" id="adp-overlay-suchen" />
                                </div>
                            </form>
                        </aside>
                    </div>
                </article>
                <?php
                include_once 'adp_suche/index.php';
                ?>
                <article class="adp-suchergebnis">
                    <h3 class="si-blue si-bold">Hauptverwaltungen</h3>
                    <figure class="tile-2" id="adp-overlay-adp-1">
                        <div>
                            <img src="images/standorte/dortmund.jpg" alt=""/>
                        </div>
                        <div>
                            <h2 class="si-blue">ALIAS UNDING Gruppe</h2>
                            <p>Hauptverwaltung Dortmund<br>Joseph-Scherer-Str. 3<br>44139 Dortmund</p>
                            <span class="links left clear">
                                <a href="#" class="gt si-bold">Anfahrtsroute</a>
                            </span>
                        </div>
                    </figure>
                    <figure class="tile-2" id="adp-overlay-adp-0">
                        <div>
                            <img src="images/standorte/hamburg.jpg" alt=""/>
                        </div>
                        <div>
                            <h2 class="si-blue">ALIAS UNDING Gruppe</h2>
                            <p>Hauptverwaltung Dortmund<br>Neue Rabenstr. 15-19<br>20354 Hamburg</p>
                            <span class="links left clear">
                                <a href="#" class="gt si-bold">Anfahrtsroute</a>
                            </span>
                        </div>
                    </figure>
                </article>
            </section>

        </main>
        <footer>
            <?php include_once 'footer.php'; ?>
        </footer>
    </body>
</html>