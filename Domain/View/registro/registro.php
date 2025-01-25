<!DOCTYPE html>
<html>

<head>
    <title>Registro</title>
    <link rel="icon" href="../../img/1.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="../../Controller/RegistroController.php">
                    <h2>Registrarse</h2>
                    <p>Complete sus datos para registrarse.</p>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" id="nombres" name="nombres" class="form-control" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="correo" name="correo" class="form-control" required>
                        <label for="correo">Correo</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="pass" name="pass" class="form-control" required>
                        <label for="pass">Contraseña</label>
                    </div>
                    <button type="submit">Registrarse</button>
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
