<?php

namespace Ddpkts\OXIDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Ddpkts\OXIDBundle\Document\ProductDocument;
use ONGR\ElasticsearchBundle\ORM\Manager;

/**
 * Class ProductController
 * @package Ddpkts\OXIDBundle\Controller
 */
class ProductController extends Controller
{
    /**
     * Renders product document.
     *
     * @param ProductDocument $document
     * @return Response
     */
    public function documentAction(ProductDocument $document)
    {
        return $this->render('DdpktsOXIDBundle:Product:id.html.twig', ['product' => $document]);
    }
}
