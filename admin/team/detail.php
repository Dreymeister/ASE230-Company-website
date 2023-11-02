<?php
require_once('team.php');
$memberName = $_GET['id'];
$member = getMember($memberName);
?>

<h1>Member Details</h1>
<h2><?php echo $memberName; ?></h2>
<p><strong>Role:</strong> <?php echo $member['role']; ?></p>
<p><strong>Description:</strong><?php echo $member['description']; ?></p>
<p><strong>Image:</strong> <img src="../../<?php echo $member['image']; ?>" alt="<?php echo $memberName; ?>" style="max-width: 200px; max-height: 200px"/></p>

<a href="edit.php?id=<?php echo $memberName; ?>"><button>Edit</button></a> &nbsp;
<a href="delete.php?id=<?php echo $memberName; ?>"><button>Delete</button></a>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>