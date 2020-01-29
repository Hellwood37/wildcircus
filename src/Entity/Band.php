<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BandRepository")
 */
class Band
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
    private $Name;

    /**
     * @ORM\Column(type="text")
     */
    private $Picture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Instrument;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $Wikilink;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->Picture;
    }

    public function setPicture(string $Picture): self
    {
        $this->Picture = $Picture;

        return $this;
    }

    public function getInstrument(): ?string
    {
        return $this->Instrument;
    }

    public function setInstrument(string $Instrument): self
    {
        $this->Instrument = $Instrument;

        return $this;
    }

    public function getWikilink(): ?string
    {
        return $this->Wikilink;
    }

    public function setWikilink(?string $Wikilink): self
    {
        $this->Wikilink = $Wikilink;

        return $this;
    }


}
