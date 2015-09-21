<?php

namespace Ddpkts\OXIDBundle\Controller;

use Ddpkts\OXIDBundle\Document\ContentDocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ContentController
 * @package Ddpkts\OXIDBundle\Controller
 */
class ContentController extends Controller
{
    /**
     * Renders content document.
     *
     * @param ContentDocument $document
     * @return Response
     */
    public function documentAction(ContentDocument $document)
    {
        return $this->render('DdpktsOXIDBundle:Content:id.html.twig', ['content' => $document]);
    }
}
