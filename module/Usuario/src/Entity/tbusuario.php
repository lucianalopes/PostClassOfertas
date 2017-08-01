<?php

namespace Usuario\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * This class represents a tag.
 * @ORM\Entity
 * @ORM\Table(name="tb_usuario")
 */
class tbusuario

{
     /**
   * @ORM\ManyToOne(targetEntity="tbPerfil", inversedBy="perfis")
   * @ORM\JoinColumn(name="tb_perfil_id", referencedColumnName="id")
   */
    
    /**
   * @ORM\ManyToOne(targetEntity="Ofertas\Entity\tb_oferta", inversedBy="oferta")
   * @ORM\JoinColumn(name="tb_oferta_id", referencedColumnName="id")
   */

  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")
   */
  protected $id;

  /** 
   * @ORM\Column(name="cidade") 
   */
  protected $cidade;

  /** 
   * @ORM\Column(name="cnpj") 
   */
  protected $cnpj;
  
    /** 
   * @ORM\Column(name="dta_criado") 
   */
 protected $dtacriado;
 
 /** 
   * @ORM\Column(name="desativado") 
   */
 protected $desativado;
 
  /** 
   * @ORM\Column(name="email") 
   */
 protected $email;
 
 /** 
   * @ORM\Column(name="end_empresa") 
   */
 protected $end_empresa;
 
 /** 
   * @ORM\Column(name="estado") 
   */
  protected $estado;

 
 /** 
   * @ORM\Column(name="hra_criado") 
   */
  protected $hracriado;
 /** 
   * @ORM\Column(name="id_perfil") 
   */
  protected $idperfil;
  
  /** 
   * @ORM\Column(name="nm_empresa") 
   */
  protected $nmempresa;

  /** 
   * @ORM\Column(name="senha") 
   */
  protected $senha;
  
  /** 
   * @ORM\Column(name="site_empresa") 
   */
  protected $siteempresa;
  /** 
   * @ORM\Column(name="tb_oferta_id") 
   */
  protected $tbofertaid;
  /** 
   * @ORM\Column(name="tb_perfil_id") 
   */
  protected $tbperfilid;
  /** 
   * @ORM\Column(name="usuario") 
   */
  protected $usuario;
    /** 
   * @ORM\Column(name="nome_fantasia") 
   */
  protected $nomefantasia;

  // Returns ID of this tag.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this tag.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns cidade.
  public function getcidade() 
  {
    return $this->cidade;
  }
    
  // Sets cnpj.
  public function setcnpj($cnpj) 
  {
    $this->cnpj = $cnpj;
    
  }
  // Returns cnpj.
  public function getcnpj() 
  {
    return $this->cnpj;
  }

  // Sets cidade.
  public function setcidade($cidade) 
  {
    $this->cidade = $cidade;
    
}
 public function getdesativado() 
  {
    return $this->desativado;
  }


  public function setdesativado($desativado) 
  {
    $this->desativado= $desativado;
  }

    public function getdtacriado() 
  {
    return $this->dtacriado;
  }

 
  public function setdtacriado($dtacriado) 
  {
    $this->dtacriado = $dtacriado;
  }
  
  public function gethracriado() 
  {
    return $this->hracriado;
  }


  public function sethracriado($hracriado) 
  {
    $this->hracriado= $hracriado;
  }
  public function getemail() 
  {
    return $this->email;
  }


  public function setemail($email) 
  {
    $this->email= $email;
  }
  public function getendempresa() 
  {
    return $this->end_empresa;
  }


  public function setendempresa($endempresa) 
  {
    $this->end_empresa= $endempresa;
  }
  
   public function getestado() 
  {
    return $this->estado;
  }


  public function setgetestado($estado) 
  {
    $this->estado= $estado;
  }
   public function idperfil() 
  {
    return $this->idperfil;
  }


  public function setidperfil($idperfil) 
  {
    $this->idperfil= $idperfil;
  }
   public function getnmempresa() 
  {
    return $this->nmempresa;
  }


  public function setnmempresa($nmempresa) 
  {
    $this->nmempresa= $nmempresa;
  }
    public function getsenha() 
  {
    return $this->senha;
  }


  public function setsenha($senha) 
  {
    $this->senha= $senha;
  }
    public function getsiteempresa() 
  {
    return $this->siteempresa;
  }
  public function setsiteempresa($siteempresa) 
  {
    $this->siteempresa=$siteempresa;
  }

 public function gettbofertaid() 
  {
    return $this->tbofertaid;
  }


  public function settbofertaid($tbofertaid) 
  {
    $this->tbofertaid= $tbofertaid;
  }
   public function settbpefilid($tbpefilid) 
  {
    $this->tbpefilid= $tbpefilid;
  }
    public function gettbpefilid() 
  {
    return $this->tbperfilid;
  }


  public function setusuario($usuario) 
  {
    $this->usuario= $usuario;
  }
   
    public function getusuario() 
  {
    return $this->usuario;
  }
public function getnome_fantasia() 
  {
    return $this->nomefantasia;
  }

 
  public function setnome_fantasia($nomefantasia) 
  {
    $this->nomefantasiao = $nomefantasia;
  }

}
