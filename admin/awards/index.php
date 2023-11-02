<?php
require_once('awards.php');
$awards = getAwards();
echo '<table style="border: 1px solid black; border-collapse: collapse;">
<tr style="border: 1px solid black; border-collapse: collapse;">
<th style="border: 1px solid black; border-collapse: collapse;">Award Name</th>
<th style="border: 1px solid black; border-collapse: collapse;">Year</th>
<th style="border: 1px solid black; border-collapse: collapse;">Details</th>
</tr>';
tableRowAwards($awards);
echo '</table><br />
<a href="create.php">Create New Award</a>';

?>