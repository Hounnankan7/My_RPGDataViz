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

    <?php 

try {
    // Souvent on identifie cet objet par la variable $conn ou $db
    $mysqlConnection = new PDO('mysql:host=localhost:3307;dbname=game_db;charset=utf8','root','root');

}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


//character 1 stats
$image1 = "";
$health_point1 = 0;
$technical_point1 =0;
$attack_point1 = 0;
$defense_point1 =0;
$agility_point1 =0;
$karma_point1 =0;

//character 2 stats
$image2 = "";
$health_point2 = 0;
$technical_point2 =0;
$attack_point2 = 0;
$defense_point2 =0;
$agility_point2 =0;
$karma_point2 =0;

if ($_POST['character1'] == 'swordman1') {

    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=1');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Swordman';
        $image1 = "images/Swordman.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}
elseif ($_POST['character1'] == 'spearman1') {

    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=2');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Spearman';
        $image1 = "images/Spearman.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}
elseif ($_POST['character1'] == 'ninja1') {
    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=3');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Ninja';
        $image1 = "images/Ninja.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}
elseif ($_POST['character1'] == 'archer1') {
    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=4');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Archer';
        $image1 = "images/Archer.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}
elseif ($_POST['character1'] == 'gunner1') {
    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=5');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Gunner';
        $image1 = "images/Gunner.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}
elseif ($_POST['character1'] == 'artificier1') {
    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=6');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Artificier';
        $image1 = "images/Artificier.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}
elseif ($_POST['character1'] == 'exorcist1') {
    $health_statement1 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=7');
    $health_statement1->execute();
    $a = $health_statement1->fetchAll();

    // On affiche chaque recette une à une
    foreach ($a as $a) {

        $class1 = 'Exorcist';
        $image1 = "images/Exorcist.png";
        $health_point1 = $a['health_point'];
        $technical_point1 =$a['technical_point'];
        $attack_point1 = $a['attack_point'];
        $defense_point1 =$a['defense_point'];
        $agility_point1 =$a['agility_point'];
        $karma_point1 =$a['karma_point'];
    }
}


if ($_POST['character2'] == 'swordman2') {

    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=1');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Swordman';
        $image2 = "images/Swordman.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
    
}
elseif ($_POST['character2'] == 'spearman2') {
    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=2');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Spearman';
        $image2 = "images/Spearman.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
}
elseif ($_POST['character2'] == 'ninja2') {
    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=3');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Ninja';
        $image2 = "images/Ninja.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
}
elseif ($_POST['character2'] == 'archer2') {
    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=4');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Archer';
        $image2 = "images/Archer.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
}
elseif ($_POST['character2'] == 'gunner2') {
    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=5');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Gunner';
        $image2 = "images/Gunner.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
}
elseif ($_POST['character2'] == 'artificier2') {
    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=6');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Artificier';
        $image2 = "images/Artificier.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
}
elseif ($_POST['character2'] == 'exorcist2') {
    $health_statement2 = $mysqlConnection->prepare('SELECT * FROM `class_data` WHERE `id`=7');
    $health_statement2->execute();
    $b = $health_statement2->fetchAll();

    // On affiche chaque recette une à une
    foreach ($b as $b) {

        $class2 = 'Exorcist';
        $image2 = "images/Exorcist.png";
        $health_point2 = $b['health_point'];
        $technical_point2 =$b['technical_point'];
        $attack_point2 = $b['attack_point'];
        $defense_point2 =$b['defense_point'];
        $agility_point2 =$b['agility_point'];
        $karma_point2 =$b['karma_point'];
    }
}
?>


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

       <!-- <div class="presentation">-->
            <div class="chart">
                <canvas id="myChart" style="  width: 30%; height: 30%; margin: 0; padding: 0;"></canvas>
            </div>
       <!--</div> -->

        <script>
            Chart.defaults.plugins.title.display = true;
            Chart.defaults.plugins.title.text = 'PAS DE TITRE';
        </script>

        <script>
            const data = {
                labels: [
                    'Health Point',
                    'Technical Point',
                    'Attack Point',
                    'Defense Point',
                    'Agility Point',
                    'Karma Point'
                ],
                datasets: [{
                    label: '<?=$class1?>',
                    data: ['<?=$health_point1?>', '<?=$technical_point1?>', '<?=$attack_point1?>', '<?=$defense_point1?>', '<?=$agility_point1?>', '<?=$karma_point1?>'],
                    fill: true,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    pointBackgroundColor: 'rgb(255, 99, 132)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(255, 99, 132)'
                }, {
                    label: '<?=$class2?>',
                    data: ['<?=$health_point2?>', '<?=$technical_point2?>', '<?=$attack_point2?>', '<?=$defense_point2?>', '<?=$agility_point2?>', '<?=$karma_point2?>'],
                    fill: true,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgb(54, 162, 235)',
                    pointBackgroundColor: 'rgb(54, 162, 235)',
                    pointBorderColor: '#fff',
                    pointHoverBackgroundColor: '#fff',
                    pointHoverBorderColor: 'rgb(54, 162, 235)'
                }]
            };
        
            const config = {
                type: 'radar',
                data: data,
                options: {

                    elements: {
                    line: {
                        borderWidth: 3
                    }
                    },

                    plugins: {
                        title: {
                            text : "COMPARAISON DE DEUX CLASSES"
                        }
                    },

                    scale: {
                        angleLines: {
                            display: true
                        },
                        ticks: {
                            suggestedMin: 10,
                            suggestedMax: 100
                        }
                    }
                },
                
            };


            const myChart = new Chart(
                document.getElementById('myChart'),
                config
            );
        </script>


    </body>

</html>