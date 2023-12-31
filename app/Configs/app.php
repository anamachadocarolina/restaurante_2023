<?php

defined ('APPLICATION_ENV') || define('APPLICATION_ENV', 'development'); //testing|development|production

defined ('APPLICATION_URL') || define('APPLICATION_URL', 'http://localhost/');

defined ('ADMIN_LTE') || define('ADMIN_LTE', APPLICATION_URL.'/adminlte');

defined ('TEMPLATE_DEFAULT') || define('TEMPLATE_DEFAULT', 'main');

defined ('APPLICATION_NAME') || define('APPLICATION_NAME', 'sistema');

defined ('APPLICATION_LANGUAGE') || define('APPLICATION_LANGUAGE', 'pt-br');

defined ('APPLICATION_VERSION') || DEFINE('APPLICATION_VERSION', '1.0.0');

defined ('PAGE_404') || DEFINE('PAGE_404', [\Controllers\ErrorController::class,'page404']);

defined ('SESSION_NAME') || DEFINE('SESSION_NAME', 'Restaurante_IF');