<?php 
require_once('awards.php');
if(count($_POST)>0){
    updateAwards($_POST);
    header('Location: detail.php?id='.$_POST['awardName']);
} else {
$awards = getAwards();
$awardName = $_GET['id'];
$award = getAward($awardName);

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Award Name</label><br />
        <input type="text" name="awardName" value="<?= $awardName ?>"/> <br />
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
    <br /><a href="detail.php?id=<?= $awardName ?>">Back to Details</a>
</footer>

<?php
}