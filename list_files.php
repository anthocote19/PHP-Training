<?php
$files = array_diff(scandir("uploads/"), ['.', '..']);
foreach ($files as $file) {
    echo "<a href='uploads/$file' download>$file</a><br>";
}
?>
