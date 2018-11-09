<?php
namespace Model;

abstract class Base {
	protected $_fields;
	protected $_data;

	
	public function __construct() {

	}

	public function setData($field,$value) {
		if(!in_array($field, $this->_file)) {
			return $this;
		}

		$this->_data[$field] = $value;

		return $this;
	}

	public function getData($field=null) {
		if($field===null) {
			return $this->_data;
		}

		if(array_key_exists($field, $this->_data)) {
			return $this->_data[$field];
		}

		return null;
	}

	public function load($id) {
		$id = filter_var($id,FILTER_VALIDATE_INT);
		if($id===false) {
			return $this;
		}
		`
		return $this;
	}
}
