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

            <h3 class="formulaire_title"> CHOOSE THE CHARACTER TO COMPARE</h3>

            <form method="post" action="traitement.php">
                <div class="formulaire_all">
                    <p class="formulaire_left" style="margin-right: 20px;">
                        Choose the first class :<br />
                        <input type="radio" name="character1" value="swordman1" id="swordman1" /> <label for="swordman1">Swordman</label><br />
                        <input type="radio" name="character1" value="spearman1" id="spearman1" /> <label for="spearman1">Spearman</label><br />
                        <input type="radio" name="character1" value="ninja1" id="ninja1" /> <label for="ninja1">Ninja</label><br />
                        <input type="radio" name="character1" value="archer1" id="archer1" /> <label for="archer1">Archer</label><br />
                        <input type="radio" name="character1" value="gunner1" id="gunner1" /> <label for="gunner1">Gunner</label><br />
                        <input type="radio" name="character1" value="artificier1" id="artificier1" /> <label for="artificier1">Artificier</label><br />
                        <input type="radio" name="character1" value="exorcist1" id="exorcist1" /> <label for="exorcist1">Exorcist</label><br />
                    </p>

                    <p class="formulaire_right" style="margin-left: 20px;">
                        Choose the second class :<br />
                        <input type="radio" name="character2" value="swordman2" id="swordman2" /> <label for="swordman2">Swordman</label><br />
                        <input type="radio" name="character2" value="spearman2" id="spearman2" /> <label for="spearman2">Spearman</label><br />
                        <input type="radio" name="character2" value="ninja2" id="ninja2" /> <label for="ninja2">Ninja</label><br />
                        <input type="radio" name="character2" value="archer2" id="archer2" /> <label for="archer2">Archer</label><br />
                        <input type="radio" name="character2" value="gunner2" id="gunner2" /> <label for="gunner2">Gunner</label><br />
                        <input type="radio" name="character2" value="artificier2" id="artificier2" /> <label for="artificier2">Artificier</label><br />
                        <input type="radio" name="character2" value="exorcist2" id="exorcist2" /> <label for="exorcist2">Exorcist</label><br />

                    </p>
                </div>
                <p><input type="submit" value="Compare Stats" /></p>
            </form>

        <footer>

        </footer>

    </body>

</html>