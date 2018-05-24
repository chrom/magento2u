<?php

namespace Training\Test\Controller\Action;

class Block extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $layout = $this->_view->getLayout();
        $block  = $layout->createBlock('Training\Test\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());
    }
}