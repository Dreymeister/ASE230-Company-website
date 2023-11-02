<?php
require_once('team.php');
$team = getTeam();
echo '<table style="border: 1px solid black; border-collapse: collapse;">
<tr style="border: 1px solid black; border-collapse: collapse;">
<th style="border: 1px solid black; border-collapse: collapse;">Member Name</th>
<th style="border: 1px solid black; border-collapse: collapse;">Details</th>
</tr>';
tableRowTeam($team);
echo '</table><br />
<a href="create.php">Create New Team Member</a>';

?>