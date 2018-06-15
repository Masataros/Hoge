<?php

$base_url = "";
$json = file_get_contents($base_url);
$json = mb_convert_encoding($json, 'UTF-8');
print $json;
