<?php 
namespace Home\Controller;
use Think\Controller;
Class RegController extends Controller{

	public function index(){

		$this->display();
	}

	public function checkUser(){

		if (IS_AJAX===false) throw new Exception("非法请求");
		 
		$username = I('username');

		$user = M("user")->where(array('uname' => $username))->select();

		if ($user) {
			$data = array('status'=>1,'msg'=>"用户名已经存在");		
		}
		else{
			$data = array('status'=>0,'msg'=>'用户名可以使用');
		}
		$this->ajaxReturn($data,'json');
	}

	// public function AddUser(){

	// 	$data = array(
	// 		"uname" => I("username"),
	// 		"password" => I("password"),
	// 		"email" => I("usermail")
	// 	);


	// }
}

 ?>