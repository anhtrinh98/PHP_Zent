<?php 
	$mod=(isset($_GET['mod'])?$_GET['mod']:'');
	$act=(isset($_GET['act'])?$_GET['act']:'list');

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller_obj=new CategoryController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					// echo "Thêm mới";
					$controller_obj->detail();
					break;
				case 'add':
					// echo "Thêm mới";
					$controller_obj->add();
					break;
				case 'store':
					// echo "Thêm mới";
					$controller_obj->store();
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;
		case 'author':
			require_once('controllers/AuthorController.php');
			$controller_obj=new AuthorController();
			switch ($act) {
				case 'list':
					$controller_obj->list();
					break;
				case 'detail':
					// echo "Thêm mới";
					$controller_obj->detail();
					break;
				case 'add':
					// echo "Thêm mới";
					$controller_obj->add();
					break;
				case 'store':
					// echo "Thêm mới";
					$controller_obj->store();
					break;
				default:
					echo "Không tồn tại action này";
					break;
			}
			break;
		default:
			echo "Không tồn tại model này";
			break;
	}
 ?>