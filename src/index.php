<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Haartransplantation'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">
                    <div class="header__box">
                        <h1 class="header__title"><?= $title ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="mainFon">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="mainFon__box">
                            <div class="mainFon__left">
                                <div class="mainFon__imgWL">
                                    <img class="mainFon__img" src="assets/img/fon1.png" alt="" >
                                </div>
                                <div class="mainFon__btnW">
                                    <a class="mainFon__btnMessage" href="#anchor" >Jetzt Preis anfragen
                                    </a>
                                    <a class="mainFon__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                                </div>
                            </div>
                            <div class="mainFon__right">
                                <div class="mainFon__imgWR">
                                    <img class="mainFon__imgR" src="assets/img/fon2.png" alt="" >
                                    <p class="mainFon__name">Dr. Acar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <section class='commit'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='commit__box'>
                            <div class="commit__left">
                                <div class="commit__message">
                                    <div class="commit__message-left">
                                        <img class="commit__messageImg" src="assets/img/san1.jpg" alt="" >
                                    </div>
                                    <div class="commit__message__right">
                                        <p class="commit__message__name">Herr Schmidt</p>
                                        <p class="commit__message__stars">★★★★★</p>
                                        <p class="commit__message__txt">Haar Experte war großartig. Das Team war professionell und unterstützend. Ich war sehr zufrieden mit dem Ergebnis und empfehle Haar Experte jedem mit Haarausfall.</p>
                                    </div>
                                </div>
                                <div class="commit__bottom">
                                    <p class="commit__bottom-stars">⭐️⭐️⭐️⭐️⭐️</p>
                                    <p class="commit__bottom-reviews">4,89 Sterne bilden über 3.000 <br>Bewertungen 👍</p>
                                </div>
                            </div>
                            
                            <div class="commit__right">
                                <p class="commit__right-txt">Mit mehr als 10 Jahren Erfahrung bietet das Haar Experte Team in Istanbul die besten Lösungen für <b>Haartransplantationen</b>. Das Expertenteam legt großen Wert auf fortschrittliche Technologie, Qualität und zuverlässige Gesundheitsversorgung bei allen Behandlungen, einschließlich Bart- und Augenbrauentransplantationen.</p>
                                <ul class="commit__right-ul">
                                    <li>Deutscher Kundenservice</li>
                                    <li>Operationstermins</li>
                                    <li>Flug und Hotel</li>
                                    <li>Online-Haarberatung</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='mainFonMobile'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 containerP0'>
                        <div class='mainFonMobile__box'>
                            <div class="mainFonMobile__imgW">
                                <img class="mainFonMobile__img" src="assets/img/fon1.png" alt="" >
                            </div>
                            <ul class="mainFonMobile__ul">
                                <li>Deutscher Kundenservice</li>
                                <li>Operationstermins</li>
                                <li>Flug und Hotel</li>
                                <li>Online-Haarberatung</li>
                            </ul>
                            <div class="mainFonMobile__btnMW">
                                <a class="mainFonMobile__btnM" href="#anchor" >Jetzt Preis anfragen</a>
                            </div>
                            <div class="mainFonMobile__img2W">
                                <img class="mainFonMobile__img2" src="assets//img/fon2.png" alt="" >
                                <p class="mainFonMobile__name">Dr. Acar</p>
                            </div>
                            <p class="mainFonMobile__txt">Mit mehr als 10 Jahren Erfahrung bietet das Haar Experte Team in Istanbul die besten Lösungen für <b>Haartransplantationen</b>. Das Expertenteam legt großen Wert auf fortschrittliche Technologie, Qualität und zuverlässige Gesundheitsversorgung bei allen Behandlungen, einschließlich Bart- und Augenbrauentransplantationen.</p>
                            <div class="mainFonMobile__btnTW">
                                <a class="mainFonMobile__btnT" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                            <div class="commit__left">
                                <div class="commit__message">
                                    <div class="commit__message-left">
                                        <img class="commit__messageImg" src="assets/img/san1.jpg" alt="" >
                                    </div>
                                    <div class="commit__message__right">
                                        <p class="commit__message__name">Herr Schmidt</p>
                                        <p class="commit__message__stars">★★★★★</p>
                                        <p class="commit__message__txt">Haar Experte war großartig. Das Team war professionell und unterstützend. Ich war sehr zufrieden mit dem Ergebnis und empfehle Haar Experte jedem mit Haarausfall.</p>
                                    </div>
                                </div>
                                <div class="commit__bottom">
                                    <p class="commit__bottom-stars">⭐️⭐️⭐️⭐️⭐️</p>
                                    <p class="commit__bottom-reviews">4,89 Sterne bilden über 3.000 <br>Bewertungen 👍</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='beforeAfter'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='beforeAfter__box'>
                            <div class="beforeAfter__left">
                                <img class="beforeAfter__img" src="assets/img/Home-2.png" alt="" >
                            </div>
                            <div class="beforeAfter__right">
                                <img class="beforeAfter__img" src="assets/img/Home-3.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='hairTransplantation'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='hairTransplantation__box'>
                            <div class="hairTransplantation__left">
                                <h2 class="hairTransplantation__title">Haartransplantationen</h2>
                                <p class="hairTransplantation__txt">Bei der Haartransplantation bei Haar Experte werden Haarfollikel aus dem Spenderbereich entnommen und in vorbereitete Kanäle übertragen. Die Harmonie zwischen den Transplantaten und den Kanälen ist entscheidend für den Erfolg der Behandlung. Zu große Grafte können zu beschädigten Transplantaten führen, die nicht richtig wachsen und ausfallen können. Wenn die Kanäle im Vergleich zu den Transplantaten breit sind, kann es zu Gewebezerstörungen und Narbenbildungen kommen. Auch die Kanaltiefe spielt eine wichtige Rolle, da zu flache oder zu tiefe Kanäle das Wachstum der Haarwurzeln beeinträchtigen können. Bei Haar Experte sorgen die Spezialisten mit über 10 Jahren Erfahrung für natürliche Ergebnisse.</p>
                            </div>
                            <div class="hairTransplantation__right">
                                <img class="hairTransplantation__img" src="assets/img/5.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='dhiTechnique'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='dhiTechnique__box'>
                            <div class="dhiTechnique__left">
                                <p class="dhiTechnique__top">DHI Technik HAARTRANSPLANTATION</p>
                                <div class="dhiTechnique__bottom">
                                    <ul class="dhiTechnique__ul">
                                        <li>✓ DHI-Haartransplantation</li>
                                        <li>✓ Nadelfreie Lokalanästhesie (Extra)</li>
                                        <li>✓ Körperhaartransplantation (Extra)</li>
                                        <li>✓ Mesotherapie-Behandlung</li>
                                        <li>✓ Beratung vor und nach der Operation</li>
                                        <li>✓ Professionelles Team</li>
                                        <li>✓ Unterkunft und Transport</li>
                                        <li>✓ Bluttests</li>
                                        <li>✓ Arzneimittel und postoperative</li>
                                        <li>✓ 20 Jahre Garantiezertifikat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dhiTechnique__right">
                                <p class="dhiTechnique__top">BARTTRANSPLANTATION</p>
                                <div class="dhiTechnique__bottom">
                                    <ul class="dhiTechnique__ul">
                                        <li>✓ DHI- und FUE-Barttransplantation</li>
                                        <li>✓ Nadelfreie Lokalanästhesie (Extra)</li>
                                        <li>✓ Körperhaartransplantation (Extra)</li>
                                        <li>✓ Mesotherapie-Behandlung</li>
                                        <li>✓ Beratung vor und nach der Operation</li>
                                        <li>✓ Professionelles Team</li>
                                        <li>✓ Unterkunft und Transport</li>
                                        <li>✓ Bluttests</li>
                                        <li>✓ Pharmazeutika und postoperative</li>
                                        <li>✓ 20-Jahres-Garantiezertifikat</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='requestQuote'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='requestQuote__box'>
                            <div class="requestQuote__left">
                                <p class="requestQuote__txt">Haar Expert Klinik bietet Ihnen nicht nur eine hochwertige Haartransplantation, sondern stellt auch ein Premium-Hotel zur Verfügung. Alles ist im Preis inklusive, damit Sie sich um nichts kümmern müssen. So können Sie sich voll und ganz auf Ihre Genesung und Erholung konzentrieren.</p>
                                <a class="requestQuote__btnM" href="#anchor" >Jetzt Preis anfragen</a>
                            </div>
                            <div class="requestQuote__right">
                                <img class="requestQuote__img" src="assets/img/7.png" alt="" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='safeConduct'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-12 container'>
                        <div class='safeConduct__box'>
                            <div class="safeConduct__left">
                                <img class="safeConduct__img" src="assets/img/8.png" alt="" >
                            </div>
                            <div class="safeConduct__right">
                                <p class="safeConduct__txt">Die Haar Expert Klinik ist mit modernster Ausrüstung und Werkzeugen ausgestattet, um die bestmögliche Haartransplantationserfahrung für ihre Patienten zu gewährleisten. Das Team von Spezialisten nutzt fortschrittliche Technologien und Werkzeuge, um die Transplantationen effektiv und sicher durchzuführen.</p>
                                <a class="safeConduct__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms' id="anchor">
           <div class='forms__wrapper'>
              <div class='container-fluid'>
                 <div class='row'>
                    <div class='col-12 container'>
                       <div class='forms__box'>
                          <h2 class='forms__title'>Kontaktieren Sie uns:</h2>
                          <form id='jq_form' class='mb-0 mt-3'>
                             <div class='my-0'>
                                <input class='form-control' placeholder='Name' name='jq_name' type='text'>
                                <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Telefonnummer' name='jq_phone' type='text'>
                                <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Straße' name='jq_street' type='text'>
                                <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='Postleitzahl/Stadt' name='jq_city' type='text'>
                                <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div class='my-4'>
                                <textarea rows='5' class='form-control ww' name='jq_text' placeholder='Beschreibung'></textarea>
                                <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Dies ist ein Pflichtfeld.</div>
                             </div>
                             <div>
                                <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Senden'>
                             </div>
                             <div id='jq_success' style='display:none'>Vielen Dank für Ihre Anfrage. Unsere Mitarbeiter werden sich in Kürze bei Ihnen melden.</div>
                          </form>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a href="<?= $phone_href ?>" class="btnFixed__T"></a>
                <a href="https://api.whatsapp.com/send?phone=436604275976" class="btnFixed__M">
                   <img class="btnFixed__imgM" src="assets/icons/WhatsApp.svg" alt="" >
                </a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2023</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>