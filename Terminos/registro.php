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
          <section id='signup' class="signup">
            <div class="Entrada-registro">
                <h2>R E G I S T R A T E</h2>
            </div>
            <div class="registro">
                <form id="registrationForm"  method="POST">
                    <input type="text" placeholder="name">
                    <input type="text" placeholder="email">
                    <input type="password" placeholder="password">
                    <input type="submit" class="bt" value="Sign In">
                </form>

                <?php
                include ("registro-d.php");
                ?>

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
<script src="/Terminos/script.js"></script>
</html>