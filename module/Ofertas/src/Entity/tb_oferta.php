<?php

namespace Ofertas\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * This class represents a perfil.
 * @ORM\Entity
 * @ORM\Table(name="tb_oferta")
 */
class tb_oferta
{
      /**
   * @ORM\ManyToOne(targetEntity="Produtos\Entity\tb_produto", inversedBy="produtos")
   * @ORM\JoinColumn(name="tb_produto_id, referencedColumnName="id")
   */
    
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
   * @ORM\Column(name="tb_produto_id") 
   */
 protected $tbprodutoid;

  /** 
   * @ORM\Column(name="titulo_oferta") 
   */
 protected $titulooferta;
/** 
   * @ORM\Column(name="desconto_oferta") 
   */
 protected $descontooferta;
/** 
   * @ORM\Column(name="qtd_indicacoes") 
   */
 protected $qtdindicacoes;
 /** 
   * @ORM\Column(name="tag") 
   */
   protected $tag;

  /** 
   * @ORM\Column(name="tp_oferta") 
   */
  protected $tpoferta;
    /** 
   * @ORM\Column(name="dta_oferta") 
   */
 protected $dtaoferta;
/** 
   * @ORM\Column(name="hra_oferta") 
   */
 protected $hraoferta;
  /** 
   * @ORM\Column(name="qt_acessos") 
   */
 protected $qtdacessos;

  /** 
   * @ORM\Column(name="desativado") 
   */
 protected $desatiado;
/** 
   * @ORM\Column(name="id_usuario") 
   */
 protected $idusuario;
/** 
   * @ORM\Column(name="desc_categoria") 
   */
 protected $desccategoria;
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
  public function gettbprodutoid() 
  {
    return $this->tbprodutoid;
  }
  public function settbprodutoid($tbprodutoid) 
  {
    $this->tbprodutoid = $tbprodutoid;
  }
  public function settitulooferta($titulooferta) 
  {
    $this->tbtitulooferta = $titulooferta;
  }
  public function gettitulooferta() 
  {
    return $this->titulooferta;
  }
public function getdescoferta() 
  {
    return $this->descoferta;
  }

  // Sets ID of this tag.
  public function setdescoferta($descoferta) 
  {
    $this->descontooferta = $descoferta;
  }

  // Returns codname.
  public function getqtdindicacoes() 
  {
    return $this->qtdindicacoes;
  }

  // Sets cod.
  public function setqtdindicacoes($qtdindicacoes) 
  {
    $this->qtdindicacoes = $qtdindicacoes;
  }
  public function gettag() 
  {
    return $this->tag;
  }
  public function settag($tag) 
  {
    $this->tag = $tag;
  }
  public function settpoferta($tpoferta) 
  {
    $this->tpoferta = $tpoferta;
  }
  public function gettitulooferta() 
  {
    return $this->titulooferta;
  }

 
  public function setdtaoferta($dtaoferta) 
  {
    $this->dtaoferta = $dtaoferta;
  }
  
  public function gethraoferta() 
  {
    return $this->hraoferta;
  }


  public function sethraoferta($hraoferta) 
  {
    $this->hraoferta= $hraoferta;
      }
public function setqtdacessos($qtdacessos) 
  {
    $this->qtdacessos = $qtdacessos;
  }
  
  public function getqtdacessos() 
  {
    return $this->hqtdacessos;
  }
  public function getdesativado() 
  {
    return $this->desativado;
  }


  public function setdesativado($desativado) 
  {
    $this->desativado= $desativado;
  }
public function setidusuario ($idusuario ) 
  {
    $this->idusuario = $idusuario ;
  }
  
  public function getidusuario () 
  {
    return $this->idusuario;
  }
  public function getdesccategoria() 
  {
    return $this->desccategoria;
  }


  public function setdesccategoria($desccategoria) 
  {
    $this->desccategoria= $desccategoria;
  }

}



