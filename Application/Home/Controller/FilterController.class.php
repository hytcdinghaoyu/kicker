<?php 
namespace Home\Controller;
use Think\Controller;
Class FilterController extends Controller{

	public function index(){
		//分类id
		$cid = I('cid');
		$this->assign("cur_cid",$cid);

		$band = I('band');
		$this->assign("cur_band",$band);

		$size = I('size');
		$this->assign("cur_size",$size);

		$min_price = I('min_price');
		$max_price = I('max_price');
		$this->assign("cur_range",$min_price."-".$max_price);

		$order = I('order');
		$this->assign("order",$order);
		$sort =  I('sort');
		$sort = empty($sort)?'desc':$sort;
		$this->assign("sort",$sort);

		$db = D("goods");
		$goods = $db->filterGoods($cid,$band,$size,$min_price,$max_price,$order,$sort);
		$goods_count = count($goods);
		$this->assign("goods_count",$goods_count);
		$this->assign("goods",$goods);
		
		/**
		 * 根据分类id获取分类的尺寸和品牌
		 */
		$db = M("category");
	    $res = $db->field('attr,band')->where(array('cid'=>$cid))->find();
	    $size = explode(',' , $res["attr"]);
	    $this->assign("size",$size);
	    $band = explode(',' , $res["band"]);
	    $this->assign("band",$band);
	    $this->display();
	}


	public function filter(){

		
	}
}

 ?>