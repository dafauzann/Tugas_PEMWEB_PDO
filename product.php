<?php 
    include ('function.php');

    $product = showData("SELECT*FROM products");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Database</title>
</head>

<body>
    <h1>Sample Database</h1>
    <h3><a href="index.php">Customer Table</a> | <a href="product.php">Product Table</a></h3>
    <a href="tambahProduct.php">Tambah Data Produk</a>
    <br><br>
    <h3>Product Table</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Product Code</th>
            <th>Edit</th>
            <th>Product Name</th>
            <th>Product Line</th>
            <th>Product Scale</th>
            <th>Product Vendor</th>
            <th>Product Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>MSRP</th>
        </tr>
        <?php foreach($product as $productRow) : ?>
        <tr>
            <td><?= $productRow["productCode"]  ?></td>
            <td><a href="updateProduct.php?productCode=<?= $productRow["productCode"]; ?>">Update</a> | <a
                    href="hapusProduct.php?productCode=<?= $productRow["productCode"]; ?>">Delete</a></td>
            <td><?= $productRow["productName"]  ?></td>
            <td><?= $productRow["productLine"]  ?></td>
            <td><?= $productRow["productScale"]  ?></td>
            <td><?= $productRow["productVendor"]  ?></td>
            <td><?= $productRow["productDescription"]  ?></td>
            <td><?= $productRow["quantityInStock"]  ?></td>
            <td><?= $productRow["buyPrice"]  ?></td>
            <td><?= $productRow["MSRP"]  ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>