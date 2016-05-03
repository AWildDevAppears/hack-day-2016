<?php
    include 'api.php';
    $allfood = get(0, null, 'r')->recipes;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What The Food</title>
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
                            foreach ($allfood as $food) {
                                echo '<div class="card">'.
                                 '<img class="img-responsive" src="' . $food->image_url . '">' .
                                 '<h3>' . $food->title . '</h3>' .
                                 '<div><a href="' . $food->publisher_url . '">' . $food->publisher . '</a></div>' .
                                 '<a href="' . $food->source_url . '">Website link</a>' .
                                 '<a href="/recipe-detail.php?id=' . $food->recipe_id . '">Read more</a>' .
                                 '</div>';
                            }
                       ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="lead-image">
                        <h1>What The Food</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
