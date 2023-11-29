<?php
require_once('../management.php');
$productsManager = new EntityManagement('products');
$products = $productsManager->getEntities();

echo '<table style="border: 1px solid black; border-collapse: collapse;">
<tr style="border: 1px solid black; border-collapse: collapse;">
<th style="border: 1px solid black; border-collapse: collapse;">Product Name</th>
<th style="border: 1px solid black; border-collapse: collapse;">Details</th>
</tr>';
$productsManager->tableRowEntities($products);
echo '</table><br />
<a href="create.php">Create New Award</a><br />
<a href="../index.php">Back to Admin Portal</a>';

?>