<?php
$load = "point.txt";
$contents=file_get_contents("$load");
$final = str_replace("fasy","$ip","$contents");
echo "$final";
