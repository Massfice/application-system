<?php

namespace Massfice\Application\System;

use Massfice\ActionManager\ActionManagerFactory;
use Massfice\Application\Configs\DataConfig;
use Massfice\Application\Configs\Config;

class Application {
    public static function run() {
        Config::configure();
        $type = Cleans::getType();
        $action = Cleans::getAction();
        $data = DataConfig::getData();
        
        $namespace = isset($data["_System_Action_Namespace"]) ? $data["_System_Action_Namespace"] : "\\Massfice\\Application\\Actions\\";
        
        $manager = ActionManagerFactory::create($type,$namespace);
        $action = $manager->createAction($action);
        $executor = $manager->createExecutor();
        
        $executor->execute($action,$data);
    }
}

?>