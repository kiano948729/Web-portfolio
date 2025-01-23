<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
    <script src="../script.js"></script>
</head>

<body>
    <header>
        <?php require_once("../components/header.php") ?>
    </header>
    <!-- Introductie met een sterke visual impact -->
    <main class="about-page-body">
        <div class="about-page-main">

            <div class="about-page-div">
                <div class="about-div-number">
                    <p>01</p>
                    <p>__</p>
                </div>
                <div class="about-div-title">
                    <h1 class="about-div-h1">PASSIE</h1>
                </div>
                <div class="about-div-postion">
                    <i class="fa-solid fa-heart-circle-check" style="color: #FFD43B;"></i>
                    <p class="about-div-p">Ik ben
                        een
                        sportieve persoon die graag sporten beoefent Beweging geeft me energie en helpt me zowel fysiek
                        als mentaal in balans te blijven.</p>
                </div>
                <div class="about-div-button">
                    <div class="about-div-media">
                        <button><i class="fa-solid fa-person-walking" style="color: #FFD43B;"></i>Basics</button>
                        <button><i class="fa-solid fa-person-running" style="color: #FFD43B;"></i>Sport</button>
                    </div>
                    <div>
                        <button><i class="fa-solid fa-dumbbell" style="color: #FFD43B;"></i>Kracht</button>
                    </div>
                </div>
                <div class="about-div-arrow">
                    <button id="toggle-slide-up" class="about-div-button-more">
                        <i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <div id="slideUpContent" class="slide-up-container">
                <div class="slide-up-div">
                    <div class="slide-up-boxAlign">
                        <div class="slide-up-box">
                            <h2>Passie</h2>
                            <p>
                                Als een enthousiast en actief persoon voel ik me aangetrokken tot activiteiten die zowel
                                mijn
                                lichaam als mijn
                                geest uitdagen. Hier zijn een paar van mijn favoriete bezigheden:
                            </p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Sporten<i class="fas fa-dumbbell"></i></h2>
                            <p> Het opbouwen van kracht en conditie geeft me niet alleen
                                fysieke
                                energie, maar scherpt ook mijn mentale focus. Ik geniet van het doorbreken van mijn
                                eigen
                                grenzen en het gevoel van voldoening na elke workout.
                            </p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Hiken & Wildkamperen <i class="fas fa-hiking"></i></h2>
                            <p>De natuur biedt mij rust en avontuur
                                tegelijk.
                                Wandelen door prachtige landschappen en slapen onder de sterrenhemel inspireert mij
                                en
                                geeft
                                me de kans om echt te ontsnappen aan de dagelijkse drukte. Het versterkt mijn
                                connectie
                                met
                                de wereld om me heen.</p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Gamen<i class="fas fa-gamepad"></i></h2>
                            <p>Gamen Voor mij is gamen meer dan een hobby - het is een
                                creatieve
                                uitlaatklep. Of het nu gaat om strategisch denken of samenwerken in teams, ik
                                gebruik
                                gamen
                                om mijn probleemoplossend vermogen en reflexen scherp te houden.</p>
                        </div>
                    </div>
                    <div class="slide-up-box-photo">
                        <img src="../img/personalPhoto/IMG_7710.jpg">
                    </div>
                </div>
            </div>
            <div class="about-page-div">
                <div class="about-div-number">
                    <p>02</p>
                    <p>__</p>
                </div>
                <div class="about-div-title">
                    <h1 class="about-div-h1">KIANO</h1>
                </div>
                <div class="about-div-postion">
                    <i class="fa-solid fa-user-graduate" style="color: #FFD43B;"></i>
                    <p class="about-div-p">Ik ben een rustig persoon, iemand die kalmte uitstraalt en graag een
                        evenwichtige omgeving creëert.</p>
                </div>
                <div class="about-div-button">
                    <div class="about-div-media">
                        <button><i class="fa-solid fa-earth-americas" style="color: #FFD43B;"></i>Ik</button>
                        <button><i class="fa-solid fa-house-laptop" style="color: #FFD43B;"></i>Doel</button>
                    </div>
                    <div>
                        <button><i class="fa-solid fa-truck-fast" style="color: #FFD43B;"></i>Drijf</button>
                    </div>
                </div>
                <div class="about-div-arrow">
                    <button id="toggle-slide-up1" class="about-div-button-more">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div id="slideUpContent1" class="slide-up-container1">
                <div class="slide-up-div">
                    <div class="slide-up-boxAlign">
                        <div class="slide-up-box">
                            <h2>Over Mij</h2>
                            <p>
                                Mijn naam is Kiano Klootwijk, en ik sta bekend als een rustig en kalm persoon. Ik hou
                                van
                                eenvoud en
                                een
                                evenwichtige omgeving waarin ik mezelf volledig kan zijn. Rust is een belangrijk aspect
                                van
                                mijn
                                persoonlijkheid;
                                het helpt me om gefocust te blijven en mijn creativiteit de ruimte te geven. Hoewel ik
                                van
                                nature
                                iemand ben die
                                graag tijd alleen doorbrengt, betekent dit niet dat ik mij afsluit van de wereld om mij
                                heen.
                            </p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Persoonlijke Kwaliteiten <i class="fas fa-user"></i></h2>
                            <p>Een van mijn sterke kanten is mijn vermogen om zelfstandig te werken. Ik voel me op mijn
                                gemak
                                wanneer ik in alle rust aan mijn taken kan werken, en ik weet hoe ik mijn eigen
                                structuur moet
                                creëren. Tegelijkertijd weet ik mijn kalmte en analytisch vermogen te combineren met
                                effectieve
                                communicatie in samenwerkingen.</p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Zelfreflectie en Balans <i class="fas fa-balance-scale"></i></h2>
                            <p>Doordat ik veel tijd besteed aan reflecteren en nadenken, weet ik goed wat mijn doelen
                                zijn en
                                waar ik gelukkig van word. Ik hecht veel waarde aan balans - tussen werk en ontspanning,
                                actie
                                en rust, solo-activiteiten en teamwork.</p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Samenwerken of Alleen Werken <i class="fas fa-users"></i></h2>
                            <p>Als rustige persoonlijkheid geniet ik van taken waarin ik me volledig kan onderdompelen
                                zonder
                                afleidingen. Toch zie ik samenwerken als een kans om te leren van anderen en
                                gezamenlijke
                                successen te behalen. Mijn kalme karakter brengt stabiliteit en geduld naar elk team
                                waarin ik
                                werk.</p>
                        </div>
                        <div class="slide-up-box">
                            <h2>Mijn Missie <i class="fas fa-flag-checkered"></i></h2>
                            <p>Als individu streef ik ernaar om altijd in balans te blijven: gefocust, reflectief en
                                doelgericht.
                                Of ik nu alleen aan iets werk of deel uitmaak van een groter geheel, mijn rustige en
                                betrouwbare
                                aard helpt me om anderen te inspireren en te motiveren.</p>
                        </div>
                    </div>
                    <div class="slide-up-box-photo">
                        <img src="../img/personalPhoto/IMG_8160.PNG">
                    </div>
                </div>
            </div>

            <div class="about-page-div">
                <div class="about-div-number">
                    <p>03</p>
                    <p>__</p>
                </div>
                <div class="about-div-title">
                    <h1 class="about-div-h1">GROEI</h1>
                </div>
                <div class="about-div-postion">
                    <i class="fa-solid fa-tree" style="color: #FFD43B;"></i>
                    <p class="about-div-p">Ik ben iemand die waarde hecht aan groei, zowel op professioneel als
                        persoonlijk vlak.</p>
                </div>
                <div class="about-div-button">
                    <div class="about-div-media">
                        <button><i class="fa-brands fa-pagelines" style="color: #FFD43B;"></i>Waarom</button>
                        <button><i class="fa-solid fa-briefcase" style="color: #FFD43B;"></i>Ervaring</button>
                    </div>
                    <div>
                        <button><i class="fa-solid fa-square-person-confined"
                                style="color: #FFD43B;"></i>Persoonlijk</button>
                    </div>
                </div>
                <div class="about-div-arrow">
                    <button id="toggle-slide-up2" class="about-div-button-more">
                        <i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <div id="slideUpContent2" class="slide-up-container">
                <div class="slide-up-div">
                    <div class="slide-up-boxAlign1">
                        <div class="slide-up-box1">
                            <h2>Groei</h2>
                            <p>
                                Ik ben iemand die veel waarde hecht aan groei, zowel op professioneel als persoonlijk
                                vlak.
                                Voor mij
                                is elke dag
                                een kans om te leren en mezelf te verbeteren. Ik streef ernaar om nieuwe vaardigheden te
                                ontwikkelen
                                en uit mijn
                                comfortzone te stappen, omdat ik geloof dat groei ontstaat waar uitdagingen liggen. Niet
                                alleen in
                                mijn werk, maar
                                ook in mijn persoonlijke leven zoek ik naar manieren om sterker, wijzer en veelzijdiger
                                te
                                worden.
                                Groei betekent
                                voor mij niet alleen vooruitgang boeken, maar ook stilstaan bij wat écht belangrijk is
                                en
                                dat met
                                zorg ontwikkelen.
                            </p>
                        </div>
                    </div>
                    <div class="slide-up-box-photo">
                        <img src="../img/personalPhoto/IMG_7724.jpg">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>