<?php

namespace Ddpkts\OXIDBundle\Controller;

use ONGR\ElasticsearchBundle\ORM\Manager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Ddpkts\OXIDBundle\Document\ProductDocument;

/**
 * Class DefaultController
 * @package Ddpkts\OXIDBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Renders homepage.
     *
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('DdpktsOXIDBundle:Default:index.html.twig');
    }
}
