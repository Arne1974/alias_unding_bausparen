<?php include_once 'prehead.php'; ?>
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
            <section class="intro">
                <article id="carousel-main-stage" class="carousel carousel-fade slide" data-ride="carousel" data-interval="10000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-main-stage" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-main-stage" data-slide-to="1"></li>
                        <li data-target="#carousel-main-stage" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="img-big"><img src="images/slider_desktop_1.jpg" alt=""/></div>
                            <div class="img-medium"><img src="images/slider_ipad_1.jpg" alt=""/></div>
                            <div class="img-small"><img src="images/slider_mobile_1.jpg" alt=""/></div>
                            <div class="carousel-caption">
                                <div class="h4 si-bold">Natürlich können Sie auch ohne Arbeit glücklich sein</div>
                                <p>&ndash;&nbsp;vorausgesetzt, es ist für alles gesorgt</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-orange si-white btn-small si-bold">Mehr erfahren</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-big"><img src="images/slider_desktop_2.jpg" alt=""/></div>
                            <div class="img-medium"><img src="images/slider_ipad_2.jpg" alt=""/></div>
                            <div class="img-small"><img src="images/slider_mobile_2.jpg" alt=""/></div>
                            <div class="carousel-caption">
                                <div class="h4 si-bold">Natürlich können Sie auch ohne Arbeit glücklich sein</div>
                                <p>&ndash;&nbsp;vorausgesetzt, es ist für alles gesorgt</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-orange si-white btn-small si-bold">Mehr erfahren</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="img-big"><img src="images/slider_desktop_3.jpg" alt=""/></div>
                            <div class="img-medium"><img src="images/slider_ipad_3.jpg" alt=""/></div>
                            <div class="img-small"><img src="images/slider_mobile_3.jpg" alt=""/></div>
                            <div class="carousel-caption">
                                <div class="h4 si-bold">Natürlich können Sie auch ohne Arbeit glücklich sein</div>
                                <p>&ndash;&nbsp;vorausgesetzt, es ist für alles gesorgt</p>
                                <div class="btn-wrap">
                                    <a href="#" class="btn-orange si-white btn-small si-bold">Mehr erfahren</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-main-stage" role="button" data-slide="prev">
                        <span class="icon-arrow-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-main-stage" role="button" data-slide="next">
                        <span class="icon-arrow-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </article>
            </section>
            <section class="no-sidebar clear">
                <article class="preview-3 full-width">
                    <div class="left" data-href="index_content.php">
                        <div class="h4 si-blue si-bold">FREIraum</div>
                        <p class="teaser">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        <div class="image"><img src="images/preview-001.jpg" alt=""/></div>
                        <div class="overlay-link"><a href="#" class="gt si-bold">Mehr erfahren</a></div>
                    </div>
                    <div class="middle" data-href="index_content.php">
                        <div class="wrapper">
                            <div class="h4 title si-blue si-bold">BERATUNGSASSISTENT</div>
                            <p class="teaser">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                            <div class="image"><img src="images/preview-002.jpg" alt=""/></div>
                            <div class="overlay-link"><a href="#" class="gt si-bold">Mehr erfahren</a></div>
                        </div>
                    </div>
                    <div class="right" data-href="index_content.php">
                        <div class="h4 si-blue si-bold">RATING</div>
                        <p class="teaser">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                        <div class="image"><img src="images/preview-003.jpg" alt=""/></div>
                        <div class="overlay-link"><a href="#" class="gt si-bold">Mehr erfahren</a></div>
                    </div>
                </article>
                <article class="full-width">
                    <figure class="tile-1 grundstein">
                        <div>
                            <img src="images/grundstein.jpg" alt=""/>
                        </div>
                        <div>
                            <h2 class="si-blue">Den Grundstein für Ihre Träume legen &mdash;<br>mit der besten Bausparkasse Deutschlands</h2>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                            <span class="links clear">
                                <a href="#" class="gt si-bold">Mehr erfahren</a>
                            </span>
                        </div>
                    </figure>
                </article>
                <article class="tile-4 clear">
                    <div>
                        <h2 class="si-blue si-bold">Vermögensaufbau</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy. Lorem ipsum dolor sit amet.</p>
                        <div class="more-link si-bold" data-href="index_content.php">Mehr<span class="icon-chevron-right"></span></div>
                    </div>
                    <div>
                        <h2 class="si-blue si-bold">Modernisierung/Renovieren</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy. Lorem ipsum dolor sit amet.</p>
                        <div class="more-link si-bold" data-href="index_content.php">Mehr<span class="icon-chevron-right"></span></div>
                    </div>
                    <div>
                        <h2 class="si-blue si-bold">Neubau/Kauf</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy. Lorem ipsum dolor sit amet.</p>
                        <div class="more-link si-bold" data-href="index_content.php">Mehr<span class="icon-chevron-right"></span></div>
                    </div>
                    <div>
                        <h2 class="si-blue si-bold">Anschlussfinanzierung</h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam. Lorem ipsum dolor sit amet.</p>
                        <div class="more-link si-bold" data-href="index_content.php">Mehr<span class="icon-chevron-right"></span></div>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <?php include_once 'footer.php'; ?>
        </footer>
    </body>
</html>