<?php
namespace Home\Controller;
use Think\Controller;
Class IndexController extends Controller{
    public function index(){
    	$close_goods = M("goods")->where(array("cid"=>1))->limit(8)->select();
    	$this->assign("close_goods",$close_goods);

    	$shoes_goods = M("goods")->where(array("cid"=>3))->limit(8)->select();
    	$this->assign("shoes_goods",$shoes_goods);

    	$this->display();
    }

}