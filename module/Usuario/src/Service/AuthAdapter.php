<?php
namespace Usuario\Service;

use Zend\Authentication\Adapter\AdapterInterface;
use Zend\Authentication\Result;
use Zend\Crypt\Password\Bcrypt;
use Usuario\Entity\tbusuario as UserLogin;

/**
 * Adapter used for authenticating user. It takes login and password on input
 * and checks the database if there is a user with such login (email) and password.
 * If such user exists, the service returns his identity (email). The identity
 * is saved to session and can be retrieved later with Identity view helper provided
 * by ZF3.
 */
class AuthAdapter implements AdapterInterface
{
    /**
     * UserLogin email.
     * @var string 
     */
    private $email;
    private $cnpj;
    /**
     * senha
     * @var string 
     */
    private $nomefantasia;
   
    private $nmempresa;
    
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager 
     */
    private $entityManager;
        
    /**
     * Constructor.
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    /**
     * Sets UserLogin email.     
     */
    public function setEmail($email) 
    {
        $this->email = $email;        
    }
    
    /**
     * Sets senha.     
     */
    public function setcnpj($cnpj) 
    {
        $this->cnpj = (string)$cnpj;       
    }
    public function setnomefantasia($nomefantasia) 
    {
        $this->nomefantasia = $nomefantasia;        
    }
    
    /**
     * Sets senha.     
     */
    public function setnmempresa($nmempresa) 
    {
        $this->nmempresa = (string)$nmempresa;       
    }
    
    /**
     * Performs an authentication attempt.
     */
    public function authenticate()
    {                
        // Check the database if there is a user with such email.
        $user = $this->entityManager->getRepository(UserLogin::class)
                ->findOneByEmail($this->email);
        
        // If there is no such user, return 'Identity Not Found' status.
        if ($user == null) {
            return new Result(
                Result::FAILURE_IDENTITY_NOT_FOUND, 
                null, 
                ['Credenciais Inválidas.']);        
        }   
        
        // If the user with such email exists, we need to check if it is active or retired.
        // Do not allow retired users to log in.
        if ($user->getStatus()==UserLogin::STATUS_RETIRED) {
            return new Result(
                Result::FAILURE, 
                null, 
                ['O usuario esta aposentado.']);        
        }
        
        // Now we need to calculate hash based on user-entered senha and compare
        // it with the senha hash stored in database.
        $bcrypt = new Bcrypt();
        $senhaash = $user->getnmempresa();
        
        if ($bcrypt->verify($this->nmempresa, $senhaash)) {
            // Great! The password hash matches. Return user identity (email) to be
            // saved in session for later use.
            return new Result(
                    Result::SUCCESS, 
                    $this->email, 
                    ['Autenticação Realizada com Sucesso.']);        
        }             
        
        // If password check didn't pass return 'Invalid Credential' failure status.
        return new Result(
                Result::FAILURE_CREDENTIAL_INVALID, 
                null, 
                ['Invalid credentials.']);        
    }
}
