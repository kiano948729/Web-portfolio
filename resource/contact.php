<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Portfolio</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/5321476408.js" crossorigin="anonymous"></script>
  <script src="../script.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"rel="stylesheet">
</head>

<body>
  <header>
    <?php require_once("../components/header.php") ?>
  </header>
  <main>
    <div class="contact-divAlign">
      <div class="contact-main-div">
        <div class="side-buttons">
          <div>
            <a href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers"><img
                src="../img/Schermafbeelding 2024-12-05 143526.png" alt=""></a>
          </div>
          <div>
            <a href="https://www.linkedin.com/feed/?trk=onboarding-landing"><img
                src="../img/Schermafbeelding 2024-12-05 143340.png" alt=""></a>
          </div>
          <div>
            <a href="https://leetcode.com/u/gandalfthecoder23452/"><img
                src="../img/Schermafbeelding 2024-12-05 142839.png" alt=""></a>
          </div>
          <div>
            <a href="https://www.instagram.com/kiano948729/"><img
                src="../img/Schermafbeelding 2025-01-20 135207.png"></a>
          </div>
        </div>
      </div>
      <div class="contact-main-div1">
        <section class="contact-section">
          <h1>Contact</h1>
          <p>Heb je vragen of wil je gewoon hallo zeggen? Vul het onderstaande formulier in en ik neem zo snel mogelijk
            contact met je op!</p>
          <form action="submit_contact.php" method="POST">
            <div class="form-group">
              <label for="name">Naam:</label>
              <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
              <label for="email">E-mail:</label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Bericht:</label>
              <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" value="Verstuur" class="submit-btn">Verstuur</button>
          </form>
        </section>
      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>

</html>