<?php

namespace App\Entity;

use App\Repository\OptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OptionRepository::class)]
#[ORM\Table(name: '`option`')]
class Option
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $IsActive = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $NameOption = null;

    #[ORM\ManyToMany(targetEntity: StructureMain::class, mappedBy: 'Options')]
    private Collection $structureMains;

    public function __construct()
    {
        $this->structures = new ArrayCollection();
        $this->structureMains = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isIsActive(): ?bool
    {
        return $this->IsActive;
    }

    public function setIsActive(bool $IsActive): self
    {
        $this->IsActive = $IsActive;

        return $this;
    }

    public function getNameOption(): ?string
    {
        return $this->NameOption;
    }

    public function setNameOption(?string $NameOption): self
    {
        $this->NameOption = $NameOption;

        return $this;
    }

    /**
     * @return Collection<int, StructureMain>
     */
    public function getStructureMains(): Collection
    {
        return $this->structureMains;
    }

    public function addStructureMain(StructureMain $structureMain): self
    {
        if (!$this->structureMains->contains($structureMain)) {
            $this->structureMains->add($structureMain);
            $structureMain->addOption($this);
        }

        return $this;
    }

    public function removeStructureMain(StructureMain $structureMain): self
    {
        if ($this->structureMains->removeElement($structureMain)) {
            $structureMain->removeOption($this);
        }

        return $this;
    }
    

}
