<?php 
require_once('../management.php');
$awardsManager = new EntityManagement('awards');
if(count($_POST)>0){
    $awardsManager->deleteEntity($_POST['id']);
    header('Location: index.php');
} else {
$awardsName = $_GET['id'];
?>

<h1>Delete Award</h1>
<h2>Are you sure you want to delete "<?= $awardsName?>"?</h2>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $awardsName ?>">
    <button type="submit">Yes</button>
    <a href="detail.php?id=<?php echo $awardsName; ?>"><button type="button">No</button></a>
</form>


<?php
}