<?php

namespace Ddpkts\OXIDBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use ONGR\ElasticsearchBundle\ORM\Manager;
use ONGR\ElasticsearchBundle\Document\DocumentInterface;

/**
 * Class CategoryController
 * @package Ddpkts\OXIDBundle\Controller
 */
class CategoryController extends Controller
{
    /**
     * Renders products document.
     *
     * @param Request           $request
     * @param DocumentInterface $document
     * @return Response
     */
    public function documentAction(Request $request, $document)
    {
        $productList = $this->get('ongr_filter_manager.product_list')->execute($request);

        return $this->render(
            'DdpktsOXIDBundle:Product:list.html.twig',
            [
                'filter_manager' => $productList,
                'category' => $document,
            ]
        );
    }

    /**
     * Category tree.
     *
     * @param string $theme
     * @param int    $maxLevel
     * @param string $partialTree
     * @param string $selectedCategory
     *
     * @return Response
     */
    public function categoryTreeAction($theme, $maxLevel, $partialTree, $selectedCategory)
    {
        return $this->render(
            'DdpktsOXIDBundle:Category:tree.html.twig',
            [
                'theme' => $this->getCategoryTreeTemplate($theme),
                'max_level' => $maxLevel,
                'selected_category' => $selectedCategory,
                'from_category' => $partialTree == 'pt' ? null : $partialTree,
            ]
        );
    }

    /**
     * Returns category tree template name.
     *
     * @param string $theme
     *
     * @return string
     */
    protected function getCategoryTreeTemplate($theme)
    {
        switch ($theme) {
            case 'top':
                return 'DdpktsOXIDBundle:Category:inc/topmenu.html.twig';
            case 'breadcrumb':
                return 'DdpktsOXIDBundle:Category:inc/breadcrumb.html.twig';
            case 'product_breadcrumb':
                return 'DdpktsOXIDBundle:Product:inc/breadcrumb.html.twig';
            default:
                return 'DdpktsOXIDBundle:Category:inc/categorytree.html.twig';
        }
    }
}
