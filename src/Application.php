<?php

namespace Massfice\Application\System;

use Massfice\ActionManager\ActionManagerFactory;
use Massfice\Application\Config;

class Application {
    public static function run() {
        $type = Cleans::getType();
        $action = Cleans::getAction();
        $data = Config::getConfig();
        
        $namespace = isset($data["_System_Action_Namespace"]) ? $data["_System_Action_Namespace"] : "\\Massfice\\Application\\";
        
        $manager = ActionManagerFactory::create($type,$namespace);
        $action = $manager->createAction($action);
        $executor = $manager->createExecutor();
        
        $executor->execute($action,$data);
    }
}

?>