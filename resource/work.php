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
    <div class="work">
      <div class="work-nav-links">
        <div class="work-link">
          <button class="worklinks" onclick="openTab(event, 'main-work')">neuron network</button>
          <button class="worklinks" onclick="openTab(event, 'second')">Takenlijst</button>
          <button class="worklinks" onclick="openTab(event, 'third')">FotoKiosk</button>
          <button class="worklinks" onclick="openTab(event, 'fourth')">PinkGoose website</button>
          <button class="worklinks" onclick="openTab(event, 'fifth')">Mastermind</button>
          <button class="worklinks" onclick="openTab(event, 'six')">Cybersecurity</button>
        </div>
      </div>
      <div class="work-content">

        <div id="main-work" class="tabcontentWork work-text">
          <div class="neuronNetwork">
            <h2>Neurale Netwerken</h2>
            <p>
              Tijdens mijn leertraject heb ik gewerkt aan een basaal neuronaal netwerk, geïnspireerd door de tutorials
              van Sentdex.
              Dit project gaf me inzicht in hoe lagen, activatiefuncties en softmax-outputs functioneren in een
              eenvoudig netwerk.
            </p>
            <p>
              Ik heb ervaring opgedaan met het bouwen van neurale netwerken in Python, met behulp van de bibliotheken
              NumPy en Matplotlib.
              Door zelf code te schrijven voor de structuur en werking van een netwerk, begrijp ik hoe gegevens door
              verschillende lagen heen worden doorgegeven en verwerkt.
            </p>
            <p>
              Activatiefuncties: Zoals ReLU en Sigmoid. ReLU (Rectified Linear Unit)
              wordt vaak gebruikt vanwege zijn eenvoud en effectiviteit. Het zet negatieve waarden om in 0,
              terwijl positieve waarden ongewijzigd blijven
            </p>
            <p>
              In de nabije toekomst wil ik mijn kennis verder uitbreiden naar geavanceerdere onderwerpen, zoals
              backpropagation, convolutieneurale netwerken en deep learning-toepassingen.
              Mijn ambitie is om deze kennis in te zetten bij uitdagende projecten in kunstmatige intelligentie.
            </p>
            <p>
              Dit project was een eerste stap in mijn reis naar AI en machine learning, en ik kijk ernaar uit om deze
              vaardigheden verder te ontwikkelen!
            </p>
            <p>Zie de (huidige) code van mijn neuronNetwork, als je meer wilt ziet bekijk mijn <a
                href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>!
            </p>
            <button id="toggle-button" class="button-neuronNetwork">Code</button>
            <div id="veld" class="neuron-code">
              <!-- Inhoud van het veld -->
              <p style="color: #6a8759;">import numpy as np</p>
              <p style="color: #6a8759;">import nnfs</p>
              <p style="color: #6a8759;">from nnfs.datasets import spiral_data</p>
              <p style="color: #6a8759;">nnfs.init()</p>
              <p style="color: #cc7832;">class Layer_Dense:</p>
              <p style="color: #ffc66d; margin-left: 20px;">def __init__(self, n_inputs, n_neurons):</p>
              <p style="color: #a9b7c6; margin-left: 40px;">self.weights = 0.10 * np.random.randn(n_inputs, n_neurons)
              </p>
              <p style="color: #a9b7c6; margin-left: 40px;">self.biases = np.zeros((1, n_neurons))</p>
              <p style="color: #ffc66d; margin-left: 20px;">def forward(self, inputs):</p>
              <p style="color: #a9b7c6; margin-left: 40px;">self.output = np.dot(inputs, self.weights) + self.biases</p>
              <p style="color: #cc7832;">class Activation_ReLU:</p>
              <p style="color: #ffc66d; margin-left: 20px;">def forward(self, inputs):</p>
              <p style="color: #a9b7c6; margin-left: 40px;">self.output = np.maximum(0, inputs)</p>
              <p style="color: #cc7832;">class Activation_Softmax:</p>
              <p style="color: #ffc66d; margin-left: 20px;">def forward(self, inputs):</p>
              <p style="color: #a9b7c6; margin-left: 40px;">exp_values = np.exp(inputs - np.max(inputs,
                axis=1,keepdims=True))</p>
              <p style="color: #a9b7c6; margin-left: 40px;">probabilities = exp_values / np.sum(exp_values,
                axis=1,keepdims=True)</p>
              <p style="color: #a9b7c6; margin-left: 40px;">self.output = probabilities</p>
              <p style="color: #6a8759;">X, y = spiral_data(samples=100, classes=3)</p>
              <p style="color: #a9b7c6;">dense1 = Layer_Dense(2, 3)</p>
              <p style="color: #a9b7c6;">activation1 = Activation_ReLU()</p>
              <p style="color: #a9b7c6;">dense2 = Layer_Dense(3, 3)</p>
              <p style="color: #a9b7c6;">activation2 = Activation_Softmax()</p>
              <p style="color: #a9b7c6;">dense1.forward(X)</p>
              <p style="color: #a9b7c6;">activation1.forward(dense1.output)</p>
              <p style="color: #a9b7c6;">dense2.forward(activation1.output)</p>
              <p style="color: #a9b7c6;">activation2.forward(dense2.output)</p>
              <p style="color: #6a8759;">print(activation2.output[:5])</p>
            </div>
          </div>
        </div>
        <div id="second" class="tabcontentWork work-text">
          <div class="neuronNetwork">
            <h1>Takenlijst</h1>
            <p>
              Tijdens dit project hebben we een dynamische takenlijst gebouwd, waarin PHP en databases centraal stonden.
              Met behulp van PHP hebben we een robuust systeem opgezet voor gebruikersauthenticatie, taakbeheer en het
              opslaan van gegevens in een MySQL-database.
            </p>
            <p>
              We werkten met een modulaire structuur, zoals zichtbaar in de bestanden voor login, registratie en
              sessiebeheer.
              Dit project gaf ons waardevolle ervaring in het opzetten van een backend met beveiligde interactie met
              databases via bijvoorbeeld PDO of MySQLi.
            </p>
            <p>
              Door dit project heb ik inzicht gekregen in hoe webapplicaties schaalbaar en gestructureerd worden
              opgezet.
              Dit vormt een solide basis voor toekomstige web- en softwareontwikkeling!
            </p>
            <p>Bekijk mijn <a
                href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>
              voor de gehele source code!</p>
          </div>
        </div>
        <div id="third" class="tabcontentWork work-text">
          <div class="neuronNetwork">
            <h1>Fotokiosk</h1>
            <p>
              Tijdens dit project hebben we een interactieve fotokiosk-applicatie ontwikkeld met behulp van C# en .NET.
              De applicatie is ontworpen om gebruikers een eenvoudige en intuïtieve ervaring te bieden bij het
              selecteren,
              bewerken en afdrukken van foto's.
            </p>
            <p>
              Het project maakte gebruik van een modulaire opzet waarin elk teamlid verantwoordelijk was voor een
              specifiek
              onderdeel, zoals de gebruikersinterface, de fotobewerkingsfunctionaliteiten en het koppelen van een
              afdruksysteem.
              Door middel van Visual Studio en een Agile-werkmethodiek hebben we in teamverband taken verdeeld en
              regelmatig
              voortgang besproken om het project succesvol af te ronden.
            </p>
            <p>
              Dit project gaf me waardevolle ervaring in het samenwerken aan een softwareapplicatie, waarbij gebruik is
              gemaakt
              van technologieën zoals .NET Core en XAML voor de interface. Het werken met versies en source control via
              Git
              heeft onze samenwerking verder versterkt.
            </p>
            <p>
              Bekijk mijn <a
                href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>
              voor de volledige broncode en meer informatie over dit project!
            </p>

          </div>
        </div>
        <div id="fourth" class="tabcontentWork work-text">
          <div class="neuronNetwork">
            <h1>PinkGoose Project</h1>
            <p>
              Dit project is een beginnende website die puur gericht is op het ontwerpen van een aantrekkelijke en
              gebruiksvriendelijke interface. Het project is ontworpen met behulp van Figma, waarbij de focus lag op het
              creëren van een visueel aantrekkelijk en intuïtief design.
            </p>
            <p>
              <strong>Technologieën en Tools:</strong><br>
              - <strong>Ontwerptool:</strong> Figma<br>
              - <strong>Versiebeheer:</strong> Git<br>
              - <strong>Hosting:</strong> Laragon
            </p>
            <p>
              <strong>Projectopzet:</strong><br>
              - <strong>Design-First Aanpak:</strong> Het project begon met het ontwerpen van de website in Figma,
              waarbij
              aandacht werd besteed aan kleuren, typografie en lay-out.<br>
              - <strong>GitHub Repository:</strong> De broncode is beschikbaar op GitHub voor iedereen die
              geïnteresseerd
              is in het bekijken of aanpassen van het project.
            </p>
            <p>
              <strong>Ervaring en Leerpunten:</strong><br>
              - <strong>Design Skills:</strong> Ervaring opgedaan in het ontwerpen van een website met Figma.<br>
              - <strong>Collaboratie:</strong> Het project heeft me geleerd hoe belangrijk samenwerking en feedback zijn
              in het ontwerpproces.<br>
              - <strong>GitHub:</strong> Het gebruik van GitHub voor het delen van de broncode heeft mijn kennis van
              versiebeheer versterkt.
            </p>
            <p>
              <strong>Bekijk het Project:</strong><br>
              - <strong>GitHub Repository:</strong> <a href="https://github.com/kiano948729/pinkGooseProject">Bekijk de
                volledige broncode en meer informatie over dit project op mijn GitHub</a>.
            </p>
            <p>
              Dit project was een geweldige kans om mijn designvaardigheden te ontwikkelen en te laten zien hoe een
              design-first aanpak kan leiden tot een mooi en functioneel eindproduct. Neem gerust een kijkje op mijn
              <a href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>
              voor meer details!
            </p>
          </div>
        </div>
        <div id="fifth" class="tabcontentWork work-text">
          <div class="neuronNetwork">
            <h1>Mastermind Project</h1>
            <p>
              Dit project draait om het implementeren van het klassieke Mastermind-spel in Java. Het doel van het
              project was om logica en algoritmen te oefenen door een brute-force benadering en feedbackanalyse toe te
              passen om een geheime code te kraken.
            </p>
            <p>
              <strong>Technologieën en Tools:</strong><br>
              - <strong>Programmeertaal:</strong> Java<br>
              - <strong>Ontwikkelomgeving:</strong> Ecplise IDE<br>
              - <strong>Versiebeheer:</strong> Git<br>
            </p>
            <p>
              <strong>Projectopzet:</strong><br>
              - <strong>Logica Implementatie:</strong> Het project begon met het definiëren van de spelregels en het
              creëren van variabelen zoals geheime code, gokpogingen, en feedback pinnen.<br>
              - <strong>Brute-Force Algoritme:</strong> Het algoritme gebruikt een brute-force methode om de code te
              kraken, waarbij feedback het proces verfijnt.<br>
              - <strong>Visuele Flowchart:</strong> Een flowchart werd ontworpen om de logica van het algoritme te
              verduidelijken.<br>
            </p>
            <p>
              <strong>Ervaring en Leerpunten:</strong><br>
              - <strong>Probleemoplossing:</strong> Het bouwen van een algoritme dat efficiënt omgaat met combinaties en
              feedback was een belangrijke uitdaging.<br>
              - <strong>Java Vaardigheden:</strong> Verbetering in het gebruik van Java voor het implementeren van
              complexe logica.<br>
              - <strong>Documentatie:</strong> Het opstellen van duidelijke pseudocode en documentatie heeft geholpen
              bij het structureren van het project.<br>
            </p>
            <p>
              <strong>Bekijk het Project:</strong><br>
              - <strong>GitHub Repository:</strong> <a href="https://github.com/kiano948729/mastermind">Bekijk de
                volledige broncode en meer informatie over dit project op mijn GitHub</a>.
            </p>
            <p>
              Dit project was een geweldige kans om mijn programmeervaardigheden te verbeteren en te laten zien hoe
              algoritmes en logica in praktijk kunnen worden gebracht. Neem gerust een kijkje op mijn <a
                href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>
              voor meer projecten!
            </p>
            <p>Hieronder kun je de (gedeeltelijke) code zien voor de gehele source code ga naar mijn <a
                href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>.</p>
            <p>In de gehele code zijn leuke toevoegingen om het spel leuker en moeilijker te maken.
              Ook krijg je toegang tot het menu zodat je het daadwerklijk zelk kan spelen.</p>
            <button id="toggle-button1" class="button-neuronNetwork">Code</button>
            <div id="veld1" class="neuron-code">
              <p>package mastermind;</p>
              <p>&nbsp;</p>
              <p>import java.util.Scanner;</p>
              <p>import java.util.Timer;</p>
              <p>&nbsp;</p>
              <p>public class MasterMindFunctions</p>
              <p>{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;Scanner console = new Scanner(System.in);</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public String[] secretCode;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public String[] exempleCode;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public int turnCount;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public boolean isGameOver;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public int difficult;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public int countdownSeconds;</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public MasterMindFunctions()</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.turnCount = 0;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.isGameOver = false;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public void generateCode()</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.secretCode = generateSecretCode();</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public boolean checkWin(String[] guessCode)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; difficult; i++)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
                (!guessCode[i].equals(secretCode[i]))</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return
                false;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return true;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public void FirstFeedback(String[] guessCode)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int correctColorAndPosition = 0;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boolean[] codeMatched = new boolean[difficult];</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boolean[] guessMatched = new boolean[difficult];</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; difficult; i++)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
                (guessCode[i].equals(secretCode[i]))</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;correctColorAndPosition++;
              </p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;codeMatched[i]
                = true;</p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guessMatched[i]
                = true;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Juiste kleur en positie: " +
                correctColorAndPosition);</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public void SecondFeedback(String[] guessCode)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int correctColorWrongPosition = 0;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boolean[] codeMatched = new boolean[difficult];</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;boolean[] guessMatched = new boolean[difficult];</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; difficult; i++)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!guessMatched[i])</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for
                (int j = 0; j &lt; difficult; j++)</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if
                (!codeMatched[j] &amp;&amp; guessCode[i].equals(secretCode[j]))</p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
              </p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;correctColorWrongPosition++;
              </p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;codeMatched[j]
                = true;</p>
              <p>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
              </p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Juiste kleur maar foute positie: "
                + correctColorWrongPosition);</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>&nbsp;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;public void resetGame()</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;{</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.turnCount = 0;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.isGameOver = false;</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.secretCode = generateSecretCode();</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;}</p>
              <p>}</p>
            </div>
          </div>
        </div>
        <div id="six" class="tabcontentWork work-text">
          <div class="neuronNetwork">
            <h1>Cyber Security Flyer</h1>
            <p>
              Deze flyer is een visueel project dat ik volledig zelf heb ontworpen, inclusief de layout, typografie en
              grafische elementen. Het doel was om een aantrekkelijke en informatieve flyer te creëren over
              cyberbeveiliging, een onderwerp dat steeds belangrijker wordt in de digitale wereld.
            </p>
            <p>
              <strong>Highlights:</strong><br>
              - Volledig zelf ontworpen, inclusief concept en visuele uitvoering.<br>
              - Gericht op een duidelijke en moderne presentatie van informatie.<br>
              - Een combinatie van creatieve vaardigheden en een focus op belangrijke technologische thema's.<br>
            </p>
            <p>
              <strong>Bekijk de Flyer:</strong><br>
              - Hieronder kun je de flyer direct bekijken of downloaden voor later gebruik.
            </p>
            <h2>Bekijk de Flyer</h2>
            <iframe src="../pdf/cyber.pdf" width="100%" height="600px"></iframe>
            <p>
              Dit project gaf me de kans om mijn ontwerpvaardigheden te verbeteren en te werken aan een visueel
              aantrekkelijk, informatief product. Het combineren van inhoud en esthetiek in een digitaal formaat was een
              waardevolle ervaring, die ik met trots wil delen. Bezoek gerust mijn <a
                href="https://github.com/kiano948729?tab=repositories&q=&type=&language=&sort=stargazers">GitHub</a>
              voor
              meer projecten!
            </p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <footer>

  </footer>
</body>

</html>