<?php
    include 'api.php';
    include 'pantry.mgr.php';

    $response = [];


    foreach ($_GET as $res) {
        array_push($response, '"' . $res . '"');
    }
    $pantry = get_pantry();

    if($response) {
        array_push($pantry, $response);
    }

    put_pantry(implode(',', $response));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>What The Food - Pantry</title>
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
                        <div class="card">
                            <h3>My Pantry</h3>
                            <ul>
                                <?php
                                    foreach ($pantry as $pantry_item) {
                                        echo '<li>' . $pantry_item['name'] . ' - ' . $pantry_item['amount'] . ' ' .  $pantry_item[amount_type] . '</li>';
                                    }
                                ?>
                            </ul>
                        </div>



                         <div class="card">
                            <h3>What can I make from my pantry?</h3>
                            <h4>NYI</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <form action="pantry.php" method="GET" class="card">
                          <div class="form-group">
                            <label>Name: <input type="text" id="name" name="name"></label>
                            <label>Amount: <input type="number" id="amount" name="amount"></label>
                            <label>Type: <input type="text" id="amount_type" name="amount_type"></label>
                          </div>
                          <button type="submit" class="btn btn-primary">Add item</button>
                      </form>
                    </div>

                    <div class="lead-image">
                        <div class="lead-block">
                            <h1>What The Food</h1>
                        <h2>Pantry</h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
