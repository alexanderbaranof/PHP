<?php

class Controller {
	
	protected $f3;
    protected $db;

	function beforeroute(){

        if($this->f3->get('SESSION.name') === null ) {
            $this->f3->reroute('/login');
            exit;
        }

	}

	function afterroute(){
		//echo '- After routing';
	}

	function __construct() {
		
		$f3=Base::instance();
		$this->f3=$f3;

		$f3->set('DB', $db=new DB\SQL(
    	'mysql:host=localhost;port=3306;dbname=users',
    	'root',
    	''
    	
		
		));


	 
	}

}
