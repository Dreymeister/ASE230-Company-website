<?php 
require_once('pages.php');
if(count($_POST)>0){
    updatePage($_POST);
    header('Location: detail.php?id='.$_POST['pageName']);
} else {
    $pageName = $_GET['id'];
    $pageContents = getPage($pageName);

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Page Name</label><br />
        <input type="text" name="pageName" value="<?= $pageName ?>" readonly/> <br />
    </div>
    <br />
    <div>
        <label>Page Contents</label><br />
        <textarea name="pageContent"><?= $pageContents ?></textarea><br />
    </div>
    <br />
    <div>
        <button type="submit">Edit Item</button>
</div>
</form>

<footer>
    <br /><a href="detail.php?id=<?= $pageName ?>">Back to Details</a>
</footer>

<?php
}