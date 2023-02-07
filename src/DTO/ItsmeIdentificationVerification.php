<?php

namespace Miyvrey2\Evidos\DTO;

// Required due to inheritance.
use JsonSerializable;
use Miyvrey2\Evidos\DTO\Verification;

class ItsmeIdentificationVerification extends Verification implements JsonSerializable {
	/** @var string */
	public $PhoneNumber;

	/**
	 * @param string $phoneNumber
	 */
	function __construct($phoneNumber) {
		parent::__construct("itsme Identification");
		$this->PhoneNumber = $phoneNumber;
	}

	function jsonSerialize() {
		return array_filter(array(
			"Type"        => $this->Type,
			"PhoneNumber" => $this->PhoneNumber,
		));
	}
}
