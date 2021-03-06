<?php

namespace RevShopUI\Modals\elements;

use pocketmine\Player;

class Label extends UIElement{

	/**
	 *
	 * @param string $text
	 */
	public function __construct(string $text){
		$this->text = $text;
	}

	/**
	 *
	 * @return array
	 */
	final public function jsonSerialize(): array{
		return [
			"type" => "label",
			"text" => $this->text
		];
	}

	/**
	 * @notice Value for Label always null
	 *
	 * @param null $value
	 * @param Player $player
	 */
	final public function handle($value, Player $player){
	}

}
