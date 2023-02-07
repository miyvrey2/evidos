<?php

namespace Miyvrey2\Evidos\DTO;

// Required due to inheritance.
use JsonSerializable;
use Miyvrey2\Evidos\DTO\Verification;

class ScribbleVerification extends Verification implements JsonSerializable {
	/** @var bool */
	public $RequireHandsignature;

	/** @var bool */
	public $ScribbleNameFixed;

	/** @var string */
	public $ScribbleName;

	/**
	 * @param bool   $requireHandsignature
	 * @param bool   $scribbleNameFixed
	 * @param string $scribbleName
	 */
	function __construct(
		$requireHandsignature = false,
		$scribbleNameFixed    = false,
		$scribbleName         = null
	) {
		parent::__construct("Scribble");
		$this->RequireHandsignature = $requireHandsignature;
		$this->ScribbleNameFixed    = $scribbleNameFixed;
		$this->ScribbleName         = $scribbleName;
	}

	function jsonSerialize() {
		return array_filter(array(
			"Type"                 => $this->Type,
			"RequireHandsignature" => $this->RequireHandsignature,
			"ScribbleNameFixed"    => $this->ScribbleNameFixed,
			"ScribbleName"         => $this->ScribbleName,
		));
	}
}
