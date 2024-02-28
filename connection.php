<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partiel Gmail single page</title>
    <meta name="description" content="Cette étude de cas concerne la réalisation de la single page Gmail.">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="./css/main.connection.css">
</head>
<body>

    <!-- Navigation menu -->
    <nav>
        <img src="./asset/mail.png" alt="logo">
        <p>Gmail</p>
        <ul>
            <li><a href="#PourLesPros">POUR LES PROS</a></li>
            <li><a href="#Connection" class="connection">CONNEXION</a></li>
            <li><a href="./index.php">CRÉER UN COMPTE</a></li>
        </ul>
        
        <a class="navigation" href="#Connection"><img src="./asset/arrow.png" alt="bouton_flèche"></a>
    </nav>
    <!-- End Navigation menu -->

    <main>

        <!-- Creation of the connection form to log in -->
        <h2 class="connection" id="Connection">
            Bienvenue dans votre espace de connexion
        </h2>

        <div class="connection-form" role="form" aria-labelledby="Connection">
            <fieldset >
                <legend>
                    Connectez vous à votre compte
                </legend>
                <form method="post">

                <label for="mailAddress">Mail ou login *</label>
                <input type="email" id="mailAddress" name="mailAddress"
                placeholder="Votre mail" aria-required="true"
                >

                <label for="password">Mot de passe *</label>
                <input type="password" id="password" name="password" 
                placeholder="Votre mot de passe" aria-required="true"
                >

                <input type="submit" value="CONNEXION A VOTRE COMPTE">

                </form>
                
            </fieldset>
        </div>

        <section>
            <?php
                require_once __DIR__ . "/controller/controller_base.class.php";
                ControllerBase::connectionEvent();
            ?>
        </section>
        <!-- End Creation of the connection form to log in -->
        
    </main>

    <!-- Footer -->
<footer>
    &copy; - MIT - 2024
</footer>
<!-- End Footer -->
</body>
</html>