<?php 
namespace Member\Controller;
use Think\Controller;
class OrderController extends CommonController{

	private $uid = null;

	/**
	 * 初始化
	 */
	public function _initialize(){
		if(isset($_SESSION['userid'])){
			$this->uid = $_SESSION["userid"];
		}
	}

	public function index(){

		$this->display();
	}

	public function addOrder(){
		$data = array(
			'cartIdStr' => I('cartIdStr'),
			'address_id' => I('address_id'),
			'remark' => I('remark'),
			'total_price' => I('total_price'),
			'user_id' => $this->uid
		);
		$db = D('Order')->addOrder($data);
		if ($db) {
			var_dump('订单提交成功');
			die();
			$this->success('提交订单成功!',U("Member/Order/Payment"));
		}

	}
}

 ?>