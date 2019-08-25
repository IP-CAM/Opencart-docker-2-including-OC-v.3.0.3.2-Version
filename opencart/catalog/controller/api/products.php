<?php
require "common.php";
 
$url = 'http://localhost:8000/index.php?route=api/custom/products';
$json = do_curl_request($url, $fields);
$data = json_decode($json);
 
var_dump($data);