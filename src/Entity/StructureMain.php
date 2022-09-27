<?php

namespace App\Entity;

use App\Repository\StructureMainRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToMany(targetEntity: Option::class, inversedBy: 'structureMains')]
    private Collection $Options;

    #[ORM\ManyToOne(inversedBy: 'StructureMains')]
    private ?FranchiseMain $franchiseMain = null;

    public function __construct()
    {
        $this->Options = new ArrayCollection();
    }

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
        if ($user === null && $this->user !== null) {
            $this->user->setStructureMains(null);
        }

        if ($user !== null && $user->getStructureMains() !== $this) {
            $user->setStructureMains($this);
        }

        $this->user = $user;

        return $this;
    }

    /**
     * @return Collection<int, Option>
     */
    public function getOptions(): Collection
    {
        return $this->Options;
    }

    public function addOption(Option $option): self
    {
        if (!$this->Options->contains($option)) {
            $this->Options->add($option);
        }

        return $this;
    }

    public function removeOption(Option $option): self
    {
        $this->Options->removeElement($option);

        return $this;
    }

    public function getFranchiseMain(): ?FranchiseMain
    {
        return $this->franchiseMain;
    }

    public function setFranchiseMain(?FranchiseMain $franchiseMain): self
    {
        $this->franchiseMain = $franchiseMain;

        return $this;
    }

}
