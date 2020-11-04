<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTINA PEDRALBES</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/css.css" rel="stylesheet" />
    <script src="script.js" defer></script>
</head>
<body>
    <?php include 'header.php';?>
    </br>
    </br>
    </br>
    </br>
    </br>
    <h1>Entrepans</h1>
    <div class="menumati">
        <div class="entrepans">
            <div class="productes">
                <div class="producte1">
                    <div class="titol"><h3>Pernil dolç</h3></div>
                    <img class="imatgeProductes" src="./imatges/donutsxoco.jpg" alt="Pernil dolç">
                    <div class="preu"><h3>1,00 €</h3></div>
                    <div>
                        <form class="quantitat">
                            <label for="fname">Quantitat:</label>
                            <input type="number" name="fname" class="quantitat-boto" value="" placeholder="Màxim 4 unitats" maxlength="4">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="fer comanda">
        <form action="" method="POST"><input class="fercomanda-boto" type="submit" value="Següent"></form>
    </div>

    <?php include "footer.php";?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
