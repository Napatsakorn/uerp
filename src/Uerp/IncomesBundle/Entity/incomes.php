<?php

namespace Uerp\IncomesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * incomes
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Uerp\IncomesBundle\Entity\incomesRepository")
 */
class incomes
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
     * @var integer
     *
     * @ORM\Column(name="saleid", type="integer")
     */
    private $saleid;

    /**
     * @ORM\Column(type="string",length=10)
     *
     */
    protected $parc;

    /**
     * @ORM\ManyToOne(targetEntity="Uerp\BankBundle\Entity\BankAccount")
     * @ORM\JoinColumn(name="bankid", referencedColumnName="id")
     */
    protected $bank;

    /**
     * @var string
     *
     * @ORM\Column(name="valueb", type="decimal",scale=2)
     */
    private $valueb;

    /**
     * @var string
     *
     * @ORM\Column(name="valuel", type="decimal",scale=2)
     */
    private $valuel;

    /**
     * @var string
     *
     * @ORM\Column(name="tax", type="decimal",scale=2)
     */
    private $tax;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

       /**
     * @ORM\ManyToOne(targetEntity="Uerp\StatusBundle\Entity\Status")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

       /**
     * @ORM\ManyToOne(targetEntity="Uerp\tpaymentBundle\Entity\tpayment")
     * @ORM\JoinColumn(name="paymentid", referencedColumnName="id")
     */
    protected $tpayment;


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
     * Set saleid
     *
     * @param integer $saleid
     * @return incomes
     */
    public function setSaleid($saleid)
    {
        $this->saleid = $saleid;

        return $this;
    }

    /**
     * Get saleid
     *
     * @return integer
     */
    public function getSaleid()
    {
        return $this->saleid;
    }

    /**
     * Set valueb
     *
     * @param string $valueb
     * @return incomes
     */
    public function setValueb($valueb)
    {
        $this->valueb = $valueb;

        return $this;
    }

    /**
     * Get valueb
     *
     * @return string
     */
    public function getValueb()
    {
        return $this->valueb;
    }

    /**
     * Set valuel
     *
     * @param string $valuel
     * @return incomes
     */
    public function setValuel($valuel)
    {
        $this->valuel = $valuel;

        return $this;
    }

    /**
     * Get valuel
     *
     * @return string
     */
    public function getValuel()
    {
        return $this->valuel;
    }

    /**
     * Set tax
     *
     * @param string $tax
     * @return incomes
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
     * Set date
     *
     * @param \DateTime $date
     * @return incomes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set status
     *
     * @param \Uerp\StatusBundle\Entity\Status $status
     * @return incomes
     */
    public function setStatus(\Uerp\StatusBundle\Entity\Status $status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return \Uerp\StatusBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set tpayment
     *
     * @param \Uerp\tpaymentBundle\Entity\tpayment $tpayment
     * @return incomes
     */
    public function setTpayment(\Uerp\tpaymentBundle\Entity\tpayment $tpayment = null)
    {
        $this->tpayment = $tpayment;

        return $this;
    }

    /**
     * Get tpayment
     *
     * @return \Uerp\tpaymentBundle\Entity\tpayment
     */
    public function getTpayment()
    {
        return $this->tpayment;
    }

    /**
     * Set parc
     *
     * @param string $parc
     * @return incomes
     */
    public function setParc($parc)
    {
        $this->parc = $parc;

        return $this;
    }

    /**
     * Get parc
     *
     * @return string
     */
    public function getParc()
    {
        return $this->parc;
    }

    /**
     * Set bank
     *
     * @param \Uerp\BankBundle\Entity\BankAccount $bank
     * @return incomes
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
