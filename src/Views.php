<?php

namespace Massfice\Application\System;

use Massfice\View\View;
use Massfice\Application\ViewConfig;

class Views {
    public static function generateView(string $template, array $data = []) {
        $loadedData = ViewConfig::assingedVariables();
        View::getInstance(dirname(__DIR__,3)."/views",$loadedData)->generate($template, $data);
    }
}

?>