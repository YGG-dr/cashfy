<?php
require_once __DIR__ . '/..routes/router.php';
require_once __DIR__ . '/../routes/web.php';

$router = new Router();
registerRoutes($router);

$router -> dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
spatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
