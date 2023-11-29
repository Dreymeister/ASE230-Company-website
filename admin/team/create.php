<?php
require_once('team.php');
if(count($_POST)>0){
    updateTeam($_POST);
    header('Location: index.php');
} else {
?>

<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label>Member Name</label><br />
        <input type="text" name="memberName" /> <br />
    </div>
    <div>
        <label>Role</label><br />
        <input type="text" name="role" /> <br />
    </div>
    <div>
        <label>Description</label><br />
        <input type="text" name="description" /><br />
    </div>
    <br />
    <div>
        <label>Image</label><br />
        <input type="file" name="image" /> <br />
    </div>
    <br />
    <div>
        <button type="submit">Create</button>
</div>
</form>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>

<?php
}