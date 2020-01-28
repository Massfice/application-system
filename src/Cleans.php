<?php

namespace Massfice\Application\System;

use Massfice\CleanUrl\CleanUrl;

class Cleans {
    private static $cleans;

    private static function getCleans() : CleanUrl {
        if(!isset(self::$cleans)) {
            self::$cleans = new CleanUrl();
        }

        return self::$cleans;
    }

    public static function getAction() : string {
        $cleans = self::getCleans();

        return $cleans->getAction();
    }

    public static function getType() : string {
        $cleans = self::getCleans();

        return $cleans->getType();
    }

    public static function get(int $index) : ?string {
        $cleans = self::getCleans();

        return $cleans->get($index,false);
    }
}

?>