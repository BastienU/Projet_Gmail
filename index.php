<?php
    include_once __DIR__ .'/src/header.inc.php';
?>
<body>
    <!-- Home page -->
    <header>
        <img src="./asset/home-hero.jpg" alt="image">
        <h1>
            Retrouvez la fluidité et la 
            <br>simplicité de Gmail sur 
            <br>tous vos appareils
        </h1>
        <a href="#createAccount">CRÉER UN COMPTE</a>
        
    </header>
    <!-- End Home page -->
    

    <!-- Navigation menu -->
    <nav>
        <img src="./asset/mail.png" alt="logo">
        <p>Gmail</p>
        <ul>
            <li><a href="#PourLesPros">POUR LES PROS</a></li>
            <li><a href="./connection.php">CONNEXION</a></li>
            <li><a href="#createAccount" class="CreateAccount">CRÉER UN COMPTE</a></li>
        </ul>
        
        <a class="navigation" href="#createAccount"><img src="./asset/arrow.png" alt="bouton_flèche"></a>
    </nav>
    <!-- End Navigation menu -->

    <main>
        <section>
            <!-- Text presentation account creation page -->
            <h2 class="CreateAccount">
                Une boîte de réception entièrement repensée
            </h2>
            <p id="createAccount" class="CreateAccount">
                Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choississez ceux que vous souhaitez lire en 
                priorité.
            </p>
        </section>
        <!-- End Text presentation account creation page -->


        <!-- Creation of the form to create a new account -->
        <div class="CreateAccount" role="form" aria-labelledby="createAccount">
        
            <fieldset>
                <legend>
                    Créer un compte
                </legend>
                <form action="index.php" method="post">
                <label for="name">Nom</label>
                <input type="text" id="name" name="name"
                    placeholder="Votre nom"
                >
                <label for="firstName">Prénom</label>
                <input type="text" id="firstName" name="firstName"
                placeholder="Votre prenom"
                >
                <label for="mailAddress">Mail</label>
                <input type="email" id="mailAddress" name="mailAddress"
                placeholder="Votre mail"
                >
                <label for="password">Choisir votre mot de passe</label>
                <input type="password" id="password" name="password"
                placeholder="Votre mot de passe"
                >
                <input type="submit" value="VALIDER VOTRE COMPTE">
                </form>
            </fieldset>
        </div>
        
        <section class="formulaire">
            <?php
                require_once __DIR__ . '/controller/controller_base.class.php';
                ControllerBase::event();
            ?>
        </section>
        <!-- End Creation of the form to create a new account -->
        
    </main>

    <!-- Footer -->
    <footer>
        &copy; - MIT - 2024
    </footer>
    <!-- End Footer -->
</body>
</html>