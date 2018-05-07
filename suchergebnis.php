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
                <article>
                    <img src="images/suchergebnis.jpg" class="large" alt=""/>
                    <img src="images/suchergebnis-t.jpg" class="medium" alt=""/>
                    <img src="images/suchergebnis-m.jpg" class="small" alt=""/>
                </article>
            </section>
            <section class="with-sidebar clear">
                <article class="no-breadcrumb">
                    <div class="h7">Service</div>
                    <h1 class="si-blue">Suchergebnis</h1>
                    <h2 class="si-blue si-bold">Lorem Ipsum dolor parenium kali</h2>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                </article>
                <article class="search-configuration">
                    <span>Sortierung&nbsp;
                        <select class="modi">
                            <option value="relevanz">Relevanz</option>
                            <option value="relevanz">Relevanz</option>
                            <option value="relevanz">Relevanz</option>
                        </select>
                    </span>
                    <span>
                        Treffer pro Seite&nbsp;
                        <select class="hits-per-page">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20" selected>20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    
                    </span>
                    <span><input type="text" placeholder="Reiseversicherung ...">&nbsp;<a href="#" class="icon-search-find"></a></span>
                </article>
                <article class="search-pagination">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </article>
                <article class="search-result">
                    <div class="h7 si-bold"><span class="si-orange">Reiseversicherung</span></div>
                    <p class="date">Erstellt am 27.09.2015 / letzte Änderung 27.09.2015</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <p class="links"><a href="#"><span class="gt">Produkte / Sparten</span><span class="gt">Kundensegmente / justo duo dolores et ea rebum</span></a></p>
                </article>
                <article class="search-result">
                    <div class="h7 si-bold">Consetetur sadipscing elitr <span class="si-orange">Reiseversicherung</span> sed diam nonumy eirmod tempor</div>
                    <p class="date">Erstellt am 27.09.2015 / letzte Änderung 27.09.2015</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod <span class="si-orange">Reiseversicherung</span> invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <p class="links"><a href="#"><span class="gt">Produkte / Sparten</span><span class="gt">Kundensegmente / justo duo dolores et ea rebum</span></a></p>
                </article>
                <article class="search-result">
                    <div class="h7 si-bold"><span class="si-orange">Reiseversicherung</span> sed diam nonumy eirmod tempor</div>
                    <p class="date">Erstellt am 27.09.2015 / letzte Änderung 27.09.2015</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam <span class="si-orange">Reiseversicherung</span>. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                    <p class="links"><a href="#"><span class="gt">Produkte / Sparten</span><span class="gt">Kundensegmente / justo duo dolores et ea rebum</span></a></p>
                </article>
                <article class="search-pagination">
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </article>
            </section>
        </main>
        <footer>
            <?php include_once 'footer.php'; ?>
        </footer>
    </body>
</html>