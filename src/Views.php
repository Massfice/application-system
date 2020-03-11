<?php

namespace Massfice\Application\System;

use Massfice\View\View;
use Massfice\Application\Configs\ViewConfig;

class Views {
    public static function generateView(string $template, array $data = []) {
        $loadedData = ViewConfig::getAssingedVariables();
        View::getInstance(dirname(__DIR__,4)."/src/Views",$loadedData)->generate($template, $data);
    }
}

?>