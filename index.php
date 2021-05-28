<?php
//Khởi tạo secction
session_start();
// if (!isset($_SESSION['count'])) {
//   $_SESSION['count'] = 0;
// } else {
//   $_SESSION['count']++;
// }


require ("setting/init.php");



//điều hướng trang mặc định là homepage
$controller = isset($_GET["controller"])?$_GET["controller"]:"Homepage";

//nếu controller dẫn tới trang trống --> màn hình 404 error
if($controller != ""){
	$controller = $controller.'Controller'; 
	if(! file_exists("controllers/$controller.php")){
		require("controllers/404.php");
		return;
	}
//nếu dẫn tới trang đúng thì bắt action thả vào index
	require("controllers/$controller.php");
	$c = new $controller;
	$action = isset($_GET["action"])?$_GET["action"]:"index";

	$c->$action();
}

?>