<?php

final class App {
	public function run() {
		$router = new \Routes\Router();
		$router->run();
	}
}
