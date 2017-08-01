<?php

namespace Produtos\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
       $teste='boa venda';
        return new ViewModel(['teste'=>$teste]);
    }
}
