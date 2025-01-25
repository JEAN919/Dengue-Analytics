<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../img/1.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="styles.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container">
        <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Modelo de BI Dengue Región Piura</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="../../View/Principal/main.php"><ion-icon name="home-outline"></ion-icon> Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-btn"><ion-icon name="stats-chart-outline"></ion-icon> Dashboards</a>
                    <ul class="dropdown-content">
                        <li><a href="../../View/Dashboard1/dasb1.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Dashboard 1</a></li>
                        <li><a href="../../View/Dashboard2/dasb2.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Dashboard 2</a></li>
                        <li><a href="../../View/Dashboard3/dasb3.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Dashboard 3</a></li>
                        <li><a href="../../View/Dashboard4/dasb4.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Dashboard 4</a></li>
                        <li><a href="../../View/Dashboard5/dasb5.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Dashboard 5</a></li>
                        <li><a href="../../View/DashboardWebS/dasb6.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Total de casos anuales</a></li>
                    </ul>
                </li>
                <li><a href="../../View/login/login.php"><ion-icon name="exit-outline"></ion-icon> Exit</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <header>
                <h1>Bienvenido, analista.</h1>
                <p>Se le proveerá de información general del dengue.</p>
            </header>
            <section class="welcome-section">
                <h1 class="welcome-title">Dengue</h1>
                <img src="../../img/dengue1.jpg" alt="Image Placeholder" class="welcome-image">
                <p class="welcome-text">El dengue es una enfermedad viral transmitida por mosquitos, principalmente por
                    el mosquito Aedes aegypti. Es prevalente en regiones tropicales y subtropicales.</p>
            </section>
            <section class="info-section">
                <h2 class="info-title">Síntomas</h2>
                <div class="info-content">
                    <img src="../../img/dengue2.jpg" alt="Image Placeholder" class="info-image">
                    <p class="info-text">- Fiebre alta<br>
                        - Dolor de cabeza<br>
                        - Dolor detrás de los ojos<br>
                        - Dolor muscular y articular<br>
                        - Náuseas y vómitos<br>
                        - Erupciones en la piel<br>
                        - Sangrado leve (encías o nariz)</p>
                </div>
            </section>
            <section class="info-section">
                <h2 class="info-title">Transmisión</h2>
                <div class="info-content">
                    <img src="../../img/dengue3.jpg" alt="Image Placeholder" class="info-image">
                    <p class="info-text">El dengue se transmite a través de la picadura de mosquitos infectados. No se
                        transmite directamente de persona a persona.</p>
                </div>
            </section>
            <section class="info-section">
                <h2 class="info-title">Prevención</h2>
                <div class="info-content">
                    <img src="../../img/dengue4.jpeg" alt="Image Placeholder" class="info-image">
                    <p class="info-text">- Usar repelente de insectos<br>
                        - Utilizar ropa de manga larga y pantalones<br>
                        - Instalar mosquiteros en ventanas y puertas<br>
                        - Eliminar recipientes con agua estancada</p>
                </div>
            </section>
            <section class="info-section">
                <h2 class="info-title">Tratamiento</h2>
                <div class="info-content">
                    <img src="../../img/dengue5.jpg" alt="Image Placeholder" class="info-image">
                    <p class="info-text">No existe un tratamiento específico para el dengue. Se recomienda:<br>
                        - Reposo<br>
                        - Hidratación adecuada<br>
                        - Analgésicos para aliviar el dolor (evitar aspirina y otros antiinflamatorios no esteroideos)
                    </p>
                </div>
            </section>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>