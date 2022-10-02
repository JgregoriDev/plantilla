<?php
require 'vendor/autoload.php';
$router = new AltoRouter();

// map homepage
// $router->map('GET', '/', function () {
//   echo "Index";
// });

// map user details page
// $router->map('GET', '/user', function ($id) {
//   echo "user";
// });
$router->map('GET', '/', 'ArticlesController#llistarArticles', 'Articles_list');
$router->map('GET', '/article', 'ArticlesController#conseguirArticle', 'Article_get');