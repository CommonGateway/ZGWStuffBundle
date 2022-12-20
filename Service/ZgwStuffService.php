<?php

// src/Service/ZgwStuffService.php

namespace CommonGateway\ZgwStuffBundle\Service;

class ZgwStuffService
{

    /*
     * Returns a welcoming string
     * 
     * @return array 
     */
    public function zgwStuffHandler(array $data, array $configuration): array
    {
        return ['response' => 'Hello. Your ZgwStuffBundle works'];
    }
}
