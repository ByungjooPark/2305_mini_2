<?php
namespace application\controller;

class ShopController extends Controller {
	public function mainGet() {
		if(isset($_SESSION[_STR_LOGIN_ID])) {
			$this->addDynamicProperty("loginFlg", true);
		}
		return "main"._EXTENSION_PHP;
	}
}