<?php

class Controller {
	
	protected $f3;
    protected $db;

	function beforeroute(){
		//echo 'Before routing - ';
	}

	function afterroute(){
		//echo '- After routing';
	}

	function __construct() {
		
		$f3=Base::instance();
		$this->f3=$f3;

		/* $f3->set('DB', $db=new DB\SQL(
    	'mysql:host=localhost;port=3306;dbname=my_database',
    	'root',
    	''
    	
		
		));
*/

	 
	}

}
