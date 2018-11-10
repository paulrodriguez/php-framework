<?php

final class App {
	public function run() {
		include APP_ROOT.DS.'routes'.DS.'web.php';
		\Routes\Router::run();
	}
}
