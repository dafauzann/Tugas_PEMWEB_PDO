<?php 
    include ('function.php');

    $customer = showData("SELECT*FROM customers");
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
    <a href="tambahCustomer.php">Tambah Data Customer</a>
    <br><br>
    <h3>Customers Table</h3>
    <table border="1" cellpadding="10px" cellspacing="0">
        <tr>
            <th>Customer Number</th>
            <th>Edit</th>
            <th>Customer Name</th>
            <th>Contact Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Sales Employee Number</th>
            <th>Credit Limit</th>
        </tr>
        <?php foreach($customer as $customerRow) : ?>
        <tr>
            <td><?= $customerRow["customerNumber"]?></td>
            <td><a href="updateCustomer.php?customerNumber=<?= $customerRow["customerNumber"]; ?>">Update</a> |<a
                    href="hapusCustomer.php?customerNumber=<?= $customerRow["customerNumber"]; ?>">Delete</a>
            </td>
            <td><?= $customerRow["customerName"]?></td>
            <td><?= $customerRow["contactFirstName"]," ", $customerRow["contactLastName"]?></td>
            <td><?= $customerRow["phone"]?></td>
            <td><?= $customerRow["addressLine1"], " ", $customerRow["addressLine2"]?></td>
            <td><?= $customerRow["city"]?></td>
            <td><?= $customerRow["state"]?></td>
            <td><?= $customerRow["postalCode"]?></td>
            <td><?= $customerRow["country"]?></td>
            <td><?= $customerRow["salesRepEmployeeNumber"]?></td>
            <td><?= $customerRow["creditLimit"]?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>