<?php
require_once('../management.php');
$productsManager = new EntityManagement('products');
if(count($_POST)>0){
    $productsManager->updateEntity($_POST);
    header('Location: index.php');
} else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Product Name</label><br />
        <input type="text" name="productsName" /> <br />
    </div>
    <div>
        <label>Description</label><br />
        <input name="description" /><br />
    </div>
    <br />
    <div>
        <label>Applications</label><br /><br />
        <div>
            <label>Application 1 Name</label><br />
            <input type="text" name="app1Name" /><br />
            <label>Application 1 Description</label><br />
            <input type="text" name="app1Description" />
        </div>
        <br />
        <div>
            <label>Application 2 Name</label><br />
            <input type="text" name="app2Name" /><br />
            <label>Application 2 Description</label><br />
            <input type="text" name="app2Description" />
        </div>
    </div>
    <br />
    <div>
        <button type="submit">Create</button>
</div>
</form>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>

<?php
}