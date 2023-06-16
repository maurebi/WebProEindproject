<?php
$turnData = json_encode($_POST);
file_put_contents('../turn.json', $turnData);
echo $turnData;
?>
