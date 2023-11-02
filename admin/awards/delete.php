<?php 
require_once('awards.php');
if(count($_POST)>0){
    deleteAward($_POST['id']);
    header('Location: index.php');
} else {
$awardName = $_GET['id'];
?>

<h1>Delete Award</h1>
<h2>Are you sure you want to delete "<?= $awardName?>"?</h2>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $awardName ?>">
    <button type="submit">Yes</button>
    <a href="detail.php?id=<?php echo $awardName; ?>"><button type="button">No</button></a>
</form>


<?php
}