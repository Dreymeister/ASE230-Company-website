<?php
require_once('../management.php');
$awardsManager = new EntityManagement('awards');
$awards = $awardsManager->getEntities();

echo '<table style="border: 1px solid black; border-collapse: collapse;">
<tr style="border: 1px solid black; border-collapse: collapse;">
<th style="border: 1px solid black; border-collapse: collapse;">Award Name</th>
<th style="border: 1px solid black; border-collapse: collapse;">Year</th>
<th style="border: 1px solid black; border-collapse: collapse;">Details</th>
</tr>';
$awardsManager->tableRowEntities($awards);
echo '</table><br />
<a href="create.php">Create New Award</a><br />
<a href="../index.php">Back to Admin Portal</a>';

?>