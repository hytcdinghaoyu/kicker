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
		$order = D('OrdersView')->getOrder();
		// var_dump($order);
		// die();
		$this->display();
	}

	/**
	 * 根据订单号查看单个订单信息
	 */
	public function viewOrder(){
		$order_id = I('order_id');
		$order_goods = D('OrdersView')->getOrderGoods($order_id);
		$total_price = $order_goods[0]['total_price'];
		$billno = $order_goods[0]['billno'];
		$this->assign('billno',$billno);
		$this->assign('total_price',$total_price);
		$this->assign('order_goods',$order_goods);
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
		$order_id = D('Orders')->addOrder($data);
		if ($order_id) {
			//添加订单成功，清空购物车
			if (A("Member/Cart")->clearCart()) {
				$this->redirect('Member/Buy/index/?order_id='.$order_id);
				//$this->success('提交订单成功!',U('Member/Order/Buy?order_id="'.$order_id.'"'));
			};
		}

	}
}

 ?>