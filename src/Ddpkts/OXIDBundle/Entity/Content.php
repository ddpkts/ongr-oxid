<?php

namespace Ddpkts\OXIDBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="oxcontents")
 */
class Content extends \ONGR\OXIDConnectorBundle\Entity\Content
{
    /**
     **
     * @var string
     *
     * @ORM\Column(name="OXTITLE_1", type="string")
     *
     protected $title;

     **
     * @var string
     *
     * @ORM\Column(name="OXCONTENT_1", type="text")
     *
     protected $content;
     */
}
