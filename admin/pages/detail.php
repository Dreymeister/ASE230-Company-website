<?php
require_once('pages.php');
$pageName = $_GET['id'];
$pageContents = getPage($pageName);
?>

<h1>Page Details</h1>
<h2>File Name: <?php echo $pageName; ?></h2>
<h3>Page Contents:</h3>
<p><?php echo $pageContents ?></p>

<a href="edit.php?id=<?php echo $pageName; ?>"><button>Edit</button></a> &nbsp;
<a href="delete.php?id=<?php echo $pageName; ?>"><button>Delete</button></a>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>