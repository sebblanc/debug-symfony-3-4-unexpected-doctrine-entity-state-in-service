<?php
namespace AppBundle\Service;

use AppBundle\Repository\SuperRepository;

class SuperService
{
    
    private $superRepository;
    
    public function __construct(SuperRepository $superRepository)
    {
        $this->superRepository = $superRepository;
    }
    
    public function getSuperEntityById(int $id){
        
        return $this->superRepository->find($id);
    }
    
}
