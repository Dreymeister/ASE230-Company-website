<?php 
require_once('pages.php');
if(count($_POST)>0){
    deletePage($_POST['id']);
    header('Location: index.php');
} else {
$pageName = $_GET['id'];
?>

<h1>Delete Page</h1>
<h2>Are you sure you want to delete "<?= $pageName?>"?</h2>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <input type="hidden" name="id" value="<?= $pageName ?>">
    <button type="submit">Yes</button>
    <a href="detail.php?id=<?php echo $pageName; ?>"><button type="button">No</button></a>
</form>


<?php
}