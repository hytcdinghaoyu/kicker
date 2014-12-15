<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>购物车</title>
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/reset.css">
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/main.css">
<link rel="stylesheet" type="text/css" href="/kicker/Public/style/cart.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>
<body>
<div class="headerBar">
	<div class="topBar">
		<div class="comWrap">
			<div class="leftArea">
				<a href="#" class="collection">收藏kicker</a>
			</div>
			<div class="rightArea">
				欢迎来到慕课网！<a href="#">[登录]</a><a href="#">[免费注册]</a>
			</div>
		</div>
	</div>
	<div class="logoBar">
		<div class="comWrap">
			<div class="logo fl">
				<a href="#"></a>
			</div>
			<div class="stepBox fr">
				<div class="step"></div>
				<ul class="step_text">
					<li class="s01 active">我的购物车</li>
					<li class="s02">填写核对订单</li>
					<li class="s03">订单提交成功</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="shoppingCart">
	<div class="inner_cart">
		<div class="title">
			<h2>我的购物车清单</h2>
		</div>
		<div class="inner clear">
			<div class="cart_order">
				<ul>
					<li class="chk">
						<input type="checkbox" id="all" title="全选" checked>
						<label for="all">全选</label>
					</li>
					<li class="pic">商品图</li>
					<li class="tit">商品/属性</li>
					<li class="price">单价</li>
					<li class="count">数量</li>
					<li class="amount">小计</li>
				</ul>
			</div>
			<div class="cart_list">
				<ul class="cart_ul">
					<?php if(is_array($carts)): foreach($carts as $key=>$val): ?><li class="cart_item">
						<span class="chk">
							<input type="checkbox">
						</span>
						<div class="pro_info">
							<div class="pro_props clear">
								<a href="" class="pic">
									<img src="/kicker/Public/<?php echo ($val["goods_img"]); ?>">
								</a>
								<h4 class="tit">
									<a href=""><?php echo ($val["main_title"]); ?></a>
								</h4>
								<em class="price">￥<?php echo ($val["price"]); ?></em>
								<span class="count_wrap">
									<a href="javascript:;" class="cut"></a>
									<input type="text" value="<?php echo ($val["goods_num"]); ?>">
									<a href="javascript:;" class="plus"></a>
								</span>
								<em class="price total_price">
									￥
									<span><?php echo ($val["xiaoji"]); ?></span>
								</em>
								<a href="javascript:;" class="move_to_fav">删除</a>
								<a href="javascript:;" class="del_cart">收藏</a>
							</div>
							<div class="pro_infos clear">
								<div class="attr_info">已选尺寸：<?php echo ($val["goods_attr"]); ?></div>
								<div class="stock_info">现货供应</div>
							</div>
						</div>
					</li><?php endforeach; endif; ?>			
				</ul>
			</div>
			<div class="cart_total_num">
			订单总计：￥
			<span><?php echo ($total_price); ?></span>
			</div>
			<div class="cart_buy clear">
				<a href="" class="cal_btn">现在结账</a>
			</div>
		</div>
	</div>
</div>
<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">kicker简介</a><i>|</i><a href="#">kicker公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 kicker权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>