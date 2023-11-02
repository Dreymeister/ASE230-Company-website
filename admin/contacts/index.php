<?php
require_once('contacts.php');
$requests = getRequests();
echo '<table style="border: 1px solid black; border-collapse: collapse;">
<tr style="border: 1px solid black; border-collapse: collapse;">
<th style="border: 1px solid black; border-collapse: collapse;">Contact Request ID</th>
<th style="border: 1px solid black; border-collapse: collapse;">Details</th>
</tr>';
tableRowRequests($requests);
echo '</table><br />';

?>