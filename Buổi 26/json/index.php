<?php

$mang1 = [
    ["ten" => "Ha Noi", "gdp" => "10 tỷ USD"],
    ["ten" => "Hai Phong", "gdp" => "20 tỷ USD"],
    ["ten" => "Bac Ninh", "gdp" => "30 tỷ USD"],
];

$json1 = json_encode($mang1);

echo "<pre>";
print_r($mang1);
echo "</pre>";

echo "<pre>";
print_r($json1);
echo "</pre>";