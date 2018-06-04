<?php

namespace Training\Test\Controller\Action;

class Test extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $block = $this->_view->getLayout()->createBlock(\Training\Test\Block\Template::class);
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}
