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
        <link href="content/css/contact.css" rel="stylesheet" type="text/css" media="screen" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!--[if IE]>
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <![endif]-->

        <!-- SCRIPTS -->
        <script type="text/javascript" src="content/js/jquery-1.12.1.min.js"></script>
        <script type="text/javascript" src="content/js/modernizr-3.3.1.min.js"></script>

    </head>

    <body>

        <!-- Wrapper -->
        <div class="wrapper">

            <!-- Header -->
            <?php include 'view/headerView.php'; ?>

            <!-- Content -->
            <div class="content contact">
                <div class="content-overlay">

                    <!-- Container -->
                    <div class="container container-main">
                        <table>
                            <tr>
                                <td>
                                    <form action="contact-submitted.php" method="post" id="contact-form">
                                        <h1>Ecrivez-nous</h1>
                                        <div class="input-container input-container-mail-object"><input type="text" name="contact-email-object" placeholder="Sujet" required /></div>
                                        <textarea form="contact-form" id="contact-message" required></textarea>
                                        <div class="input-container input-container-user"><input type="text" placeholder="Nom" name="contact-name" id="contact-name" required /></div>
                                        <div class="input-container input-container-username"><input type="email" placeholder="Email" name="contact-email" id="contact-email" pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?" oninput="try {if ($(this).val().match(new RegExp(this.getAttribute('pattern')))) { this.setCustomValidity(''); } else { this.setCustomValidity('Veuillez entrer une adresse valide'); }} catch(e) {}" required /></div><br />
                                        <button class="button-submit" id="contact-submit-message">Envoyer</button>
                                    </form>
                                </td>
                                <td>
                                    <div id="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3236.9218968407654!2d-5.797374120638194!3d35.777294851682086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c7f4da10e20b5%3A0xeefe4051ca74b093!2sKenzi%20Solazur!5e0!3m2!1sfr!2sma!4v1706904410060!5m2!1sfr!2sma" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Footer -->
            <?php include 'view/footerView.php'; ?>
        </div>

        <script type="text/javascript" src="content/js/script.js"></script>

    </body>
</html>
