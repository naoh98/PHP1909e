<?php

$json1 = '[{"ten":"Ha Noi","gdp":"10 t\u1ef7 USD"},{"ten":"Hai Phong","gdp":"20 t\u1ef7 USD"},{"ten":"Bac Ninh","gdp":"30 t\u1ef7 USD"}]';

$mang1 = json_decode($json1);

echo "<pre>";
print_r($json1);
echo "</pre>";

echo "<pre>";
print_r($mang1);
echo "</pre>";