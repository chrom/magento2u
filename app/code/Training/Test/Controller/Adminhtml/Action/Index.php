<?php

namespace Training\Test\Controller\Adminhtml\Action;

class Index extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody("HELLO WORLD");
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->appendBody("HELLO WORLD");
        return $resultPage;
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return true;
        $secret = $this->getRequest()->getParam('secret');
        return isset($secret) && (int)$secret == 1;
    }
}