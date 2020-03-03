<?php

namespace Massfice\Application\System;

class JsonDataStorage {
    private static $instance;

    public $data;

    private function __construct() {
        $headers = apache_request_headers();
        if(isset($headers["Content-Type"]) && $headers["Content-Type"] == "application/json") {
            $json = file_get_contents("php://input");
            if($json != "") {
                $this->data = json_decode($json, true);
            } else {
                $this->data = [];
            }
        } else {   
            $this->data = [];
        }
    }

    public static function getInstance() : self {
        if(!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}

?>