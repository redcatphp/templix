<?php
namespace RedCat\Templix\CssSelector\Filter;
use RedCat\Templix\CssSelector\Filter\Pseudo;
class PseudoNot extends Pseudo{
	private $_items;
	function __construct($input){
		$this->_items = $input;
	}
	function match($node, $position, $items){
		return in_array($node,$items,true);
	}
}