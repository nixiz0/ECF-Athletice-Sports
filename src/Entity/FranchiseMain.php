<?php

namespace App\Entity;

use App\Repository\FranchiseMainRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FranchiseMainRepository::class)]
class FranchiseMain
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(mappedBy: 'FranchiseMains', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?bool $IsActive = null;

    #[ORM\OneToMany(mappedBy: 'franchiseMain', targetEntity: StructureMain::class)]
    private Collection $StructureMains;

    public function __construct()
    {
        $this->StructureMains = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
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

    /**
     * @return Collection<int, StructureMain>
     */
    public function getStructureMains(): Collection
    {
        return $this->StructureMains;
    }

    public function addStructureMain(StructureMain $structureMain): self
    {
        if (!$this->StructureMains->contains($structureMain)) {
            $this->StructureMains->add($structureMain);
            $structureMain->setFranchiseMain($this);
        }

        return $this;
    }

    public function removeStructureMain(StructureMain $structureMain): self
    {
        if ($this->StructureMains->removeElement($structureMain)) {
            // set the owning side to null (unless already changed)
            if ($structureMain->getFranchiseMain() === $this) {
                $structureMain->setFranchiseMain(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->user;
    }
}
