<?php

namespace Training\Test\Plugin\Controller\Product;

use Magento\Catalog\Controller\Product\View;

class ViewPlugin
{
    /**
     * @param View $subject
     * @param      $result
     */
    public function afterExecute(View $subject, $result)
    {
        echo "AFTER";
        return $result;
    }

    /**
     * @param View $subject
     */
    public function beforeExecute(View $subject)
    {
        echo "BEFORE<BR>";
        return $subject;
    }
}