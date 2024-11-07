<?php

namespace App\Entity;

use App\Repository\DashboardRepository;
use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateType;

#[ORM\Entity(repositoryClass: DashboardRepository::class)]
class Dashboard
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $fullName = null;

    #[ORM\Column(length: 255)]
    private ?string $Username = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $PhoneNumber = null;

    #[ORM\Column(type: Types::DATE_IMMUTABLE)]
    private ?\DateTimeImmutable $DateOfBirth = null;

    #[ORM\Column(length: 255)]
    private ?string $Address = null;

    #[ORM\Column(length: 255)]
    private ?string $City = null;

    #[ORM\Column(type: Types::INTEGER)]
    private ?int $Zip = null;

    #[ORM\Column(length: 255)]
    private ?string $JobTitle = null;

    #[ORM\Column(length: 255)]
    private ?string $CompanyName = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 20, scale: 0)]
    private ?string $YearsOfExperience = null; // Change float to string
    
    #[ORM\Column(length: 255)]
    private ?string $AboutMe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): static
    {
        $this->fullName = $fullName;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->Username;
    }

    public function setUsername(string $Username): static
    {
        $this->Username = $Username;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->PhoneNumber;
    }

    public function setPhoneNumber(?int $PhoneNumber): self
    {
        $this->PhoneNumber = $PhoneNumber;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeImmutable
    {
        return $this->DateOfBirth;
    }

    public function setDateOfBirth(?\DateTimeInterface $dateOfBirth): self
    {
        // Convert to DateTimeImmutable if it's a DateTime
        $this->DateOfBirth = $dateOfBirth instanceof \DateTime ? \DateTimeImmutable::createFromMutable($dateOfBirth) : $dateOfBirth;
    
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->Address;
    }

    public function setAddress(string $Address): static
    {
        $this->Address = $Address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->City;
    }

    public function setCity(string $City): static
    {
        $this->City = $City;

        return $this;
    }

    public function getZip(): ?int
    {
        return $this->Zip;
    }

    public function setZip(?int $Zip): self
    {
        $this->Zip = $Zip;

        return $this;
    }

    public function getJobTitle(): ?string
    {
        return $this->JobTitle;
    }

    public function setJobTitle(string $JobTitle): static
    {
        $this->JobTitle = $JobTitle;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->CompanyName;
    }

    public function setCompanyName(string $CompanyName): static
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    public function setYearsOfExperience(?string $YearsOfExperience): self
    {
        $this->YearsOfExperience = $YearsOfExperience;
    
        return $this;
    }

    public function getYearsOfExperience(): ?string
    {
        return $this->YearsOfExperience;
    }

    public function getAboutMe(): ?string
    {
        return $this->AboutMe;
    }

    public function setAboutMe(string $AboutMe): static
    {
        $this->AboutMe = $AboutMe;

        return $this;
    }
}
