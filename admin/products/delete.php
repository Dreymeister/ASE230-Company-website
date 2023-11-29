<?php 
require_once('../management.php');
$productsManager = new EntityManagement('products');
if(count($_POST)>0){
    $productsManager->deleteEntity($_POST['id']);
    header('Location: index.php');
} else {
$productsName = $_GET['id'];
?>

<h1>Delete Product</h1>
<h2>Are you sure you want to delete "<?= $productsName?>"?</h2>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $productsName ?>">
    <button type="submit">Yes</button>
    <a href="detail.php?id=<?php echo $productsName; ?>"><button type="button">No</button></a>
</form>


<?php
}