<?php

namespace Massfice\Application\System;

use Massfice\Service\ServiceExecutor;
use Massfice\Service\ServiceObjectFactory;
use Massfice\Service\ServiceObject;

class Services {
    public static function execute(string $service, array $data = []) : ServiceObject {
        $factory = new ServiceObjectFactory("Massfice\\Application\\Services");
        $service = $factory->create($service);
        return ServiceExecutor::execute($service,$data);

    }
}

?>