<?php

namespace MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="MainBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="idmsisdn", type="string", length=255)
     */
    private $idmsisdn;

    /**
     * @var string
     *
     * @ORM\Column(name="idprovedor", type="string", length=255)
     */
    private $idprovedor;

    /**
     * @var string
     *
     * @ORM\Column(name="msisdn", type="string", length=255)
     */
    private $msisdn;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="fechanacimiento", type="string", length=255)
     */
    private $fechanacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaingreso", type="string", length=255)
     */
    private $fechaingreso;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="statuspay", type="string", length=255)
     */
    private $statuspay;

    /**
     * @var string
     *
     * @ORM\Column(name="smscid", type="string", length=255)
     */
    private $smscid;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcode ", type="string", length=255)
     */
    private $shortcode ;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return User
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return User
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApillido()
    {
        return $this->apellido;
    }

    /**
     * Set idmsisdn
     *
     * @param string $idmsisdn
     *
     * @return User
     */
    public function setIdmsisdn($idmsisdn)
    {
        $this->idmsisdn = $idmsisdn;

        return $this;
    }

    /**
     * Get idmsisdn
     *
     * @return string
     */
    public function getIdmsisdn ()
    {
        return $this->idmsisdn;
    }

    /**
     * Set idprovedor
     *
     * @param string $idprovedor
     *
     * @return User
     */
    public function setIdprovedor($idprovedor)
    {
        $this->idprovedor = $idprovedor;

        return $this;
    }

    /**
     * Get idprovedor
     *
     * @return string
     */
    public function getIdprovedor ()
    {
        return $this->idprovedor;
    }

    /**
     * Set msisdn
     *
     * @param string $msisdn
     *
     * @return User
     */
    public function setMsisdn($msisdn)
    {
        $this->msisdn = $msisdn;

        return $this;
    }

    /**
     * Get msisdn
     *
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return User
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set fechanacimiento
     *
     * @param string $fechanacimiento
     *
     * @return User
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return string
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set fechaingreso
     *
     * @param string $fechaingreso
     *
     * @return User
     */
    public function setFechaingreso($fechaingreso)
    {
        $this->fechaingreso = $fechaingreso;

        return $this;
    }

    /**
     * Get fechaingreso
     *
     * @return string
     */
    public function getFechaingreso()
    {
        return $this->fechaingreso;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set statuspay
     *
     * @param string $statuspay
     *
     * @return User
     */
    public function setStatuspay($statuspay)
    {
        $this->statuspay = $statuspay;

        return $this;
    }

    /**
     * Get statuspay
     *
     * @return string
     */
    public function getStatuspay()
    {
        return $this->statuspay;
    }

    /**
     * Set smscid
     *
     * @param string $smscid
     *
     * @return User
     */
    public function setSmscid($smscid)
    {
        $this->smscid = $smscid;

        return $this;
    }

    /**
     * Get smscid
     *
     * @return string
     */
    public function getSmscid()
    {
        return $this->smscid;
    }

    /**
     * Set shortcode 
     *
     * @param string $shortcode 
     *
     * @return User
     */
    public function setShortcode ($shortcode)
    {
        $this->shortcode = $shortcode;

        return $this;
    }

    /**
     * Get shortcode 
     *
     * @return string
     */
    public function getShortcode  ()
    {
        return $this->shortcode ;
    }
}

