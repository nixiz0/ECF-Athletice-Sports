<?php

namespace App\Entity;

use App\Repository\StructureMainRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StructureMainRepository::class)]
class StructureMain
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $IsActive = null;

    #[ORM\OneToOne(mappedBy: 'StructureMains', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsActive(): ?bool
    {
        return $this->IsActive;
    }

    public function setIsActive(?bool $IsActive): self
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        // unset the owning side of the relation if necessary
        if ($user === null && $this->user !== null) {
            $this->user->setStructureMains(null);
        }

        // set the owning side of the relation if necessary
        if ($user !== null && $user->getStructureMains() !== $this) {
            $user->setStructureMains($this);
        }

        $this->user = $user;

        return $this;
    }
}
