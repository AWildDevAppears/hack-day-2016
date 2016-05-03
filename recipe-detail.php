<?php
    include 'api.php';
    $foodItem = getById($_GET[id])->recipe;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What The Food - Recipes</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/site.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
</head>
<body>

        <?php include 'includes/nav.php'; ?>
<div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
                       <?php


                            echo '<div class="card">' .
                            '<h2>' . $foodItem->title . '</h2>' .
                            '<img src="' . $foodItem->image_url . '">' ;

                            echo "<ul>";
                            foreach ($foodItem->ingredients as $ingredient) {
                                echo "<li>".$ingredient."</li>";

                            }
                            echo "</ul>";echo"</div>";


                       ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lead-image">
                          <div class="lead-block">
                            <h1>What The Food</h1>
                            <h2>Recipes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
