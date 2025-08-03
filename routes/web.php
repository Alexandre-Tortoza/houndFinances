<?php
require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

/*  NOTE: glon()
 *
 *  A função glob() procura por todos os caminhos que
 *  correspondem à expressão em pattern de acordo com
 *  as regras usadas pela função glob() da libc, que
 *  é semelhante às regras usadas por shells comuns.
 **/
$routerFiles = glob(__DIR__ . '/web/*.php');

foreach ($routerFiles as $route) {
    require $route;
};
