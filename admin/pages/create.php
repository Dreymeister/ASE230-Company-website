<?php
require_once('pages.php');
if(count($_POST)>0){
    createPage($_POST);
    header('Location: index.php');
} else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <div>
        <label>Page Name</label><br />
        <input type="text" name="pageName"/> <br />
    </div>
    <br />
    <div>
        <label>Page Contents</label><br />
        <textarea name="pageContent"></textarea><br />
    </div>
    <br />
    <div>
        <button type="submit">Submit</button>
</div>
</form>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>

<?php
}