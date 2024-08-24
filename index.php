<?php

require_once 'controllers/template.controller.php';
require_once 'controllers/categories.controller.php';
require_once 'controllers/customers.controller.php';
require_once 'controllers/products.controller.php';
require_once 'controllers/sales.controller.php';
require_once 'controllers/users.controller.php';

$template = new ControllerTemplate();
$template->ctrTemplate();
