<?php
require_once('products.php');
$products = getProducts();
echo '<table style="border: 1px solid black; border-collapse: collapse;">
<tr style="border: 1px solid black; border-collapse: collapse;">
<th style="border: 1px solid black; border-collapse: collapse;">Product Name</th>
<th style="border: 1px solid black; border-collapse: collapse;">Details</th>
</tr>';
tableRowProducts($products);
echo '</table><br />
<a href="create.php">Create New Product</a>';

?>