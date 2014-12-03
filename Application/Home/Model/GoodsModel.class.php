<?php 
namespace Home\Model;
use Think\Model;
Class GoodsModel extends Model{
	/**
	 *获得相关商品
	 */
	public function getRelatedGoods($cid){
		$fields = array(
			'gid',
			'main_title',
			'goods_img',
			'price',
			'buy'
		);
		return $this->field($fields)->where(array('cid'=>$cid))->limit(5)->select();
	}
	/**
	 *获得热卖商品
	 */
	public function getHotGoods(){
		$fields = array(
			'gid',
			'main_title',
			'goods_img',
			'price',
			'buy'
		);
		return $this->field($fields)->order('buy desc')->limit(5)->select();
	}
}

 ?>