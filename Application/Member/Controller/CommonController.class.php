<?php 
namespace Member\Controller;
use Think\Controller;

class CommonController extends Controller{

	public function _initialize(){

		if (!isset($_SESSION["userid"])) {

			$this->redirect('Home/Login/index');
		}

	}


}

 ?>