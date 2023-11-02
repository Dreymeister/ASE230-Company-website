<?php 
require_once('team.php');
if(count($_POST)>0){
    deleteMember($_POST['id']);
    header('Location: index.php');
} else {
$memberName = $_GET['id'];
?>

<h1>Delete Product</h1>
<h2>Are you sure you want to delete "<?= $memberName?>"?</h2>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $memberName ?>">
    <button type="submit">Yes</button>
    <a href="detail.php?id=<?php echo $memberName; ?>"><button type="button">No</button></a>
</form>


<?php
}