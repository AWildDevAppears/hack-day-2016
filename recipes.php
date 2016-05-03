<?php
    include 'api.php';

    $allfood = get($_GET[i] || 0)->recipes;
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

                       <nav>
                            <ul class="pagination">
                                <li>
                                <a href="?i=<?php echo $_GET[i] -1;?>" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                                <a href="?i=<?php echo $_GET[i] +1; ?>" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                                </li>
                            </ul>
                        </nav>
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
