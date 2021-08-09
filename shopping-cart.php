<!DOCTYPE html>
<html>
<head>
    <title>Sepetim</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="assets/src/custom.js"></script>
</head>
<body>
<?php include "lib/navbar.php" ?>
<div class="container">
    <?php if ($total_count > 0) { ?>
        <h2 class="text-center"><strong><?php echo $total_count; ?></strong> adet ürün bulunmaktadır.</h2>
        <hr>
        <div class="row">
            <div class="col-md-8 col-md offset-2">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                    <th class="text-center">Ürün Resmi</th>
                    <th class="text-center">Ürün Adı</th>
                    <th class="text-center">Fiyatı</th>
                    <th class="text-center">Adedi</th>
                    <th class="text-center">Toplam</th>
                    <th class="text-center">Sepetten Çıkar</th>
                    </thead>
                    <tbody>
                    <?php foreach ($shopping_products as $product) { ?>
                        <tr>
                            <td class="text-center" width="120">
                                <img src="assets/images/<?php echo $product->img_url; ?>" alt="" width="120">
                            </td>
                            <td class="text-center"><?php echo $product->product_name; ?></td>
                            <td class="text-center"><strong><?php echo $product->price; ?> TL</strong></td>
                            <td class="text-center">
                                <a href="lib/cart_db.php?p=incCount&product_id=<?php echo $product->id; ?>"
                                   class="btn btn-xs btn-success">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                                <input type="text" class="item-count-input" value="<?php echo $product->count; ?>">
                                <a href="lib/cart_db.php?p=decCount&product_id=<?php echo $product->id; ?>"
                                   class="btn btn-xs btn-danger">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                            </td>
                            <td class="text-center"><?php echo $product->total_price; ?> TL</td>
                            <td class="text-center">
                                <button product-id="<?php echo $product->id; ?>"
                                        class="btn btn-danger btn-sm removeFromCartBtn">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    Sepetten Çıkar
                                </button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                    <tfoot>
                    <th colspan="2" class="text-right">
                        Toplam ürün: <span class="color-danger"><?php echo $total_count; ?> adet</span>
                    </th>
                    <th colspan="4" class="text-right">
                        Toplam tutar: <span class="color-danger"><?php echo $total_price; ?> TL</span>
                    </th>
                    </tfoot>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-info">
            <strong>Sepetinizde henüz ürün bulunmamaktadır. Eklemek için <a href="index.php">tıklayınız</a></strong>
        </div>
    <?php } ?>
</div>
<script src="assets/js/jquery-3.6.0.min.map"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/src/custom.js"></script>
</body>
</html>
