<!DOCTYPE html>
<html lang="en">
<head>
    <title>kitapsec.com</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script datatype="javascript" type="application/javascript" src="assets/src/custom.js"></script>
</head>
<body>
<?php require_once "lib/db.php" ?>
<?php
//Veri çekme bölümü
$products = $db->query("SELECT * from products", PDO::FETCH_OBJ)->fetchAll();
?>

<?php include "lib/navbar.php" ?>

<h2 class="text-center">Kitap Listesi</h2><br><br><br>
<div class="container">

    <div class="row">
        <?php foreach ($products as $product) { ?>
            <div class="col-sm-3 col-md-3">
                <div class="img-thumbnail">
                    <img src="assets/images/<?php echo $product->img_url; ?>"
                         alt="<?php echo $product->product_name; ?>" width="220" height="270">
                    <div class="caption">
                        <h5 class="card-title"><?php echo $product->product_name; ?></h5>
                        <p class="card-text"><?php echo $product->detail; ?></p>
                        <p class="text-right price-container"><strong><?php echo $product->price; ?></strong></p>
                        <p>
                            <button product-id="<?php echo $product->id; ?>"
                                    class="btn btn-primary btn-block addToCartBtn" role="button">
                                <span class="glyphicon glyphicon-shopping-cart">  SepeteEkle</span>
                            </button>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</body>
</html>
