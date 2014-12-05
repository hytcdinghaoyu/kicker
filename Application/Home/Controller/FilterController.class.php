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

		$db = D("goods");
		$goods = $db->filterGoods($cid,$band,$size,$min_price,$max_price);
		$this->assign("goods",$goods);
		
		/**
		 * 
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