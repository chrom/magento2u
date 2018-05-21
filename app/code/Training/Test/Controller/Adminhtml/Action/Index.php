<?php

namespace Training\Test\Controller\Adminhtml\Action;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD");
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret == 1;
    }
}