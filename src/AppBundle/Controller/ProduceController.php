<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProduceController extends Controller
{
    /**
     * @Route("/produce", name="produce")
     */
    public function produceAction()
    {
        for ($i = 1; $i < 21; ++$i) {
            $msg = array('firstName' => 'first name'.$i, 'lastName' => 'last name'.$i);
            $this->get('producer_service')->publish(json_encode($msg));
        }

        return $this->redirectToRoute('homepage');
    }
}
