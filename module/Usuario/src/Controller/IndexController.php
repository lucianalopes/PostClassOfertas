<?php

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Usuario\Entity\tbusuario as usuario;
use Zend\Authentication\AuthenticationService;
use Usuario\Service\AuthAdapter as auth;


class IndexController extends AbstractActionController
{
/**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;
    
        /**
     * Auth service.
     * @var \Zend\Authentication\AuthenticationService
     */
    private $authService;
    
       
    /**
     * Constructor.
     */
    
     public function __construct($entityManager, $authService)
    {
        $this->entityManager = $entityManager;
        $this->authService = $authService;
       
    }
    

    public function indexAction()
    {
       $teste='boa noite';
        return new ViewModel(['teste'=>$teste]);
    }
    public function loginAction(){ 
       $data = $this->getRequest()->getPost();
       $user=new auth($this->entityManager);
    
    // If you used another name for the authentication service, change it here
        $authautenticacao = new AuthenticationService();
        $adapter = $authautenticacao->getAdapter();
        $adapter->setIdentity($user->setEmail($data['emailcad']));
        $adapter->setCredential($data['password']);
        $authResult = $authautenticacao->authenticate();

        if ($authResult->isValid()) {
              return $this->redirect()->toRoute('login');
        }

    return new ViewModel([
        'error' => 'Autenticaçao nao valida',
    ]);}
}