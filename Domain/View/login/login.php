<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="icon" href="../../img/1.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form method="post" action="../../Controller/UsuarioController.php">
                    <h2>Iniciar Sesión</h2>
                    <p>Por favor, identífiquese.</p>
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
                    <button type="submit">Iniciar Sesión</button>
                    <p> o </p>
                    <button type="button" onclick="window.location.href='../registro/registro.php'">Registrese ahora</button>
                </form>
                <?php
                if (isset($mensajeError)) {
                    echo "<p>$mensajeError</p>";
                }
                ?>
            </div>
        </div>
    </section>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            <?php
            session_start();
            if (isset($_SESSION['login_error'])) {
                $error_message = $_SESSION['login_error'];
                echo "Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '$error_message',
                });";
                unset($_SESSION['login_error']); 
            }
            ?>
        });
    </script>
</body>

</html>