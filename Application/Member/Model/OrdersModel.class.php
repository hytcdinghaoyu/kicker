<?php 
namespace Member\Model;
use Think\Model;
Class OrdersModel extends Model{

	/**
	 * 查询订单
	 */
	public function getOrder($user_id){
		$order = M('orders')->where(array('user_id'=>$user_id))->select();
		foreach ($order as $order_k => $order_v) {
			$consignee = M('user_address')->where(array('address_id'=>$order_v['address_id']))->getField('consignee');
			$order[$order_k]['consignee'] = $consignee;
			$goods_ids = M('order_goods')->field('goods_ids')->where(array('order_id'=>$order_v['order_id']))->select();
			foreach ($goods_ids as $ids_k => $ids_v) {
				# code...
			}
		}
	}
	
	/**
	 * 添加订单
	 */
	public function addOrder($data){
		$order = array(
			'user_id' => $data['user_id'],
			'address_id' => $data['address_id'],
			'remark' => $data['remark'],
			'status' => 0,
			'add_time' => time(),
			'pay_method' => 'Alipay',
			'billno' => date('ymdhis').substr(microtime(),2,4)
		);
		$cart_id_str = rtrim($data['cartIdStr'],',');
		$order_id = $this->data($order)->add();
		if ($order_id) {
			$carts = M('cart')->where('cart_id in ('.$cart_id_str.')')->select();
			$order_total = 0;
			foreach ($carts as $cart_k => $cart_v) {
				$price = M('goods')->where(array('gid'=>$cart_v['goods_id']))->getField('price');
				$data = array(
					'order_id' => $order_id,
					'goods_id' => $cart_v['goods_id'],
					'goods_num' => $cart_v['goods_num'],
					'total_money' => $cart_v['goods_num']*$price,
					'goods_attr' => $cart_v['goods_attr'],
				);
				$order_total += $cart_v['goods_num']*$price;
				M('order_goods')->data($data)->add();		
			}
			M('orders')->where(array('order_id'=>$order_id))->save(array('total_price'=>$order_total));
			return $order_id;
		}
	}

	/**
	 * 删除订单
	 */
	public function delOrder(){

	}

	
}


 ?>