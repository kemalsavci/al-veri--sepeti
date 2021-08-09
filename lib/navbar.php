<?php
session_start();
if (isset($_SESSION["shoppingCart"])) {

    $shoppinCart = $_SESSION["shoppingCart"];

    $total_count = $shoppinCart["summary"]["total_count"];
    $total_price = $shoppinCart["summary"]["total_price"];
    $shopping_products = $shoppinCart["products"];

} else {
    $total_count = 0;
    $total_price = 0.0;
}
?>
<nav class="navbar navbar-inverse navbar-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">KitapSeç</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Kitaplar</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="shopping-cart.php">
                    <span class="glyphicon glyphicon-shopping-cart"></span>
                    <span class="badge cart-count"><?php echo $total_count; ?></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
