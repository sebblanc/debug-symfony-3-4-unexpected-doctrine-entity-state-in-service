<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
//use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Service\SuperService;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(SuperService $superService)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $superEntity = $superService->getSuperEntityById('1');
        if(!$superEntity){
            
            return new Response('Please populate your DB before testing');
        }
        $uow = $em->getUnitOfWork();
        $state = $uow->getEntityState($superEntity);
        
        return new Response('State of $superEntity is ' . $state . ' and should be 1');
    }
}
