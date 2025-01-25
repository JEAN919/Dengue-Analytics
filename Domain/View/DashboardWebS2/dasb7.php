<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/1.png" type="image/x-icon">
    <title>Dengue Analytics</title>
    <link rel="stylesheet" href="styles.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container">
    <nav class="sidebar">
            <div class="sidebar-header">
                <h3>Dengue Analytics</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="../../View/Principal/main.php"><ion-icon name="home-outline"></ion-icon> Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-btn"><ion-icon name="stats-chart-outline"></ion-icon> Dashboards</a>
                    <ul class="dropdown-content">
                        <li><a href="../../View/Dashboard1/dasb1.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Tendencia de casos de Dengue</a></li>
                        <li><a href="../../View/Dashboard2/dasb2.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Casos de Dengue reportados</a></li>
                        <li><a href="../../View/Dashboard3/dasb3.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Casos de Dengue por sexo - edad</a></li>
                        <li><a href="../../View/Dashboard4/dasb4.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Hospitales con más casos reportados</a></li>
                        <li><a href="../../View/Dashboard5/dasb5.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Duración de información</a></li>
                        <li><a href="../../View/DashboardWebS/dasb6.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Total de casos anuales</a></li>
                        <li><a href="../../View/DashboardWebS2/dasb7.php"><ion-icon name="bar-chart-outline"></ion-icon>
                                Total de casos anuales</a></li>
                    </ul>
                </li>
                <li><a href="../../View/login/login.php"><ion-icon name="exit-outline"></ion-icon> Exit</a></li>
            </ul>
        </nav>
        <div class="main-content">
        <iframe title="Comparación de casos totales registrados en 2018-2024 en el Perú" width="1520" height="820" src="https://app.powerbi.com/reportEmbed?reportId=7ebfee4a-dd7f-4e05-aa54-2e5f8791ca59&autoAuth=true&ctid=b9e917da-4e94-4a47-b171-fad99cea9a61" frameborder="0" allowFullScreen="true"></iframe>
    </div>
    </div>
    <script src="script.js"></script>
</body>

</html>