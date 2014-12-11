<?php
namespace Org\Util;
namespace Member\Controller;
use Think\Controller;
class CartController extends Controller{
	private $uid=null;
	/**
	 * 初始化
	 */
	// public function __init(){
	// 	if(isset($_SESSION[C('RBAC_AUTH_KEY')])){
	// 		$this->uid = $_SESSION["userid"];
	// 		//把session里的购物车数据，写入数据库
	// 		//$this->writeCart();
	// 	}
	// 	//$this->setNav();
	// 	$this->assign('userIsLogin',isset($_SESSION[C('RBAC_AUTH_KEY')]));
	// }
	/**
	 * 显示购物车页
	 */	
	public function index(){
		$cart = $this->getCartData();
		var_dump($cart);
		die();
		if(IS_AJAX === false){
			$this->assign('cart',$data[0]);
			$this->assign('total',$data[1]);
			$db = K('user');
			$address = $db->getAddress($this->uid);
			$this->assign('address', $address);
			$this->display();
		}else{
			if(isset($data[0])){
				exit(json_encode(array('status'=>true,'data'=>$data[0])));
			}else{
				exit(json_encode(array('status'=>false)));
			}
		}
		
	}
	/**
	 * 获得购物车的数据
	 */
	public  function getCartData(){
		//$db = D('cart');
		$db = new \Member\Model\CartModel();
		$result = array();
		//用户没有登录
		if(is_null($this->uid)){
			if(!isset($_SESSION['cart']['goods'])) return ;
			$carts = $_SESSION['cart']['goods'];
			foreach ($carts as $v){
				$data = $db->getOneGood(array('gid'=>$v['id']));
				$data['goods_num'] = $v['num'];
				$result[] = $data;
			}
		//用户登录了
		}else{
			$result = $db->getCartAll($this->uid);
		}
		$data = $this->disCart($result);
		return $data;
	}
	
	/**
	 * 处理购物车数据
	 */
	public function disCart($cart){
		$carts = array();
		if(empty($cart)) return false;
		$total_num = 0;
		$total_price = 0;
		foreach ($cart as $k=>$v){
			$carts[$k]['goods_num'] = $v['goods_num'];
			$carts[$k]['price'] = $v['price'];
			$carts[$k]['xiaoji'] = $v['goods_num']*$v['price'];
			$carts[$k]['gid'] = $v['gid'];
			$carts[$k]['goods_img'] = $v['goods_img'];
			$carts[$k]['main_title'] = $v['main_title'];
			$total_num += $carts[$k]['goods_num'];
			$total_price += $carts[$k]['xiaoji'];
		}
		return array('carts'=>$carts,'total_num'=>$total_num,'total_price'=>$total_price);
	}
	
	
	/***
	 * 添加购物车
	 */
	public function add(){
		if(IS_AJAX === false) throw  new Exception('请求错误！');
		$result = array();
		//用户没有登录
		if(is_null($this->uid)){
			$data = array(
				'id'=>intval(I('gid')),
				'name'=>'',
				'num'=>intval(I('gnum')),
				'price'=>0			
			);
			\Org\Util\Cart::add($data);
			$total = count($_SESSION['cart']['goods']);
			$result = array('status'=>true,'total'=>$total);
			$carts = $this->getCartData();
			$this->ajaxReturn($carts,'JSON');
			
		}else{	//用户登录了
			$data = array();
			$data['goods_id'] = $this->_get('gid','intval');
			$data['user_id'] = $this->uid;
			$data['goods_num'] = 1;
			$result = $this->checkAdd($data);
			if($result){
				$db = K('cart');
				$where = array('user_id'=>$data['user_id']);
				$total = $db->countCart($where);
				$result = array('status'=>true,'total'=>$total);
			}
		}
		//exit(json_encode($result));
	}
	/**
	 * 把session的数据，写入到数据库
	 */
	private function writeCart(){
		if(!isset($_SESSION['cart']['goods'])) return ;
		$carts = $_SESSION['cart']['goods'];		
		foreach ($carts as $v){
			$data = array();
			$data['user_id'] = $this->uid;
			$data['goods_id'] = $v['id'];
			$data['goods_num'] = $v['num'];
			$this->checkAdd($data);
		}
		unset($_SESSION['cart']);
	}
	/**
	 * 验证添加 
	 * 存在自增加购物车商品数
	 * 不存呢，添加新数据
	 */
	private function checkAdd($data){
		$where = array('user_id'=>$data['user_id'],'goods_id'=>$data['goods_id']);
		$db = K('cart');
		$cart_id  = $db->checkCart($where);
		if($cart_id){
			return $db->incCart($cart_id,$data['goods_num']);
		}else{
			return $db->addCart($data);
		}
	}
	/**
	 * 更新购物车商品数
	 */
	public function updateGoodsNum(){
		if(IS_AJAX === false) return false;
		$gid = $this->_post('gid','intval');
		$num = $this->_post('num','intval');
		$result = array();
		//用户没有登录
		if(is_null($this->uid)){
			foreach ($_SESSION['cart']['goods'] as $k=>$v){
				if($v['id'] == $gid){
					$_SESSION['cart']['goods'][$k]['num'] = $num;
					$result = array(
						'status'=>true,
						'num'=>$num	
					);
				}
			}
		}else{ //用户登录
			$db = K('cart');
			$where = array(
				'goods_id'=>$gid,
				'user_id'=>$this->uid		
			);
			if($db->updateCartNum($where,$num)){
				$result = array(
						'status'=>true,
						'num'=>$num
				);
			}
		}
		exit(json_encode($result));
	}
	
	/**
	 * 删除购物车
	 */
	public function del(){
		if(IS_AJAX === false) exit;
		$gid = $this->_get('gid','intval');
		/**
		 * 用户没有登录
		 */
		$result = array();
		$result['status'] = false;
		if(is_null($this->uid)){
			foreach ($_SESSION['cart']['goods'] as $k=>$v){
				if($v['id'] == $gid){
					unset($_SESSION['cart']['goods'][$k]);
					$result['status'] = true;
				}
			} 
		}else{	//用户登录了
			$where = array('user_id'=>$this->uid,'goods_id'=>$gid);
			$db = K('cart');
			if($db->delCart($where)){
				$result['status'] = true;
			}
		}
		
		exit(json_encode($result));
	}
	
	
	/**
	 * 设置导航
	 */
	private function setNav(){
		$db = K('category');
		$nav = $db->getCategoryLevel(0);
		$this->assign('nav',$nav);
	}
}
?>