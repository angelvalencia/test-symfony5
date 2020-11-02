<?php

namespace App\Entity;

use App\Repository\LogUserRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LogUserRepository::class)
 */
class LogUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaCrea;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechaModifica;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ipUsuario;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $userAgent;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $codPais;

    /**
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    private $claveEvent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFechaCrea(): ?\DateTimeInterface
    {
        return $this->fechaCrea;
    }

    public function setFechaCrea(?\DateTimeInterface $fechaCrea): self
    {
        $this->fechaCrea = $fechaCrea;

        return $this;
    }

    public function getFechaModifica(): ?\DateTimeInterface
    {
        return $this->fechaModifica;
    }

    public function setFechaModifica(?\DateTimeInterface $fechaModifica): self
    {
        $this->fechaModifica = $fechaModifica;

        return $this;
    }

    public function getIpUsuario(): ?string
    {
        return $this->ipUsuario;
    }

    public function setIpUsuario(?string $ipUsuario): self
    {
        $this->ipUsuario = $ipUsuario;

        return $this;
    }

    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    public function setUserAgent(?string $userAgent): self
    {
        $this->userAgent = $userAgent;

        return $this;
    }

    public function getCodPais(): ?string
    {
        return $this->codPais;
    }

    public function setCodPais(?string $codPais): self
    {
        $this->codPais = $codPais;

        return $this;
    }

    public function getClaveEvent(): ?string
    {
        return $this->claveEvent;
    }

    public function setClaveEvent(?string $claveEvent): self
    {
        $this->claveEvent = $claveEvent;

        return $this;
    }
}
