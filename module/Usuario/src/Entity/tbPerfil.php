<?php

namespace Usuario\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a perfil.
 * @ORM\Entity
 * @ORM\Table(name="tb_perfil")
 */
class tbPerfil
{
   
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")
   */
  protected $id;

  /** 
   * @ORM\Column(name="cod") 
   */
  protected $cod;
  /** 
   * @ORM\Column(name="desc_cod") 
   */
 protected $desccod;

  /** 
   * @ORM\Column(name="dta_criado") 
   */
 protected $dtacriado;
/** 
   * @ORM\Column(name="hra_criado") 
   */
 protected $hracriado;
/** 
   * @ORM\Column(name="desativado") 
   */
 protected $desativado;
  // Returns ID of this perfil.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this tag.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns codname.
  public function getcod() 
  {
    return $this->cod;
  }

  // Sets cod.
  public function setcod($cod) 
  {
    $this->cod = $cod;
  }
  public function getdesccod() 
  {
    return $this->desccod;
  }

  public function setdesccod($desccod) 
  {
    $this->desccodcod = $desccod;
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
  public function getdesativado() 
  {
    return $this->desativado;
  }


  public function setdesativado($desativado) 
  {
    $this->desativado= $desativado;
  }

}

