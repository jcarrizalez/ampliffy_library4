<?php
declare( strict_types = 1 );
namespace Ampliffy\Library4;

use Ampliffy\Library4\Person\GenrePerson;

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
		?string $country = null
	)
	{
		$this->setName($name);
		$this->setSurname($surname);
		$this->setAge($age);
		$this->setGender($gender);
		$this->setCountry($country);
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
	
	public function setCountry(?string $country): void
	{
		$this->country = $country;
	}

	public function getCountry(): ?string
	{
		return $this->country;
	}
}