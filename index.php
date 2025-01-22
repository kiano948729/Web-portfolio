<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google" content="notranslate">
  <title>Portfolio</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
  <script src="script.js" defer></script>
</head>

<body>
  <header>
    <?php require_once("components/header.php") ?>
  </header>
  <div class="main-div">
    <div class="main-slogan">
      <h1>building future tech today</h1>
      <p>Bringing Vision to Life Through Technology </p>
    </div>
  </div>
  <div class="about-section">
    <div class="side-buttons">
      <a href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers"><img
          src="img/Schermafbeelding 2024-12-05 143526.png" alt=""></a>
      <a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><img
          src="img/Schermafbeelding 2024-12-05 143340.png" alt=""></a>
      <a href="https://leetcode.com/u/gandalfthecoder23452/"><img src="img/Schermafbeelding 2024-12-05 142839.png"
          alt=""></a>
    </div>
    <div class="main-about">
      <div class="about-nav">
        <button class="tablinks" onclick="openTabAbout(event, 'main')">about</button>
        <button class="tablinks" onclick="openTabAbout(event, 'second')">Ervaring</button>
        <button class="tablinks" onclick="openTabAbout(event, 'third')">Contact</button>
        <a href="resource/about.php" class="view-all">Bekijk alles</a>
      </div>
      <div class="about-info">
        <div class="about-main-info">
          <div class="about-foto">
            <!-- nog een ding toevoeven zodat bij iedere andere tab een andere afbeelding komt -->
            <img src="img/downloads.jpg">
          </div>
          <div id="main" class="tabcontent about-text">            
            <h2>Hi, ik ben Kiano!</h2>
            <p>Ik ben een rustig en op mezelf gericht persoon die geniet van persoonlijke groei.</p>
            <h3>Sportief en gedreven</h3>
            <p>Ik breng graag tijd door in de sportschool, waar ik mezelf blijf uitdagen.</p>
            <h3>Passie voor programmeren</h3>
            <p>In mijn vrije tijd programmeer ik graag en werk ik aan neurale AI-projecten. Het ontdekken en leren van
              nieuwe dingen is mijn passie!</p>
          </div>
          <div id="second" class="tabcontent about-text">
            <h3>Mijn passie</h3>
            <p>In mijn vrije tijd programmeer ik aan neurale AI-projecten, waarbij ik werk met de nieuwste technologieën zoals machine learning en deep learning. Ik vind het fascinerend om algoritmes te ontwerpen die complexe problemen kunnen oplossen.</p>
            <h3>zelfontwikkeling</h3>
            <p>Ik geloof sterk in continue zelfontwikkeling en het uitdagen van mijn creatieve grenzen. Of het nu gaat om het leren van een nieuwe programmeertaal of het aanpakken van een uitdagend project, ik ben altijd op zoek naar manieren om te groeien.</p>
          </div>
          <div id="third" class="tabcontent about-text">
            <h3>Samenwerking</h3>
            <p>Ik werk graag in teamverband, waar samenwerking en gedeelde visie leiden tot innovatieve en impactvolle oplossingen. Het uitwisselen van ideeën en het leren van anderen motiveren me om het beste uit mezelf te halen.</p>
            <h3>Perspectieven</h3>
            <p>Naast coderen hou ik van reizen/hiken en het ontdekken van verschillende gebieden. Nieuwe plekken verkennen inspireert me en geeft me een frisse kijk op de wereld. Het helpt me bovendien om creatiever te denken en nieuwe perspectieven te waarderen.</p>
          </div>
        </div>
        <div class="about-main2-info">
          <div class="about-first-block">
            <p>In mijn vrije tijd programmeer ik graag aan neurale AI-projecten en verdiep ik me in traden. Het
              ontdekken en leren van nieuwe dingen is mijn passie!</p>
          </div>
          <div>
            <div class="about-buttons">
              <a href="resource/about.php" class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
              <a href="resource/skill.php" class="<?php echo $current_page == 'skill.php' ? 'active' : ''; ?>">skill</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="lower-section">
    <nav class="lower-nav-links">
      <div>
        <img src="img/lower-img/ai-photo.webp" alt="">
        <a href="../resource/work.php" class="<?php echo $current_page == 'work.php' ? 'active' : ''; ?>">Work</a>
      </div>
      <div>
        <img src="img/lower-img/work-photo.webp" alt="">
        <a href="../resource/skill.php" class="<?php echo $current_page == 'skill.php' ? 'active' : ''; ?>">skill</a>
      </div>
      <div>
        <img src="img/lower-img/work-photo-work.webp" alt="">
        <a href="../resource/contact.php" class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">how
          iwork</a>
      </div>
      <div>
        <img src="img/lower-img/contact-photo.webp" alt="">
        <a href="../resource/contact.php"
          class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">contact</a>
      </div>
    </nav>
  </div>

</body>

</html>