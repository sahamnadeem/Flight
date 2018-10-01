<?php

/**
 * 
 */
class Template
{
	
	var $assignedvals = array();
	var $inc;

	function __construct($_path=''){
		if (!empty($_path)) {
			if (file_exists($_path)) {
				$this->inc = file_get_contents($_path);
			}else{
				echo "string";
			}
		}
	}

	function assign($_searchstring, $_replacestring){
		if (!empty($_searchstring)) {
			$this->assignedvals[$_searchstring] = $_replacestring;
		}
	}

	function render(){
		if (count($this->assignedvals)>0) {
			foreach ($this->assignedvals as $key => $value) 
			{
				$this->inc = str_replace('{'.$key.'}', $value, $this->inc);
			}
		}
		echo $this->inc;
	}
}