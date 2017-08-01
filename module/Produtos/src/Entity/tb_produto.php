<?php

namespace Produtos\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a perfil.
 * @ORM\Entity
 * @ORM\Table(name="tb_oferta")
 */
class tb_produto
{
        
    /**
   * @ORM\ManyToOne(targetEntity="tb_sub_categoria", inversedBy="subcategoria")
   * @ORM\JoinColumn(name="tb_sub_categoria_id", referencedColumnName="id")
   */

  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")
   */
  protected $id;

  /** 
   * @ORM\Column(name="tb_sub_categoria_id") 
   */
  protected $tbsubcategoria;
  /** 
   * @ORM\Column(name="id_oferta") 
   */
 protected $ofertaid;

  /** 
   * @ORM\Column(name="id_categoria") 
   */
 protected $idcategoria;
/** 
   * @ORM\Column(name="cod_prouto") 
   */
 protected $codproduto;
/** 
   * @ORM\Column(name="desc_2") 
   */
 protected $desc2;
 /** 
   * @ORM\Column(name="valor") 
   */
   protected $valor;

  /** 
   * @ORM\Column(name="qtd") 
   */
  protected $quantidade;
    /** 
   * @ORM\Column(name="desconto") 
   */
 protected $desconto;
/** 
   * @ORM\Column(name="dta_criado") 
   */
 protected $dtacriado;
/** 
   * @ORM\Column(name="hra_criado") 
   */
 protected $hracriado;
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
  public function gettbsubcategoria() 
  {
    return $this->tbsubcategoria;
  }

  // Sets cod.
  public function settbsubcategoria($tbsubcategoria) 
  {
    $this->tbsubcategoria = $tbsubcategoria;
  }
  public function getofertaid() 
  {
    return $this->ofertaid;
  }
  public function setofertaid($ofertaid) 
  {
    $this->ofertaid = $ofertaid;
  }
  public function setidcategoria($idcategoria) 
  {
    $this->idcategoria = $idcategoria;
  }
  public function getidcategoria() 
  {
    return $this->idcategoria;
  }
public function getcodproduto() 
  {
    return $this->codproduto;
  }

 
  public function setcodproduto($codproduto) 
  {
    $this->codproduto = $codproduto;
  }

    public function desc2() 
  {
    return $this->desc2;
  }

  public function setqtdindicacoes($desc2) 
  {
    $this->desc2 = $desc2;
  }
  public function getvalor() 
  {
    return $this->valor;
  }
  public function setvalor($valor) 
  {
    $this->valor = $valor;
  }
  public function setquantidade($quantidade) 
  {
    $this->quantidade = $quantidade;
  }
  public function getquantidade() 
  {
    return $this->quantidade;
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
}



