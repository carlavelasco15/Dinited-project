<?php    
namespace Pulsestorm\Bundle\HelloworldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OurController extends Controller
{
    public function indexAction()
    {
        $response = $this->render('PulsestormHelloworldBundle:Default:our-template.html.twig'); 

        return $response;
    }
}    