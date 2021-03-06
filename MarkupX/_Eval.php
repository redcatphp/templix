<?php
namespace RedCat\Templix\MarkupX;
class _Eval extends \RedCat\Templix\CallerMarkup{
	function load(){
		if(!$this->after)
			$this->replaceWithEvalued();
	}
	function loaded(){
		if($this->after)
			$this->replaceWithEvalued();
	}
	private function replaceWithEvalued(){
		$vars = isset($this->templix)?$this->templix->getVars():null;
		$this->replaceWith($this->evalue($this,$vars));
	}
	function applyLoad($apply = null){
		if($apply || (($apply = $this->closest('apply'))) && ($apply = $apply->selfClosed?$this->closest():$apply->_extended)){
			$this->replaceWith($this->evalue(str_replace('$this','$apply',$this)));
		}
	}
}