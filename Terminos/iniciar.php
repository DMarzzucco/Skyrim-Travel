<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skyrim Travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--container-->
    <main class="conteiner">
          <!--header-->
          <header class="header">
            <a href="/index.html">
                <span>Skyrim Travel</span>
            </a>
          </header>
          <!--contenet-->
          <section id='signin' class="signin">
            <div class="texto-sing">
                <h2>Incia Seccion Antes de Continuar</h2>
            </div>
            <div class="inciarsecione">
             <form action="procesar_iniciar_sesion.php" method="POST">
               <input type="text" name="email" placeholder="Usuario o Correo Electrónico">
               <input type="password" name="password" placeholder="Contraseña">
               <button class="btn-iniciar" type="submit">Iniciar Sesión</button>
             </form>
            </div>
            <div class="no-tenercuenta">
                <h2>En el caso que no tengas una cuenta</h2><a href="registro.php">Registrate.</a>
            </div>
          </section>
          <!--footer-->
          <div class="footer">
            <footer class="footer">
                <p>© 2023 New Travel, Inc.
                    Terms
                    Privacy (Updated 08/2022)
                </p>
            </footer>
          </div> 
    </main> 
</body>
<script src="script.js"></script>
</html>