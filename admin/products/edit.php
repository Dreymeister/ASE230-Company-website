<?php 
require_once('../management.php');
$productsManager = new EntityManagement('products');
if(count($_POST)>0){
    $productsManager->updateEntity($_POST);
    header('Location: detail.php?id='.$_POST['productsName']);
} else {
    $productsName = $_GET['id'];
    $product = $productsManager->getEntity($productsName);
    $keys = array_keys($product['applications']);

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Product Name</label><br />
        <input type="text" name="productsName" value="<?= $productsName ?>"/> <br />
    </div>
    <div>
        <label>Description</label><br />
        <input name="description" value="<?= $product['description'] ?>" /><br />
    </div>
    <br />
    <div>
        <label>Applications</label><br /><br />
        <div>
            <label>Application 1 Name</label><br />
            <input type="text" name="app1Name" value="<?= $keys[0] ?>"/><br />
            <label>Application 1 Description</label><br />
            <input type="text" name="app1Description" value="<?= $product['applications'][$keys[0]]?>"/>
        </div>
        <br />
        <div>
            <label>Application 2 Name</label><br />
            <input type="text" name="app2Name" value="<?= $keys[1] ?>"/><br />
            <label>Application 2 Description</label><br />
            <input type="text" name="app2Description" value="<?= $product['applications'][$keys[1]]?>"/>
        </div>
    </div>
    <br />
    <div>
        <button type="submit">Edit Item</button>
</div>
</form>

<footer>
    <br /><a href="detail.php?id=<?= $productsName ?>">Back to Details</a>
</footer>

<?php
}