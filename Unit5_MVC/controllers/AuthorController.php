<?php 
	require_once('models/Author.php');
	class AuthorController{
		var $author_model;

		function __construct(){
			$this->author_model = new Author();
			// echo "<br> Category";
		}

		public function list(){
			$data = array();
			$data = $this->author_model->All();

			require_once('views/author/list.php');
		}
		public function detail(){
			$id=(isset($_GET['id']))?$_GET['id']:0;

			$author = $this->author_model->find($id);
		
			require_once('views/author/detail.php');
		}

		// public function add(){
		// 	require_once('views/category/add.php');
		// }
		// public function store(){
		// 	$data=array();
		// 	$data['title']=$_POST['title'];
		// 	$data['description']=$_POST['description'];

		// 	$status=$this->cate_model->create($data);
		// }
	}
 ?>