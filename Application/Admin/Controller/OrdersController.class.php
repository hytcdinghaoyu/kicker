<?php 
namespace Admin\Controller;
use Think\Controller;
class OrdersController extends AdminCommonController{
	function orderslist() {
		$order_list = D("Member/OrdersView")->getAllOrders();
		$this->assign('order_list',$order_list);
		$this->display ();
	}
}

 ?>