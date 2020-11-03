<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CANTINA PEDRALBES</title>
    <link rel="stylesheet" href="/css/menu.css">
    <script src="script.js" defer></script>
</head>
<body>
    <?php include 'header.php';?>
    
    <h1>Entrepans</h1>
    <div class="menumati">
        <div class="entrepans">
            <h2></h2>
            <div class="productes">
                <div class="producte1">
                    <div class="titol"><h3>Donut</h3></div>
                    <img class="imatgeProductes" src="./imatges/donutsxoco.jpg" alt="Donut">
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
        <form action="" method="POST"><input class="fercomanda-boto" type="submit" value="Realitzar comanda"></form>
    </div>

    <?php include "php/footer.php";?>
    
</body>
</html>