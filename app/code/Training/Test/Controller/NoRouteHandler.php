<?php
/**
 * Created by PhpStorm.
 * User: andreyzabara
 * Date: 5/4/18
 * Time: 00:20
 */

namespace Training\Test\Controller;


class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request)
    {
        $moduleName     = 'cms';
        $controllerName = 'index';
        $actionName     = 'index';
        $request
            ->setModuleName($moduleName)
            ->setControllerName($controllerName)
            ->setActionName($actionName);

        return true;
    }
}