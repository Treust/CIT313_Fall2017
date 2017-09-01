<!DOCTYPE HTML>
<html>
<?php

include '_includes/config.php';
include ABSOLUTE_PATH . '/_includes/header.inc.php';

?>
<body>
<?php
$myArray = array('Tom' , 'Blue' , 'Blackhawk Down', 'Band of Brothers',
'yahoo');

$myName = $myArray[0];

echo "<h1>My name is $myName<h1/>";

?>
</body>
<?php

include ABSOLUTE_PATH .'/_includes/footer.inc.php';

 ?>

</html>
