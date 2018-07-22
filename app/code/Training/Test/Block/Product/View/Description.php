<?php

namespace Training\Test\Block\Product\View;

class Description extends \Magento\Framework\View\Element\Template
{
    public function beforeToHtml(\Magento\Catalog\Block\Product\View\Description $originalBlock)
    {
        $originalBlock->getProduct()->setDescription('<pre>{Test custom description}</pre>');
        if ($originalBlock->getNameInLayout() !== 'product.info.details') {
            $originalBlock->setTemplate('Training_Test::product/view/attribute.phtml');
        }
    }
}
