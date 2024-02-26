<?php
require 'helper/connection.php';
require 'helper/pagination.php';

$selectAll = "SELECT * FROM product";
$prepareSelectAll = $connection->prepare($selectAll);
$prepareSelectAll->execute();
$products = $prepareSelectAll->fetchAll();


$totalRecord = count($products);
$recordPerPage = 2;
$currentPage = (int) ($_GET['page'] ?? 1);

$pagination = new Pagination($totalRecord, $recordPerPage, $currentPage);

$offset = $pagination->getOffset();

$select = "SELECT * FROM product LIMIT ?, ?";
$prepareSelect = $connection->prepare($select);
$prepareSelect->bindValue(1, $offset, PDO::PARAM_INT);
$prepareSelect->bindValue(2, $recordPerPage, PDO::PARAM_INT);
$prepareSelect->execute();
$productsList = $prepareSelect->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Unit</th>
            <th>Stock</th>
            <th>Price</th>
        </tr>
        <?php
        $no = 0;
        foreach ($productsList as $product) {
        ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $product['name']; ?></td>
                <td><?= $product['unit']; ?></td>
                <td><?= $product['stock']; ?></td>
                <td><?= $product['price']; ?></td>
            </tr>
        <?php } ?>


    </table>
    <div>
        <?php foreach ($pagination->getPages() as $page) { ?>
            <a href="?page=<?= $page; ?>"><?= $page; ?></a>

        <?php } ?>
    </div>
</body>

</html>