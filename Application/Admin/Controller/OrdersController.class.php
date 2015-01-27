<?php 
namespace Admin\Controller;
use Think\Controller;
class OrdersController extends AdminCommonController{
	/**
	 * 显示订单列表
	 */
	function orderslist() {
		$order_list = D("Member/OrdersView")->getAllOrders();
		$this->assign('order_list',$order_list);
		$this->display();
	}

	/**
	 * 订单详情
	 */
	function ordersDetail(){
		$oid = I('id');
		$order = D('Member/OrdersView')->getOrderGoods($oid);
		$this->assign('order',$order);
		$this->assign('order_billno',$order[0]['billno']);
		$this->assign('order_add_time',$order[0]['add_time']);
		$shippingInfo = D('Member/OrdersView')->getOrderAddress($order[0]['address_id']);
		$this->assign('shippingInfo',$shippingInfo);	
		$this->display();
	}

	/**
	 * 删除订单(假删)
	 */
	function delOrder(){
		$oid = I('id');
		if (M('Orders')->where(array('order_id'=>$oid))->save(array('is_delete'=>1))) {
			$this->success('删除订单成功!');
		}
	}
	
}

 ?>