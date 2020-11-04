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
    
    <div class="menuEsmorzar">
    <h1>Esmorzar</h1>
        <div class="entrepans">
            <h3>Entrepans:</h3>
            <div class="pernil">
                <div class="nom"><p>Pernil dolç</p></div>
                <div class="preu"><p>1,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="fuet">
                <div class="nom"><p>Fuet</p></div>
                <div class="preu"><p>1,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="formatge">
                <div class="nom"><p>Formatge</p></div>
                <div class="preu"><p>1,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="tonyina">
                <div class="nom"><p>Tonyina</p></div>
                <div class="preu"><p>1,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
        </div>
        <div class="patates">
            <h3>Patates:</h3>
            <div class="lays">
                <div class="nom"><p>Lays salades</p></div>
                <div class="preu"><p>1,20€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="risquetos">
                <div class="nom"><p>Risquetos</p></div>
                <div class="preu"><p>1,20€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
        </div>
    </div>
    
    <div class="menuDinar">
    <h1>Dinar</h1>
        <div class="plats">
            <h3>Plats combinats:</h3>
            <div class="plat1">
                <div class="nom"><p>Botifarra amb patates fregides</p></div>
                <div class="preu"><p>7,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="plat2">
                <div class="nom"><p>Hamburgueses amb amanida</p></div>
                <div class="preu"><p>7,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="plat3">
                <div class="nom"><p>Pure de verdures</p></div>
                <div class="preu"><p>7,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
            <div class="plat4">
                <div class="nom"><p>Arròs amb pollastre (FITNESS BULKING)</p></div>
                <div class="preu"><p>7,50€</p></div>
                <form class="quantitat">
                    <input type="number" name="fname" class="quantitat-boto" value="0">
                </form>
            </div>
        </div>
    </div>

    <div class="begudes">
        <h1>Begudes:</h1>
        <div class="fantaTaronja">
            <div class="nom"><p>Fanta taronja</p></div>
            <div class="preu"><p>1,00€</p></div>
            <form class="quantitat">
                <input type="number" name="fname" class="quantitat-boto" value="0">
            </form>
        </div>
        <div class="Cocacola">
            <div class="nom"><p>Cocacola</p></div>
            <div class="preu"><p>1,00€</p></div>
            <form class="quantitat">
                <input type="number" name="fname" class="quantitat-boto" value="0">
            </form>
        </div>
        <div class="Monster">
            <div class="nom"><p>Monster</p></div>
            <div class="preu"><p>1,00€</p></div>
            <form class="quantitat">
                <input type="number" name="fname" class="quantitat-boto" value="0">
            </form>
        </div>
    </div>

    <div class="enviar">
        <form id="enviarcarro" action="" method="POST">
            <input class="botonenviar" type="submit" value="Enviar comanda">
        </form>
    </div>

    <?php include "footer.php";?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
