<?php
$output = shell_exec('cd /var/www/maxdigital && git pull 2>&1');
echo "<pre>$output</pre>";
?>
