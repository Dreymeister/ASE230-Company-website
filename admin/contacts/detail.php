<?php
require_once('contacts.php');
$requestID = $_GET['id'];
$request = getRequest($requestID);
?>

<h1>Request <?php $requestID; ?>Details</h1>
<h2>Requested by: <?php echo $request['name']; ?></h2>
<h3>Phone Number: <?php echo $request['phone']; ?></h3>
<h3>Email: <?php echo $request['email']; ?></h3>
<p>Description: <?php echo $request['description']; ?></p>

<footer>
    <br /><a href="index.php">Back to List</a>
</footer>