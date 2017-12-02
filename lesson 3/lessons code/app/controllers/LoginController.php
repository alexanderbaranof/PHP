<?php

class LoginController extends Controller{

	function beforeroute(){

        } //переопределяем функцию тут. иначе будет циклическая переадресация
 

	function render() {

        /*
		$messages = new Messages($this->db);
		$msg = $messages->all();*/  //это запросы данных из Messages.php
		
        $template = new Template;
        echo $template->render('login.html'); //выводим login.html
		

	}


	function check() {

		//в эту функцию отправляется человек, когда он ввел логин и пароль

		$name = $this->f3->get("POST.name"); //забираем данные из post запроса
		$password = $this->f3->get("POST.password");

		$messages = new Messages($this->db);
		$msg = $messages->get_password($name);  //получаем хэш пароля введенного имени из бд

		$hash = $msg;

		if ( password_verify ($password, $hash ) ) {  //сравниваем хэш пароля и введенный пароль
			$this->f3->set("SESSION.name",$name);  //если успех, то запоминаем имя
			$this->f3->reroute('/'); //перенаправляем на главную страницу
		} else {
			$this->f3->reroute('/login'); //если нет, то еще раз надо бы ввести логин и пароль
		}
	}
}