<?php
require_once('awards.php');
if(count($_POST)>0){
    updateAwards($_POST);
    header('Location: index.php');
} else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Award Name</label><br />
        <input type="text" name="awardName" /> <br />
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