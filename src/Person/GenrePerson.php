<?php
declare( strict_types = 1 );
namespace Ampliffy\Library4\Person;

class GenrePerson
{
	public const FEMALE = 'female';
	public const MALE = 'male';

	protected ?string $value;

	public function __construct(string $value)
	{
		$this->setValue(strtolower($value));
	}

	private function setValue(string $value): void
	{ 
		if(!in_array($value, [self::FEMALE, self::MALE])){

			$value = null;
		}

		$this->value = $value;
	}

	public function getValue(): ?string
	{
		return $this->value;
	}
}