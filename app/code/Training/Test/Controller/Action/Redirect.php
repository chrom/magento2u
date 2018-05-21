<?php

namespace Training\Test\Controller\Action;

class Redirect extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_redirect('catalog/category/view/id/4');
    }
}