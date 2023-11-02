<?php 
require_once('team.php');
if(count($_POST)>0){
    updateTeam($_POST);
    header('Location: detail.php?id='.$_POST['memberName']);
} else {
$team = getTeam();
$memberName = $_GET['id'];
$member = getMember($memberName);

?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label>Member Name</label><br />
        <input type="text" name="memberName" value="<?= $memberName ?>"/> <br />
    </div>
    <div>
        <label>Role</label><br />
        <input type="text" name="role" value="<?= $member['role'] ?>"/> <br />
    </div>
    <div>
        <label>Description</label><br />
        <input type="text" name="description" value="<?= $member['description'] ?>"></textarea><br />
    </div>
    <br />
    <div>
        <label>Image</label><br />
    <input type="file" name="image" accept="image/*">
    <input type="hidden" name="oldImage" value="<?= $member['image'] ?>">
    </div>
    <br />
    <div>
        <button type="submit">Edit Item</button>
</div>
</form>

<footer>
    <br /><a href="detail.php?id=<?= $memberName ?>">Back to Details</a>
</footer>

<?php
}