<?php
namespace Config;
class Db {
	/**
	 * get mysql configuration
	 */
	public static function getMySql() {
		$default = array(
			'host'=>'localhost',
			'username'=>'root',
			'password'=>'',
			'port'=>'',
			'database_name'=>''
		);

		//file_get_contents('')
		return $default;
	}
}