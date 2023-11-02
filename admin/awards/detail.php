<?php
require_once('awards.php');
$awardName = $_GET['id'];
$award = getAward($awardName);
?>

<h1>Award Details</h1>
<h2><?php echo $awardName; ?> (<?php echo $award['year']; ?>)</h2>
<p><?php echo $award['description']; ?></p>

<a href="edit.php?id=<?php echo $awardName; ?>"><button>Edit</button></a> &nbsp;
<a href="delete.php?id=<?php echo $awardName; ?>"><button>Delete</button></a>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>