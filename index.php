<!doctype html>
<html lang="fr">
​
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
​
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
​
    <title>Date</title>
</head>
​
<body class=" bg-light">
    <main class="container">
        <div class="row justify-content-center">
            <h1 class="display-3">Manipulation de la date et l'heure</h1>
​
            <div class="col-md-8">
                <!-- 1 - Date du jour -->
                <div class="card mb-4 mt-5">
                    <div class="card-body">
                        <h2>Date du jour</h2>
                        <p class="text-muted">Nous sommes le <?php echo date('d/m/Y'); ?></p>
                    </div>
                </div>
                <!-- 2. date du jour textuelle -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Date du jour textuelle</h2>
                        <p class="text-muted">Nous sommes le <?php echo date('l d F Y'); ?></p>
                    </div>
                </div>
                <!-- 3. L'heure courante -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Heure courante</h2>
                        <!-- Il faut définir la timezone pour afficher l'heure locale -->
                        <?php date_default_timezone_set('Europe/Paris'); ?>
                        <!-- Utilisation de la balise time -->
                        <p class="text-muted">Il est <time datetime="<?php echo date('Y-m-dTH:i'); ?>"><?php echo date('H:i:s'); ?></time></p>
                    </div>
                </div>
                <!-- 4. date en français -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Date en français</h2>
                        <!-- On faut définir l'heure locale, attention format depend de la configuration du serveur et locale installé -->
                        <?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr.UTF8', 'fr_FR.UTF-8', 'fr.UTF-8') ?>
                        <p class="text-muted">Nous sommes <?php echo strftime("%A %e %B %Y", time()); ?></p>
                    </div>
                </div>
                <!-- 5. Timestamp courant -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Timestamp courant</h2>
                        <p class="text-muted">Timestamp courant <?php echo time(); ?></p>
                    </div>
                </div>
                <!-- 6. Calcul de date -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Temps écoulé depuis le debut des cours</h2>
                        <?php
                        // Méthode procédurale
                        $start = date_create("2020-10-01"); // Retourne un objet
                        $end = date_create("now"); // Retourne un objet
                        $interval = date_diff($start, $end); // retourne un objet
                        ?>
                        <p class="text-muted">Nombre de jour depuis le debut des cours <?php echo ($interval->format('%R%a jours')) ?></p>
                    </div>
                </div>
                <!-- 7. J + 25 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Date à J+25</h2>
                        <?php
                        $date = date_create('now');
                        // créé un objet date à partir de la chaîne et l'ajoute à $date
                        date_add($date, date_interval_create_from_date_string('25 days'));
                        ?>
                        <p class="text-muted">La date J + 25 est : <?php echo date_format($date, 'd-m-Y'); ?></p>
                    </div>
                </div>
                <!-- 8. J - 15 -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Date à J-15</h2>
                        <?php
                        $date = date_create('now');
                        // créé un objet date à partir de la chaîne et le soustrait à $date
                        date_sub($date, date_interval_create_from_date_string('15 days'));
                        ?>
                        <p class="text-muted">La date J - 15 est : <?php echo date_format($date, 'd-m-Y'); ?></p>
                    </div>
                </div>
                <!-- 9. Nb de jour dans le mois -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Nombre de jour dans le mois</h2>
                        <p class="text-muted">Nombre de jours : <?php echo cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); ?></p>
                    </div>
                </div>
                <!-- 10. Timestamp Epoch -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Timestamp du 01/01/1970 00:00</h2>
                        <?php
                        // Le timestamp (unix) désigne le nombre de secondes écoulées depuis le 1er janvier 1970 à minuit UTC précise.
                        date_default_timezone_set('UTC');
                        ?>
                        <p class="text-muted">Nombre de jours : <?php echo mktime(0, 0, 0, 1, 1, 1970) ?></p>
                    </div>
                </div>
                <!-- 11 date du timestamp -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Date du timestamp 1601532000</h2>
                        <p class="text-muted">Date correspondante est : <?php echo date('d/m/Y', 1601532000) ?></p>
                    </div>
                </div>
                <!-- 12 calcul âge -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>Calcul de l'âge </h2>
                        <?php
                        $start = date_create("1978-04-01");
                        $end = date_create("now");
                        $interval = date_diff($start, $end);
                        ?>
                        <p class="text-muted">L'âge de personne née 1 avril 1978 est : <?php echo $interval->format('%R%y ans') ?> .</p>
                    </div>
                </div>
​
            </div>
    </main>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>
​
</html>
