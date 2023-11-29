<?php
require_once('../management.php');
$productsManager = new EntityManagement('products');

$productsName = $_GET['id'];
$product = $productsManager->getEntity($productsName);
?>

<h1>Product Details</h1>
<h2><?php echo $productsName; ?></h2>
<p><?php echo $product['description']; ?></p>
<h3>Applications</h3>
<ul>
<?php 
foreach($product['applications'] as $application => $description){
    echo '<li class="mb-2">'.$application.': '.$description.'</li>';
}
?>
</ul>

<a href="edit.php?id=<?php echo $productsName; ?>"><button>Edit</button></a> &nbsp;
<a href="delete.php?id=<?php echo $productsName; ?>"><button>Delete</button></a>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>