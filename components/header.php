<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<header>
    <div class="header-container">
        <nav class="nav-logo">
            <div>
                <a href="../index.php"><img src="../img/logo-final.png"></a>
                <div class="title-link">
                    <a href="../index.php">
                    <h1>Software</h1>
                    <h1>developer</h1>
                </a>                   
                </div>
            </div>
        </nav>
        <nav class="nav-links">
            <a href="../resource/skill.php" class="<?php echo $current_page == 'skill.php' ? 'active' : ''; ?>">skill</a>
            <a href="../resource/work.php" class="<?php echo $current_page == 'work.php' ? 'active' : ''; ?>">Work</a>
            <a href="../resource/about.php"class="<?php echo $current_page == 'about.php' ? 'active' : ''; ?>">About</a>
            <a href="../resource/contact.php"class="<?php echo $current_page == 'contact.php' ? 'active' : ''; ?>">Contact</a>  
            <div id="google_translate_element"></div>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        </nav>
    </div>
</header>   