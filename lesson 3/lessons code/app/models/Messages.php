<?php

class Messages {

	public function get_password($name) {
	    $res = \F3::get('DB')->exec('SELECT * FROM users WHERE name=:tmp_1',
 				 					array(':tmp_1' => $name)
 				 					);

        
        return $res[0]["password"];
	}

}