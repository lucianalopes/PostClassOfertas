<?php

namespace Ofertas\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
       $teste='boa tarde';
        return new ViewModel(['teste'=>$teste]);
    }
}
