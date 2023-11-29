<?php 
require_once('../management.php');
$awardsManager = new EntityManagement('awards');
if(count($_POST)>0){
    $awardsManager->updateEntity($_POST);
    header('Location: detail.php?id='.$_POST['awardsName']);
} else {

$awardsName = $_GET['id'];
$award = $awardsManager->getEntity($awardsName);

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Award Name</label><br />
        <input type="text" name="awardsName" value="<?= $awardsName ?>"/> <br />
    </div>
    <br />
    <div>
        <label>Year</label><br />
        <input type="text" name="year" value="<?= $award['year'] ?>"/> <br />
    </div>
    <br />
    <div>
        <label>Description</label><br />
        <input name="description" value='<?= $award['description'] ?>'></textarea><br />
    </div>
    <br />
    <div>
        <button type="submit">Edit Item</button>
</div>
</form>

<footer>
    <br /><a href="detail.php?id=<?= $awardsName ?>">Back to Details</a>
</footer>

<?php
}