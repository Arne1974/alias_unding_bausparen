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
                <article class="banner-carousel full-width">
                    <h3 class="si-blue si-bold">Mehrfach ausgezeichneter Arbeitgeber und Ausbilder</h3>
                    <div class="wrapper">
                        <a id="prev2" class="icon-arrow-left" href="#" style="display: inline;"></a>
                        <div class="list_carousel">
                            <ul id="bannerCarousel">
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-1" data-fancybox-group="gallery1"><img src="images/banner_001.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-2" data-fancybox-group="gallery1"><img src="images/banner_002.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-3" data-fancybox-group="gallery1"><img src="images/banner_003.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-4" data-fancybox-group="gallery1"><img src="images/banner_004.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-5" data-fancybox-group="gallery1"><img src="images/banner_005.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-6" data-fancybox-group="gallery1"><img src="images/banner_006.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-7" data-fancybox-group="gallery1"><img src="images/banner_007.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-8" data-fancybox-group="gallery1"><img src="images/banner_008.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-9" data-fancybox-group="gallery1"><img src="images/banner_009.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-10" data-fancybox-group="gallery1"><img src="images/banner_010.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-11" data-fancybox-group="gallery1"><img src="images/banner_011.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-12" data-fancybox-group="gallery1"><img src="images/banner_012.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-13" data-fancybox-group="gallery1"><img src="images/banner_013.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-14" data-fancybox-group="gallery1"><img src="images/banner_014.jpg" alt=""/></a></li>
                                <li><a href="#banner-inline" class="banner-fancybox" data-name="banner-page-15" data-fancybox-group="gallery1"><img src="images/banner_015.jpg" alt=""/></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <a id="next2" class="icon-arrow-right" href="#"></a>
                    </div>
                    <div id="banner-inline">
                        <div class="banner-page banner-page-1">
                            <div class="fb-title"><h3>Stiftung Warentest 1</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-2">
                            <div class="fb-title"><h3>Stiftung Warentest 2</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-3">
                            <div class="fb-title"><h3>Stiftung Warentest 3</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-4">
                            <div class="fb-title"><h3>Stiftung Warentest 4</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-5">
                            <div class="fb-title"><h3>Stiftung Warentest 5</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-6">
                            <div class="fb-title"><h3>Stiftung Warentest 6</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-7">
                            <div class="fb-title"><h3>Stiftung Warentest 7</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-8">
                            <div class="fb-title"><h3>Stiftung Warentest 8</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-9">
                            <div class="fb-title"><h3>Stiftung Warentest 9</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-10">
                            <div class="fb-title"><h3>Stiftung Warentest 10</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-11">
                            <div class="fb-title"><h3>Stiftung Warentest 11</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-12">
                            <div class="fb-title"><h3>Stiftung Warentest 12</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-13">
                            <div class="fb-title"><h3>Stiftung Warentest 13</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-14">
                            <div class="fb-title"><h3>Stiftung Warentest 14</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <div class="banner-page banner-page-15">
                            <div class="fb-title"><h3>Stiftung Warentest 15</h3></div>
                            <div class="fb-img"><img src="images/karriere-rating.jpg" alt=""></div>
                            <div class="fb-content">
                                <div class="pre-title si-bold">Lorem ipsum dolor sit amet</div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </article>
                <script type="text/javascript">
                    jQuery(document).ready(function() {
                        //Banner: Image-in-detail
                        jQuery('.banner-fancybox').fancybox({
                            padding: 0,
                            maxWidth: 525,
                            maxHeight: 540,
                            aspectRatio: false,
                            fitToView: true,
                            autoResize: true,
                            autoSize: true,
                            autoCenter: true,
                            closeClick: false,
                            openEffect: 'none',
                            closeEffect: 'none',
                            helpers: {
                                title : {
                                    type : 'float'
                                }
                            },
                            afterLoad: function (){
                                var elem = jQuery('#banner-inline'),
                                    objName = this.element.data('name');
                                elem.children('.banner-page').hide();
                                elem.children('.'+objName).show();
                            },
                            afterShow: function() {
                                jQuery('.fancybox-wrap').swipe({
                                    swipe : function(event, direction) {
                                        if (direction === 'left') {
                                            jQuery.fancybox.prev( direction );
                                        } else if (direction === 'right'){
                                            jQuery.fancybox.next( direction );
                                        } else {
                                            return false;
                                        }
                                    }
                                });

                            },
                        });

                        //Banner Carousel
                        jQuery('#bannerCarousel').carouFredSel({
                            responsive: true,
                            width: '100%',
                            height: '90px',
                            align: 'left',
                            padding: 0,
                            prev: '#prev2',
                            next: '#next2',
                            auto: false,
                            scroll: {
                                items: 2
                            },
                            items: {
                                width: 200,
                            //	height: '30%',	//	optionally resize item-height
                                visible: {
                                    min: 2,
                                    max: 6
                                }
                            },
                        });
                    });
                </script>
            </section>
        </main>
        <footer>
            <?php include_once 'footer.php'; ?>
        </footer>
    </body>
</html>