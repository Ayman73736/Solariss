<!DOCTYPE html>

<html lang="fr">
    <head>

        <!-- META -->
        <meta charset="utf-8" />
        <title>Hôtel Solaris | Contactez-nous</title>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- STYLES -->
        <!-- CSS -->
        <link href="content/css/main.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <![endif]-->

        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>
    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content sitemap">
                <div class="content-overlay">

                    <!-- Container -->
                    <div class="container container-main">
                        <h1>Plan du site</h1>

                        <ul>
                            <li><a href="index.php">Accueil</a></li>
                            <li><a href="hotel.php">L'hôtel</a></li>
                            <li>
                                <a href="bedrooms.php">Nos chambres</a>
                                <ul>
                                    <li><a href="bedrooms#single-room.php">Chambre simple</a></li>
                                    <li><a href="bedrooms#double-room.php">Chambre double</a></li>
                                    <li><a href="bedrooms#twin-room.php">Chambre twin</a></li>
                                </ul>
                            </li>
                            <li><a href="stay.php">Réservations</a></li>
                            <li><a href="about.php">À propos</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="login.php">Connexion</a></li>
                        </ul>

                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="content/js/script.js"></script>
        <script type="text/javascript" src="content/js/datePicker.js"></script>

    </body>
</html>
