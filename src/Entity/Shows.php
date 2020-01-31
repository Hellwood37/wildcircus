<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShowsRepository")
 */
class Shows
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
    private $Location;

    /**
     * @ORM\Column(type="text")
     */
    private $Get_tickets;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $concert_hall;

    /**
     * @ORM\Column(type="date")
     */
    private $Date;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getLocation(): ?string
    {
        return $this->Location;
    }

    public function setLocation(string $Location): self
    {
        $this->Location = $Location;

        return $this;
    }

    public function getGetTickets(): ?string
    {
        return $this->Get_tickets;
    }

    public function setGetTickets(string $Get_tickets): self
    {
        $this->Get_tickets = $Get_tickets;

        return $this;
    }

    public function getConcertHall(): ?string
    {
        return $this->concert_hall;
    }

    public function setConcertHall(string $concert_hall): self
    {
        $this->concert_hall = $concert_hall;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }
}
