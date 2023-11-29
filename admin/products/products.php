<?php

function deleteProduct($productsName) {
    $products = getProducts();
    unset($products[$productsName]);
    $productsJson = json_encode($products, JSON_PRETTY_PRINT);
    file_put_contents('../../data/products.json', $productsJson);
}

function getProducts() {
    $productsJson = file_get_contents('../../data/products.json');
    $products = json_decode($productsJson, true);
    return $products;
}

function getProduct($productsName) {
    $products = getProducts();
    return $products[$productsName];
}

function tableRowProducts($products) {
    foreach($products as $product => $details){
        echo '<tr style="border: 1px solid black; border-collapse: collapse;">
        <td style="border: 1px solid black; border-collapse: collapse;">' . $product . '</td>
        <td style="border: 1px solid black; border-collapse: collapse;"><a href="detail.php?id=' . $product . '">Details</a></td>
        </tr>';
    }
}

function updateProducts($post){
    $products = getProducts();
    $products[$post['productsName']] = [
        'description' => $post['description'],
        'applications' => [
            $post['app1Name'] => $post['app1Description'],
            $post['app2Name'] => $post['app2Description']
        ]
    ];
    $productsJson = json_encode($products, JSON_PRETTY_PRINT);
    file_put_contents('../../data/products.json', $productsJson);
}
?>