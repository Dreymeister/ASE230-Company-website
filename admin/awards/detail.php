<?php
require_once('../management.php');
$awardsManager = new EntityManagement('awards');

$awardsName = $_GET['id'];
$award = $awardsManager->getEntity($awardsName);
?>

<h1>Award Details</h1>
<h2><?php echo $awardsName; ?> (<?php echo $award['year']; ?>)</h2>
<p><?php echo $award['description']; ?></p>

<a href="edit.php?id=<?php echo $awardsName; ?>"><button>Edit</button></a> &nbsp;
<a href="delete.php?id=<?php echo $awardsName; ?>"><button>Delete</button></a>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>