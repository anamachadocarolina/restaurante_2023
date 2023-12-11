<?php

use Core\Router;

Router::get("/",Controllers\Home::class);
Router::get("/produtos",Controllers\Produtos::class);
Router::get("/produtos/5",Controllers\Produtos::class,'produto');