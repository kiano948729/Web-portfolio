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
  <main>
    <div class="skill-page">
      <!-- Eerste blok -->
      <div class="skill-first-div skill-hover">
        <div class="image-wrapper">
          <img src="../gif/neuron.gif" alt="Neural Network">
          <h1 class="h1-skill">Neural Network</h1>
          <div class="arrow">
            ↑ Hover here ↑
          </div>
        </div>
        <div class="info">
          <h2>Status</h2>
          <p>Redelijk nieuw in neurale netwerken, maar de basis begrijp ik. Ik heb experimenten uitgevoerd met
            eenvoudige modellen in Python.</p>
          <h2>Basisconcepten</h2>
          <ul>
            <li><i class="fas fa-brain"></i> Neuronen: De bouwstenen van neurale netwerken.</li>
            <li><i class="fas fa-layer-group"></i> Lagen: Input, hidden en output lagen.</li>
            <li><i class="fas fa-chart-line"></i> Activatiefuncties: Zoals ReLU en Sigmoid.</li>
            <li><i class="fas fa-cog"></i> Training: Gebruik van backpropagation en gradient descent.</li>
          </ul>
          <h2>Aanrader</h2>
          <p>Bekijk mijn GitHub-repository's voor eenvoudige implementaties van neurale netwerken: <a
              href="https://github.com/kiano948729" target="_blank">github.com/kiano</a>.</p>
        </div>
      </div>

      <!-- Tweede blok -->
      <div class="skill-second-div skill-hover">
        <div class="image-wrapper">
          <img src="../gif/ezgif-3-0d8e20d024.webp" alt="Web Development">
          <h1 class="h1-skill">Web Development</h1>
          <div class="arrow">
            ↑ Hover here ↑
          </div>
        </div>
        <div class="info">
          <h2>Ervaring</h2>
          <p>Ik heb een sterk gevoel voor design en ben ervaren in frontend webontwikkeling. Mijn expertise ligt
            voornamelijk in het bouwen van moderne, responsieve interfaces.</p>
          <h2>Vaardigheden</h2>
          <ul>
            <li><i class="fas fa-palette"></i> Frontend: HTML, CSS, JavaScript.</li>
            <li><i class="fas fa-server"></i> Backend: PHP (basisniveau).</li>
            <li><i class="fas fa-cubes"></i> Frameworks: Begrijp de basissen.</li>
            <li><i class="fas fa-mobile-alt"></i> Design: Het ontwerpen van aantrekkelijke & gebruiksvriendelijke interfaces.</li>
          </ul>
          <h2>Aanrader</h2>
          <p>Bekijk mijn frontend projecten en designs op <a href="https://github.com/kiano948729"
              target="_blank">GitHub</a>.</p>
        </div>
      </div>

      <!-- Derde blok -->
      <div class="skill-third-div skill-hover">
        <div class="image-wrapper">
          <div class="logo-position">
            <div class="logo-layout">
              <img src="../gif/5968286.png">
            </div>
            <div class="logo-layout-second">
              <img src="../gif/Schermafbeelding 2024-12-18 111605.png">
              <img src="../gif/Schermafbeelding 2024-12-18 111904.png" alt="">
            </div>
            <div class="logo-layout">
              <img src="../gif/Schermafbeelding 2024-12-18 112137.png">
            </div>
            <h1 class="h1-skill1">Programming</h1>
            <div class="arrow">
              ↑ Hover here ↑
            </div>
          </div>
        </div>
        <div class="info">
          <h2>Ervaring</h2>
          <p>Ik beheers meerdere programmeertalen op een goed niveau en kan werken met OOP. Daarnaast ben ik vertrouwd
            met het ontwikkelen van efficiënte algoritmes.</p>
          <h2>Talen</h2>
          <ul>
            <li><i class="fab fa-windows"></i> C#: Object-georiënteerd programmeren.</li>
            <li><i class="fab fa-python"></i> Python: Data analyse en machine learning.</li>
            <li><i class="fab fa-java"></i> Java: Applicatie ontwikkeling.</li>
            <li><i class="fas fa-database"></i> SQL: Database management.</li>
          </ul>
          <h2>Aanrader</h2>
          <p>Bekijk mijn GitHub voor codevoorbeelden en projecten: <a href="https://github.com/kiano948729"
              target="_blank">github.com/kiano</a>.</p>
        </div>
      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>

</html>