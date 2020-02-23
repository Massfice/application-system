<?php

namespace Massfice\Application\System;

class JsonData {
    public function get($key) {
        $data = JsonDataStorage::getInstance()->data;

        if(isset($data[$key])) {
            return $data[$key];
        } else {
            return null;
        }
    }
}

?>