<?php

$request = str_replace("/sober-shop", "", $_SERVER['REQUEST_URI']);
$request = preg_replace('/\?[a-zA-Z]+\_*[a-zA-Z]*\=[a-zA-z0-9]+(&[a-zA-Z]+\_*[a-zA-Z]*=[a-zA-Z0-9])*/', "", $request);
// $request = $_SERVER["REQUEST_URI"];

switch ($request) {
    case '/' :
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        require __DIR__ . '/views/index.php';
        break;
    case '/about' :
        require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>