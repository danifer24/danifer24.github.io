<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo isset($pageTitle) ? $pageTitle : "Mi portfolio - Daniel Vázquez Fernández"; ?></title>

    <meta name="description"
        content="Portfolio web de Daniel Vázquez Fernández, mostrando proyectos y habilidades en desarrollo web y programación.">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="functions.js"></script>

</head>

<body>
    <header class="nav">
        <a href="index.php" class="logo">Daniel Vázquez Fernández.</a>
        <nav id="myLinks">
            <a href="sobreMi.php">Sobre mi</a>
            <a href="misProyectos.php">Mis Proyectos</a>
            <a href="miCv.php">Mi CV</a>
        </nav>
        <a href="javascript:void(0);" class="icon" onclick="showMobileLinks()">
            <img src="styles/menu.png" alt="menu icon">
            <!-- <span class="fa fa-bars"></span> -->
        </a>

    </header>
    <nav class="nav" id="mobileLinks">
        <a href="sobreMi.php">Sobre mi</a>
        <a href="misProyectos.php">Mis Proyectos</a>
        <a href="miCv.php">Mi CV</a>
    </nav>

    <main>
</body>

</html>