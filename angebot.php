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
                    <img src="images/top-01.jpg" class="large" alt=""/>
                    <img src="images/top-01-t.jpg" class="medium" alt=""/>
                    <img src="images/top-01-m.jpg" class="small" alt=""/>
                </article>
                <article class="intro-over">
                    <h2 class="si-bold">Basis Rente</h2>
                    <div>Gut zu wissen, dass die Basis gesichert ist.</div>
                </article>
            </section>
            <section class="no-sidebar clear"><!-- no-sidebar -->
                <article class="breadcrumb">
                    <a href="#">Start</a>
                    <a href="#">Privatkunden</a>
                    <a href="#">Hab & Gut</a>
                    <a href="#">Privat-Haftpflicht</a>
                </article>
                <article>
                    <div class="h7">Privat-Haftpflicht</div>
                    <h1 class="si-blue">Angebotsanfrage</h1>
                </article>
            </section>
            <section class="with-sidebar clear">
                <article class="info_boxes formular clear">
                    <div class="nav-set">
                        <figure class="left">
                            <label for="check-tab-1" class="active">
                                <span class="outer">
                                    <span class="inner">
                                        <ul class="label-item">
                                            <li class="label-circle"><span class="number">1</span></li>
                                            <li class="text-label">Tarifdaten</li>
                                            <li class="icon-arrowdown6"></li>
                                        </ul>
                                    </span>
                                </span>
                            </label>
                        </figure>
                        <figure class="left">
                            <label for="check-tab-2" class="inactive">
                                <span class="outer">
                                    <span class="inner">
                                        <ul class="label-item">
                                            <li class="label-circle"><span class="number">2</span></li>
                                            <li class="text-label">Ihre Daten</li>
                                            <li class="icon-arrowdown6"></li>
                                        </ul>
                                    </span>
                                </span>
                            </label>
                        </figure>
                        <figure class="right">
                            <label for="check-tab-3" class="inactive">
                                <span class="outer">
                                    <span class="inner">
                                        <ul class="label-item">
                                            <li class="label-circle"><span class="number">3</span></li>
                                            <li class="text-label">Übersicht</li>
                                        </ul>
                                    </span>
                                </span>
                            </label>
                        </figure>
                    </div>
                    <div class="content-box">
                        <input type="radio" id="check-tab-1" name="info-check-grp" class="info-check-grp" checked="checked">
                        <aside class="info_content_overbox">
                            <form name="tab-1" id="tab-1" method="multipart/form-data">
                                <div class="h4 si-blue">Ich wünsche folgende Deckungssummen</div>
                                <div class="clear">
                                    <div class="tile-2 no-border">
                                        <ul class="tarife">
                                            <li class="title si-white">Tarif Variante Exklusiv</li>
                                        </ul>
                                        <ul class="tarife">
                                            <li class="middle">
                                                <ul class="vorteile">
                                                    <li>15 Mio.EUR pauschal für Personen- und Sachschäden</li>
                                                    <li>1. Mio. EUR für Vermögensschäden</li>
                                                    <li>max. 8 Mio. EUR je geschädigter Person</li>
                                                </ul>
                                                <span class="question-mark"></span>
                                                <div class="info-box">
                                                    <div class="msg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="tarife">
                                            <li class="footer" data-require="n">
                                                <input type="radio" name="tarife" id="tarif_variante_exklusive" value="tarif_1" class="styled" />
                                                <span class="tarif si-bold"><label for="tarif_variante_exklusive">Tarif wählen</label></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tile-2 no-border">
                                        <ul class="tarife">
                                            <li class="title si-white">Tarif Variante Exklusiv</li>
                                        </ul>
                                        <ul class="tarife">
                                            <li class="middle">
                                                <ul class="vorteile">
                                                    <li>15 Mio.EUR pauschal für Personen- und Sachschäden</li>
                                                    <li>1. Mio. EUR für Vermögensschäden</li>
                                                </ul>
                                                <span class="question-mark"></span>
                                                <div class="info-box">
                                                    <div class="msg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</div>
                                                    <div class="si-bold icon-x"></div>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="tarife">
                                            <li class="footer" data-require="n">
                                                <input type="radio" name="tarife" id="tarif_variante_optimal" value="tarif_2" class="styled" />
                                                <span class="tarif si-bold"><label for="tarif_variante_optimal">Tarif wählen</label></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="h4 si-blue">Ich wünsche den Einschluss folgender Zusatzrisiken</div>
                                <div class="formular-box">
                                    <aside class="box-form zusatz-offset">
                                        <div class="form-zusatz-1" data-require="n">
                                            <div class="wrapper">
                                                <input type="checkbox" id="tierhalterrisiko" class="styled" name="tierhalterrisiko">
                                                <label for="tierhalterrisiko"><span class="si-bold">Tierhalterrisiko für Hunde und Pferde</span><span class="hide768"><br>&nbsp;</span></label>
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
                                        <div class="form-zusatz-2" data-require="n">
                                            <div class="wrapper">
                                                <input type="checkbox" id="gewaesserschadensrisiko" class="styled" name="gewaesserschadensrisiko">
                                                <label for="gewaesserschadensrisiko" class="clearfix"><span class="si-bold">Gewässerschadensrisiko</span>
                                                <br>durch private Heizöltanks im Erdreich bei einem Ein-/Zweifamilienhaus</label>
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

                                <div class="btn-wrapper">
                                    <a href="#" class="si-white si-bold btn-blue btn-phat submit">weiter</a>
                                </div>
                            </form>
                        </aside>
                        <input type="radio" id="check-tab-2" name="info-check-grp" class="info-check-grp">
                        <aside class="info_content_overbox">
                            <form name="tab-2" id="tab-2" method="multipart/form-data">
                                <div class="formular-box" data-position="1">
                                    <div class="box-title si-blue">Angaben zur Person</div>
                                    <aside class="box-form">
                                        <div class="form-anrede" data-require="y">
                                            <label for="anrede">Anrede/Titel</label>
                                            <div class="wrapper">
                                                <select name="anrede" id="anrede">
                                                    <option value="anrede">Bitte auswählen</option>
                                                    <option value="Herr">Herr</option>
                                                    <option value="Frau">Frau</option>
                                                </select>
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                            <span class="icon-achtung-round"></span>
                                            <div class="error-box">
                                                <div class="msg">Testerror Text</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                        <div class="form-vorname" data-require="y">
                                            <label for="vorname">Vorname</label>
                                            <div class="wrapper">
                                                <input type="text" name="vorname" id="vorname">
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                            <span class="icon-achtung-round"></span>
                                            <div class="error-box">
                                                <div class="msg">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                        <div class="form-nachname" data-require="y">
                                            <label for="nachname">Name</label>
                                            <div class="wrapper">
                                                <input type="text" name="nachname" id="nachname">
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
                                        <div class="form-geburtsdatum" data-require="n">
                                            <label for="geburtsdatum">Geburtsdatum <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <input type="text" name="geburtsdatum" id="geburtsdatum" placeholder="TT MM JJJJ">
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                        <div class="form-familienstand" data-require="n">
                                            <label for="familienstand">Familienstand <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <input type="text" name="familienstand" id="familienstand">
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="formular-box" data-position="2">
                                    <div class="box-title si-blue">Kontaktinformationen</div>
                                    <aside class="box-form">
                                        <div class="form-strasse-hausnr" data-require="y">
                                            <label for="strasse">Straße / </label>
                                            <label for="hausnr">Hausnr.</label>
                                            <div class="wrapper">
                                                <input type="text" name="strasse" id="strasse">
                                                <input type="text" name="hausnr" id="hausnr">
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
                                        <div class="form-plz-ort" data-require="y">
                                            <label for="plz">PLZ / </label>
                                            <label for="ort">Ort</label>
                                            <div class="wrapper">
                                                <input type="text" name="plz" id="plz">
                                                <input type="text" name="ort" id="ort">
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
                                        <div class="form-email" data-require="n">
                                            <label for="email">E-Mailadresse <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <input type="text" name="email" id="email">
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
                                        <div class="form-telefon" data-require="n">
                                            <label for="telefon">Telefon <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <input type="text" name="telefon" id="telefon">
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                        <div class="form-mobiltelefon" data-require="n">
                                            <label for="mobiltelefon">Mobiltelefon <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <input type="text" name="mobiltelefon" id="mobiltelefon">
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                        <div class="form-angebotsversand" data-require="n">
                                            <label for="angebotsversand">Angebotsversand <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <span class="first">
                                                    <input type="radio" name="angebotsversand" id="angebotsversand-post" value="angebotsversand-post" class="styled"><label for="angebotsversand-post" class="per-post"> Per Post</label>
                                                </span>
                                                <span class="second">
                                                    <input type="radio" name="angebotsversand" id="angebotsversand-email" value="angebotsversand-email" class="styled"><label for="angebotsversand-email" class="per-email"> Per E-Mail</label>
                                                </span>
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="formular-box" data-position="3">
                                    <div class="box-title si-blue">Kundeninformation</div>
                                    <aside class="box-form">
                                        <div class="wrapper">Ich habe bereits eine Versicherungsnummer der ALIAS UNDING Gruppe:</div>
                                        <div class="form-kundeninfo-ja" data-require="y">
                                            <div class="wrapper">
                                                <input type="radio" name="kundeninfo" id="kundeninfo-ja" value="kundeninfo-ja" class="styled">
                                                <label for="kundeninfo-ja">Ja, meine Versicherungsnummer</label>
                                                <input type="text" name="versicherungsnr" id="versicherungs-nr">
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
                                        <div class="form-kundeninfo-no" data-require="y">
                                            <div class="wrapper">
                                                <input type="radio" name="kundeninfo" id="kundeninfo-no" value="kundeninfo-nein" class="styled">
                                                <label for="kundeninfo-no">Nein, keine vorhanden</label>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#" class="si-bold btn-gray btn-phat back">zurück</a>
                                    <a href="#" class="si-white si-bold btn-blue btn-phat submit">weiter</a>
                                </div>
                            </form>
                        </aside>
                        <input type="radio" id="check-tab-3" name="info-check-grp" class="info-check-grp">
                        <aside class="info_content_overbox">
                            <form name="tab-3" id="tab-3" method="multipart/form-data">
                                <div class="formular-box" data-step="1">
                                    <div class="box-title si-blue icon-signatur">Ihr gewählter Tarif</div>
                                    <aside class="box-form ihr-gewaehlter-tarif tarif_1">
                                        <div class="wrapper">
                                            <div class="title si-bold si-blue">Tarif Variante Exklusiv 1</div>
                                            <ul class="vorteile">
                                                <li>15 Mio.EUR pauschal für Personen- und Sachschäden</li>
                                                <li>1. Mio. EUR für Vermögensschäden</li>
                                            </ul>
                                            <div class="title si-bold si-blue einschluss-zusatzrisiken">Einschluss Zusatzrisiken</div>
                                            <div class="zusatztarife">
                                                <div class="zusatz-1">Tierhalterrisiko für Hunde und Pferde</div>
                                                <div class="zusatz-2">Gewässerschadensrisiko</div>
                                            </div>
                                        </div>
                                    </aside>
                                    <aside class="box-form ihr-gewaehlter-tarif tarif_2">
                                        <div class="wrapper">
                                            <div class="title si-bold si-blue">Tarif Variante Exklusiv 2</div>
                                            <ul class="vorteile">
                                                <li>15 Mio.EUR pauschal für Personen- und Sachschäden</li>
                                                <li>1. Mio. EUR für Vermögensschäden</li>
                                            </ul>
                                            <div class="title si-bold si-blue einschluss-zusatzrisiken">Einschluss Zusatzrisiken</div>
                                            <div class="zusatztarife">
                                                <div class="zusatz-1">Tierhalterrisiko für Hunde und Pferde</div>
                                                <div class="zusatz-2">Gewässerschadensrisiko</div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="formular-box" data-step="2">
                                    <div class="box-title si-blue icon-signatur">Ihre persönlichen Daten</div>
                                    <aside class="box-form">
                                        <div class="form-datenanzeigen">
                                            <div class="wrapper">
                                                <div class="personal-data clear">
                                                    <div class="left-site">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td data-out-personal="anrede_vorname_nachname" class="si-bold">Herr Max Mustermann</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-out-personal="strasse_hausnr">Christoph-Probst-Weg 31</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-out-personal="plz_ort">20251 Hamburg</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="right-site">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td>Geburtstag:</td>
                                                                <td data-out-personal="geburtsdatum" class="geburtsdatum">24.12.1960</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Familienstand:</td>
                                                                <td data-out-personal="familienstand" class="familienstand">verheiratet</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="left-site">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td class="si-bold">Telefon</td>
                                                            </tr>
                                                            <tr>
                                                                <td  class="si-bold">Mobiltelefon</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="si-bold">E-Mailadresse</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="si-bold">Kundeninformation</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="si-bold">Angebotsversand</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="right-site">
                                                        <table cellspacing="0" cellpadding="0" border="0">
                                                            <tr>
                                                                <td data-out-personal="telefon" colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td data-out-personal="mobiltelefon" colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td data-out-personal="email" colspan="2"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" data-out="kundeninfo"></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2" data-out="angebotsversand"></td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="formular-box">
                                    <div class="box-title si-blue">Zusatzinformationen</div>
                                    <aside class="box-form">
                                        <div class="form-mitteilung" data-require="n">
                                            <label for="mitteilung">Mitteilung an uns <span class="optional">(optional)</span></label>
                                            <div class="wrapper">
                                                <textarea name="mitteilung" id="mitteilung"></textarea>
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                        <div class="check-text-wrapper">
                                            <div class="datenschutz-check">
                                                <input type="checkbox" id="email_kopie" class="styled" name="email_kopie">
                                            </div>
                                            <div class="datenschutz" data-require="n">
                                                <label for="email_kopie" class="si-bold">Ich wünsche eine Kopie der von mir eingegebenen Daten per E-Mail</label>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="formular-box" data-position="1">
                                    <div class="box-title si-blue">Datenschutz</div>
                                    <aside class="box-form">
                                        <div class="form-datenschutz" data-require="y">
                                            <div class="wrapper">
                                                <div class="datenschutz">
                                                    <div class="datenschutz-check">
                                                        <input type="checkbox" id="datenschutz" class="styled" name="datenschutz">
                                                    </div>
                                                    <label for="datenschutz">Ja, Lorem ipsum dolor sit amet, <a href="#" class="si-bold si-black">Datenschutzerklärung</a> sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</label>
                                                </div>
                                            </div>
                                            <span class="question-mark"></span>
                                            <div class="info-box">
                                                <div class="msg">Lorem ipsum dolor</div>
                                                <div class="si-bold icon-x"></div>
                                            </div>
                                        </div>
                                    </aside>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#" class="si-bold btn-gray btn-phat back">zurück</a>
                                    <a href="#" class="si-white si-bold btn-orange btn-phat submit">Jetzt absenden</a>
                                </div>
                            </form>
                        </aside>
                    </div>
                </article>
                <article class="show768 show985">
                    <div class="ssl-sicherheit"><span class="icon-schloss"></span>128 Bit SSL-Sicherheit</div>
                    <div class="hotline-hilfe"><span class="icon-phone"></span><a href="tel: +49 231 135 77 88" class="si-call">0231 135 77 88 (Mo-Fr 7-20 Uhr)</a></div>
                </article>
                <article class="banner-row">
                    <div class="adv">
                        <div class="banner banner-sicherheit">
                            <ul>
                                <li class="title si-blue"><span class="icon-schloss"></span>&nbsp;<span class="si-bold">SICHERHEIT</span></li>
                                <li class="si-bold">SSL-verschlüsselt:</li>
                                <li>Ihre Daten werden mit 128 Bit SSL sicher verschlüsselt übertragen.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="adv">
                        <div class="banner banner-hotline">
                            <ul>
                                <li class="title si-blue"><span class="icon-phone"></span>&nbsp;<span class="si-bold">HOTLINE</span></li>
                                <li class="si-bold">Brauchen Sie Hilfe?</li>
                                <li>Wir helfen Ihnen gern!<br><span class="si-bold">0231 135 77 88</span><br>Mo-Fr 7-20 Uhr</li>
                            </ul>
                        </div>
                    </div>
                </article>
            </section>
        </main>
        <footer>
            <?php include_once 'footer.php'; ?>
        </footer>
    </body>
</html>