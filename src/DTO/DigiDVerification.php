<?php

namespace Miyvrey2\Evidos\DTO;

// Required due to inheritance.
use JsonSerializable;
use Miyvrey2\Evidos\DTO\Verification;

class DigiDVerification extends Verification implements JsonSerializable {
	/** @var string */
	public $Bsn;

	/**
	 * @param string $bsn
	 */
	function __construct($bsn = null) {
		parent::__construct("DigiD");
		$this->Bsn = $bsn;
	}

	function jsonSerialize() {
		return array_filter(array(
			"Type" => $this->Type,
			"Bsn"  => $this->Bsn,
		));
	}
}
