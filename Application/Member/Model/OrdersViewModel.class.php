<?php 
namespace Member\Model;
use Think\Model\ViewModel;
Class OrdersViewModel extends ViewModel{
	/**
	 * 定义订单视图模型
	 */
	public $viewFields = array(
		'Order_goods' => array('goods_num','goods_attr','total_money'),
		'Orders' => array('order_id'=>'oid','billno','add_time','total_price','status','pay_method','address_id','_on'=>'Order_goods.order_id = Orders.order_id'),
		'Goods' => array('main_title','goods_img','price','_on'=>'Order_goods.goods_id = Goods.gid')
	);
	/**
	 * 根据user_id获取对应的订单信息
	 */
	public function getOrder($uid){
		return $this->select();
	}

	/**
	 * 根据order_id获取订单商品信息
	 */
	public function getOrderGoods($order_id){
		return $this->where(array('oid'=>$order_id))->select();
	}

	public function getOrderAddress($address_id){
		return M('user_address')->field('province,city,country,street,tel,postcode,consignee')->where(array('address_id'=>$address_id))->find();
	}
}

 ?>