<?php

echo disk_total_space("f:") / 1024 / 1024 / 1024 . "<br>";
echo disk_free_space("f:") / 1024 / 1024 / 1024 . "<br>";

// echo fread ("https://elzero.net", 1024);

// echo phpinfo();

echo "<pre>";
print_r ($_SERVER);
echo "</pre>";