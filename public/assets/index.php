<?php

require "../../bootstratp.php";

use core\Controller;

use app\classes\Uri;

try {

    $controller = new Controller;
    $controller = $controller->load();
    dd($controller);
} catch (\Exception $e) {

    dd($e->getMessage());
}
