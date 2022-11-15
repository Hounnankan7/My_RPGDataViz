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
            <h2>What for ?</h2>
            <p class="we">MyRPG DataViz is a personal project to develop a website, initiate to practice knowledge in SQL, PHP, HTML5, CSS3.
                Creation of a database of stats for characters, and enemies of a game under development. Retrieval of this 
                data to perform data analysis.
            </p>

            <div class="col_left">
                <img class="img_col" src="images/icons/icons8-database-48.png" alt="">
            </div>
            <div class="col_center"></div>
            <div class="col_right">
                <h2 class="img_title">My Own Database</h2>
            </div>
            <p class="des">Using phpmyAdmin and MySQL, a database containing a list of: characters, enemies, and items from my game.</p>

            <div class="col_left_2">
                <img class="img_col" src="images/icons/icons8-combo-chart-48.png" alt="">
            </div>
            <div class="col_center"></div>
            <div class="col_right">
                <h2 class="img_title">Data Vizualisation</h2>
            </div>
            <p class="des">Using the different data stored in the SQL database, Chart.js and some web page developed, we display a 
                visualisation of the comparaison.
            </p>

        </div>

        <footer>

        </footer>

    </body>

</html>