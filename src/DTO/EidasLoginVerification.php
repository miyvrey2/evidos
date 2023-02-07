<?php

namespace Miyvrey2\Evidos\DTO;

// Required due to inheritance.
use JsonSerializable;
use Miyvrey2\Evidos\DTO\Verification;

class EidasLoginVerification extends Verification implements JsonSerializable {
	function __construct() {
		parent::__construct("eIDAS Login");
	}

	function jsonSerialize() {
		return array_filter(array(
			"Type" => $this->Type,
		));
	}
}
