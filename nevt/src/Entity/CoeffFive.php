<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoeffFiveRepository")
 */
class CoeffFive
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $company_name;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $coeff_value;

    public function getId()
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->company_name;
    }

    public function setCompanyName(string $company_name): self
    {
        $this->company_name = $company_name;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCoeffValue(): ?float
    {
        return $this->coeff_value;
    }

    public function setCoeffValue(float $coeff_value): self
    {
        $this->coeff_value = $coeff_value;

        return $this;
    }
}
