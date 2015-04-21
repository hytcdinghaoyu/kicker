<?php 
namespace Admin\Controller;
use Think\Controller;
Class GoodsController extends AdminCommonController{

	/**
	 * 商品列表
	 */
	public function goodslist(){
		$goods_list = M('Goods')->select();
		$this->assign('goods_list',$goods_list);
		$this->display();
	}

	/**
	 * 更改商品状态
	 */
	public function setStatus(){
		if (IS_AJAX === false) {
			exit();
		}
		$id = I('id');
		$type = I('type');
		$status = M('Goods')->where(array('gid'=>$id))->getField($type);
		$status_set = empty($status)?1:0;
		if (M('Goods')->where(array('gid'=>$id))->save(array($type=>$status_set))) {
			$img_url = getStatus($status_set,true);
			$this->ajaxReturn($img_url,'json');
		}

	}


	/**
	 * 添加商品
	 */
	public function add(){
		
		$this->display();
	}

	public function Insert(){

		if (IS_POST === false) {
			exit();
		}
		$data = array(
			'main_title' => I('name'),
			'sub_title' => I('sub_title'),
			'price' => I('price'),
			'costprice' => I('costprice'),
			'weight' => I('weight'),
			'cid' => I('cateid'),
			'band' => I('brand'),
			'attr' => I('attr'),
			'is_new' => I('isnew'),
			'is_hot' => I('ishot'),
			'is_rec' => I('isrec'),
			'is_price' => I('isprice'),
			'is_down' => I('isdown'),
			'des_txt' => I('remark'),
			'goods_img' =>I('goods_img')

		);
		if (M('goods')->add($data)) {
			$this->success('添加产品成功！');
		}
	}

	/**
	 * 图片上传
	 */
	public function upload(){
		//var_dump($_FILES);
		$tempFile = $_FILES['fileToUpload']['tmp_name'][0];
    	$targetFolder = '/kicker/Public/uploads/goodsimages';
    	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
		$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['fileToUpload']['name'][0];
		//var_dump($_FILES['fileToUpload']['name']);
		//验证文件类型
		$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
		$fileParts = pathinfo($_FILES['fileToUpload']['name'][0]);
		//var_dump($fileParts);
		//die();
		if (in_array($fileParts['extension'],$fileTypes)) {
			move_uploaded_file($tempFile,$targetFile);
			$img_url = 'uploads/goodsimages/'.$_FILES['fileToUpload']['name'][0];
			echo json_encode(array('info'=>'图片上传成功！','data'=>array('savename'=>$img_url)));
		} else {
			echo '0';
		}
	}

}

 ?>