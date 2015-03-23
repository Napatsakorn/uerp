<?php

namespace Uerp\tpaymentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tpayment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Uerp\tpaymentBundle\Entity\tpaymentRepository")
 */
class tpayment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="decimal",scale=2)
     */
    private $tax;

    /**
     * @ORM\ManyToOne(targetEntity="Uerp\BankBundle\Entity\BankAccount")
     * @ORM\JoinColumn(name="bankid", referencedColumnName="id")
     */
    protected $bank;

    /**
     * @ORM\ManyToOne(targetEntity="Uerp\StatusBundle\Entity\Status")
     * @ORM\JoinColumn(name="statusid", referencedColumnName="id")
     */
    protected $defaultstatus;


    public function __toString()
    {
        return $this->name;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return tpayment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tax
     *
     * @param string $tax
     * @return tpayment
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get tax
     *
     * @return string 
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set defaultstatus
     *
     * @param integer $defaultstatus
     * @return tpayment
     */
    public function setDefaultstatus($defaultstatus)
    {
        $this->defaultstatus = $defaultstatus;

        return $this;
    }

    /**
     * Get defaultstatus
     *
     * @return integer 
     */
    public function getDefaultstatus()
    {
        return $this->defaultstatus;
    }

    /**
     * Set bank
     *
     * @param \Uerp\BankBundle\Entity\BankAccount $bank
     * @return tpayment
     */
    public function setBank(\Uerp\BankBundle\Entity\BankAccount $bank = null)
    {
        $this->bank = $bank;

        return $this;
    }

    /**
     * Get bank
     *
     * @return \Uerp\BankBundle\Entity\BankAccount 
     */
    public function getBank()
    {
        return $this->bank;
    }
}
