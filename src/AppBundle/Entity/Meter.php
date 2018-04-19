<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meter
 *
 * @ORM\Table(name="meter")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MeterRepository")
 */
class Meter
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
     * @var int
     *
     * @ORM\Column(name="adco", type="integer")
     */
    private $adco;

    /**
     * @var string
     *
     * @ORM\Column(name="optarif", type="string", length=4, nullable=true)
     */
    private $optarif;

    /**
     * @var int
     *
     * @ORM\Column(name="isousc", type="smallint", nullable=true)
     */
    private $isousc;

    /**
     * @var int
     *
     * @ORM\Column(name="base", type="integer", nullable=true)
     */
    private $base;

    /**
     * @var int
     *
     * @ORM\Column(name="hchc", type="integer", nullable=true)
     */
    private $hchc;

    /**
     * @var int
     *
     * @ORM\Column(name="hchp", type="integer", nullable=true)
     */
    private $hchp;

    /**
     * @var string
     *
     * @ORM\Column(name="ptec", type="string", length=4, nullable=true)
     */
    private $ptec;

    /**
     * @var int
     *
     * @ORM\Column(name="iinst", type="smallint", nullable=true)
     */
    private $iinst;

    /**
     * @var int
     *
     * @ORM\Column(name="adps", type="smallint", nullable=true)
     */
    private $adps;

    /**
     * @var int
     *
     * @ORM\Column(name="imax", type="smallint", nullable=true)
     */
    private $imax;

    /**
     * @var string
     *
     * @ORM\Column(name="hhphc", type="string", length=1, nullable=true)
     */
    private $hhphc;

    /**
     * @var string
     *
     * @ORM\Column(name="motdetat", type="string", length=6, nullable=true)
     */
    private $motdetat;


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
     * Set adco
     *
     * @param integer $adco
     *
     * @return Meter
     */
    public function setAdco($adco)
    {
        $this->adco = $adco;

        return $this;
    }

    /**
     * Get adco
     *
     * @return int
     */
    public function getAdco()
    {
        return $this->adco;
    }

    /**
     * Set optarif
     *
     * @param string $optarif
     *
     * @return Meter
     */
    public function setOptarif($optarif)
    {
        $this->optarif = $optarif;

        return $this;
    }

    /**
     * Get optarif
     *
     * @return string
     */
    public function getOptarif()
    {
        return $this->optarif;
    }

    /**
     * Set isousc
     *
     * @param integer $isousc
     *
     * @return Meter
     */
    public function setIsousc($isousc)
    {
        $this->isousc = $isousc;

        return $this;
    }

    /**
     * Get isousc
     *
     * @return int
     */
    public function getIsousc()
    {
        return $this->isousc;
    }

    /**
     * Set base
     *
     * @param integer $base
     *
     * @return Meter
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base
     *
     * @return int
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set hchc
     *
     * @param integer $hchc
     *
     * @return Meter
     */
    public function setHchc($hchc)
    {
        $this->hchc = $hchc;

        return $this;
    }

    /**
     * Get hchc
     *
     * @return int
     */
    public function getHchc()
    {
        return $this->hchc;
    }

    /**
     * Set hchp
     *
     * @param integer $hchp
     *
     * @return Meter
     */
    public function setHchp($hchp)
    {
        $this->hchp = $hchp;

        return $this;
    }

    /**
     * Get hchp
     *
     * @return int
     */
    public function getHchp()
    {
        return $this->hchp;
    }

    /**
     * Set ptec
     *
     * @param string $ptec
     *
     * @return Meter
     */
    public function setPtec($ptec)
    {
        $this->ptec = $ptec;

        return $this;
    }

    /**
     * Get ptec
     *
     * @return string
     */
    public function getPtec()
    {
        return $this->ptec;
    }

    /**
     * Set iinst
     *
     * @param integer $iinst
     *
     * @return Meter
     */
    public function setIinst($iinst)
    {
        $this->iinst = $iinst;

        return $this;
    }

    /**
     * Get iinst
     *
     * @return int
     */
    public function getIinst()
    {
        return $this->iinst;
    }

    /**
     * Set adps
     *
     * @param integer $adps
     *
     * @return Meter
     */
    public function setAdps($adps)
    {
        $this->adps = $adps;

        return $this;
    }

    /**
     * Get adps
     *
     * @return int
     */
    public function getAdps()
    {
        return $this->adps;
    }

    /**
     * Set imax
     *
     * @param integer $imax
     *
     * @return Meter
     */
    public function setImax($imax)
    {
        $this->imax = $imax;

        return $this;
    }

    /**
     * Get imax
     *
     * @return int
     */
    public function getImax()
    {
        return $this->imax;
    }

    /**
     * Set hhphc
     *
     * @param string $hhphc
     *
     * @return Meter
     */
    public function setHhphc($hhphc)
    {
        $this->hhphc = $hhphc;

        return $this;
    }

    /**
     * Get hhphc
     *
     * @return string
     */
    public function getHhphc()
    {
        return $this->hhphc;
    }

    /**
     * Set motdetat
     *
     * @param string $motdetat
     *
     * @return Meter
     */
    public function setMotdetat($motdetat)
    {
        $this->motdetat = $motdetat;

        return $this;
    }

    /**
     * Get motdetat
     *
     * @return string
     */
    public function getMotdetat()
    {
        return $this->motdetat;
    }
}

