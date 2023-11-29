<?php
require_once('../management.php');
$awardsManager = new EntityManagement('awards');
if(count($_POST)>0){
    $awardsManager->updateEntity($_POST);
    header('Location: index.php');
} else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Award Name</label><br />
        <input type="text" name="awardsName" /> <br />
    </div>
    <br />
    <div>
        <label>Year</label><br />
        <input type="text" name="year" /> <br />
    </div>
    <br />
    <div>
        <label>Description</label><br />
        <input name="description"></textarea><br />
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