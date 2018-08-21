<?php
namespace AppBundle\Listener;

use AppBundle\Service\SuperService;

class SuperListener
{
    
    private $superService;
    
    public function __construct(SuperService $superService)
    {
        $this->superService = $superService;
    }
    
}
