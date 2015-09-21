<?php

namespace Ddpkts\OXIDBundle\Document;

use ONGR\ElasticsearchBundle\Annotation as ES;

/**
 * Product document.
 *
 * @ES\Document(type="content")
 */
class ContentDocument extends \ONGR\OXIDConnectorBundle\Document\ContentDocument
{
}
