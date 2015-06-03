<?php

namespace BestTrip\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BestTripAdminBundle:Default:index.html.twig');
    }
}
