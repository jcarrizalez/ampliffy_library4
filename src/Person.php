<?php
declare( strict_types = 1 );
namespace Ampliffy\Library4;

use Ampliffy\Library4\Person\GenrePerson;
use Graftak\CountryCodeHelper;

class Person
{
	public ?string $name;
	public ?string $surname;
	public ?int $age;
	public ?GenrePerson $gender;
	public ?string $country;

	public function __construct(
		?string $name = null, 
		?string $surname = null, 
		?int $age = null, 
		?GenrePerson $gender = null, 
		?string $codeCountry = null
	)
	{
		$this->setName($name);
		$this->setSurname($surname);
		$this->setAge($age);
		$this->setGender($gender);
		$this->setCountry($codeCountry);
	}

	public function setName(?string $name): void
	{
		$this->name = $name;
	}

	public function getName(): ?string
	{
		return $this->name;
	}

	public function setSurname(?string $surname): void
	{
		$this->surname = $surname;
	}

	public function getSurname(): ?string
	{
		return $this->name;
	}

	public function setAge(?int $age): void
	{
		if(null !== $age && $age < 18 ){

			throw new Exception('Persona debe ser mayor a 18 años');
		}
		$this->age = $age;
	}

	public function getAge(): ?int
	{
		return $this->age;
	}

	public function setGender(?GenrePerson $gender): void
	{
		$this->gender = $gender;
	}

	public function getGender(): ?GenrePerson
	{
		return $this->gender;
	}
	
	public function setCountry(?string $codeCountry): void
	{
		$this->country = CountryCodeHelper::map($codeCountry, 'ALPHA_3');
	}

	public function getCountry(): ?string
	{
		return $this->country;
	}
}