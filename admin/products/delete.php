<?php 
require_once('products.php');
if(count($_POST)>0){
    deleteProduct($_POST['id']);
    header('Location: index.php');
} else {
$productName = $_GET['id'];
?>

<h1>Delete Product</h1>
<h2>Are you sure you want to delete "<?= $productName?>"?</h2>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $productName ?>">
    <button type="submit">Yes</button>
    <a href="detail.php?id=<?php echo $productName; ?>"><button type="button">No</button></a>
</form>


<?php
}