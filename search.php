<?php
    include 'api.php';
    $search = get(0, $_GET["q"])->recipes;
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
                        foreach ($search as $food_item) {
                             echo '<div class="card"><img class="img-responsive" src="' . $food_item->image_url . '">' .
                              '<h3>'. $food_item->title .'</h3>' .
                              '<div><a href="' . $food_item->publisher_url . '">' . $food_item->publisher . '</a></div>'.
                              '<a href="' . $food_item->source_url . '">Website link</a>' .
                              '<a href="/recipe-detail.php?id=' . $food->recipe_id . '">Read more</a>' .
                              '</div>';
                        }
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
