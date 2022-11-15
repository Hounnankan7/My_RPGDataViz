<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <title>MyRPG DataViz</title>
        <meta name="description" content="A simple web page and data projects to play around.">
        <meta name="hounnankan_prince_donald" content="Data about a game">

        <link rel="stylesheet" href="css/stylesheet.css">
        <link rel="icon" type="image/x-icon" href="images/icons/favicon.png">

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>    <!--Integration de Chart.js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js">//Telechargement de la bibliothèque</script>
    </head>

    <body>

        <div class="menu_main">
            <div>
                <h1 class="title">MyRPG DataViz <span class="style_point">.</span></h1>
            </div>

            <div>
                <nav class="menu">
                    <ul>
                    <li><a href="index.php">What for ?</a></li>
                        <li><a href="characters.php">Characters</a></li>
                        <li><a href="ennemies.php">Ennemies</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="presentation">
            <!-- FORMULAIRE -->
            <h3 class="formulaire_title"> CHOOSE THE ENNEMIE YOU WANT TO SEE</h3>
            <form method="post" action="traitement2.php">
                <div class="formulaire_all">
                    <p style="margin-right: 20px;">
                        <input list="ennemie" name="ennemie">
                        <datalist id="ennemie">
                            <option value="Kenshin Uesugi">
                            <option value="Motochika Chosokabe">
                            <option value="Nagamasa Azai">
                            <option value="Oda Nobunaga">
                        </datalist>
                    </p>
                </div>
                <p><input type="submit" value="See Information" /></p>
            </form>
        </div>

        <footer>

        </footer>

    </body>

</html>