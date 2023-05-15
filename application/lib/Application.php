<?php
namespace application\lib;

use application\util\UrlUtil;

class Application {
	// 생성자
	public function __construct() {
		$arrPath = UrlUtil::getUrlArrPath(); // 접속 URL을 배열로 획득
		$identityName = empty($arrPath[0]) ? "Shop" : ucfirst($arrPath[0]);
		$action = (empty($arrPath[1]) ? "main" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"]));

		// controller명 작성
		$controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

		// 해당 controller 파일 존재 여부 체크
		if(!file_exists($controllerPath)) {
			echo "해당 컨트롤러 파일이 없습니다. : ".$controllerPath;
			exit();
		}

		// 해당 Controller 호출
		$controllerName = UrlUtil::replaceSlashToBackslash(_PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER);

		new $controllerName($identityName, $action);
	}
}
