<?php

namespace Ddpkts\OXIDBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;

/**
 * Product document.
 *
 * @ES\Document(type="product")
 */
class ProductDocument extends \ONGR\OXIDConnectorBundle\Document\ProductDocument
{
}
