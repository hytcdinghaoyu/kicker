<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商品介绍</title>
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/reset.css">
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/main.css">
<script type="text/javascript" src="/kicker/Public/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/kicker/Public/js/index.js"></script>
<script type="text/javascript">
	$(function(){
		//选择尺寸
		$(".des_item").click(function(){
			var attr = $(this).html();
			$(".des_item").removeClass("des_item_acitve");
			$(this).addClass("des_item_acitve");
			$(".des_select span").html(attr);
		});

		//选择数量
		$(".plus").click(function(){
			var num =  parseInt($(".des_input input").val());
			$(".des_input input").val(num+1);
		});
		$(".reduction").click(function(){
			var num =  parseInt($(".des_input input").val());
			if (num>=2) {
				$(".des_input input").val(num-1);
			};
		});

		//切换图片
		$(".big[mid='0']").show();
		$(".sm_li[mid='0'] img").addClass("active");
		$(".des_smimg li").click(function(){
			var mid = $(this).attr("mid");
			$(".des_smimg img").removeClass("active");
			$(this).find("img").addClass("active");
			$(".big").hide();
			$(".big[mid="+mid+"]").show();
		});
	});
</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body class="grey">
<div class="headerBar">
	<div class="topBar">
		<div class="comWrap">
			<div class="leftArea">
				<a href="#" class="collection">收藏踢球者！</a>
			</div>
			<div class="rightArea">
				欢迎来到踢球者！<a href="<?php echo U('Member/login/index');?>">[登录]</a><a href="<?php echo U('Member/Reg/index');?>">[免费注册]</a>
			</div>
		</div>
	</div>
	<div class="logoBar">
		<div class="comWrap">
			<div class="logo fl">

			</div>
			<div class="search_box fl">
				<input type="text" class="search_text fl">
				<input type="button" value="搜 索" class="search_btn fr">
			</div>
			<div class="shopCar fr">
				<span class="shopText fl">购物车</span>
				<span class="shopNum fl">0</span>
			</div>
		</div>
	</div>
	<div class="navBox">
		<div class="comWrap clearfix">
			<div class="shopClass fl">
				<h3>全部商品分类<i class="shopClass_icon"></i></h3>
				<div class="shopClass_show">
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
					<dl class="shopClass_item">
						<dt><a href="#" class="b">手机</a> <a href="#" class="b">数码</a> <a href="#" class="aLink">合约机</a></dt>
						<dd><a href="#">荣耀3X</a> <a href="#">单反</a> <a href="#">智能设备</a></dd>
					</dl>
				</div>
				<div class="shopClass_list hide">
					<div class="shopClass_cont">
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<dl class="shopList_item">
							<dt>电脑装机</dt>
							<dd>
								<a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a><a href="#">文字字啊</a><a href="#">文字字字啊</a><a href="#">文字啊</a><a href="#">文字</a><a href="#">文字啊</a><a href="#">文字啊</a>
							</dd>
						</dl>
						<div class="shopList_links">
							<a href="#">文字测试内容等等<span></span></a><a href="#">文字容等等<span></span></a>
						</div>
					</div>
				</div>
			</div>
			<ul class="nav fl">
				<li><a href="#" class="active">数码城</a></li>
				<li><a href="#">天黑黑</a></li>
				<li><a href="#">团购</a></li>
				<li><a href="#">发现</a></li>
				<li><a href="#">二手特卖</a></li>
				<li><a href="#">名品会</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="userPosition comWrap">
	<strong><a href="<?php echo U("Home/Index/index");?>">首页</a></strong>
	<span>&nbsp;&gt;&nbsp;</span>
	<a href="#">平板电脑</a>
	<span>&nbsp;&gt;&nbsp;</span>
	<em><?php echo ($title); ?></em>
</div>
<div class="description_info comWrap">
	<div class="description clearfix">
		<div class="leftArea">
			<div class="description_imgs">				
					<?php if(is_array($big_img)): foreach($big_img as $key=>$val): ?><div class="big" mid="<?php echo ($key); ?>" style="display:none;">
							<img src="<?php echo ($val); ?>">
						</div><?php endforeach; endif; ?>								
				<ul class="des_smimg clearfix">
					<?php if(is_array($sm_img)): foreach($sm_img as $key=>$val): ?><li mid="<?php echo ($key); ?>" class="sm_li"><a href="javascript:;"><img src="<?php echo ($val); ?>"></a></li><?php endforeach; endif; ?>					
				</ul>
			</div>
		</div>
		<div class="rightArea">
			<div class="des_content">
				<h3 class="des_content_tit"><?php echo ($sub_title); ?></h3>
				<div class="dl clearfix">
					<div class="dt">原价</div>
					<div class="dd clearfix"><span class="des_money"><em>￥</em><?php echo ($price); ?></span></div>
				</div>
				<div class="dl clearfix">
					<div class="dt">优惠</div>
					<div class="dd clearfix"><span class="hg"><i class="hg_icon">满换购</i><em></em></span></div>
				</div>
				<div class="des_position">
					<div class="dl clearfix">
						<div class="dt colorSelect">选择尺码</div>
						<div class="dd clearfix">
							<?php if(is_array($goods_attr)): foreach($goods_attr as $key=>$val): ?><div class="des_item">
									<?php echo ($val); ?>
								</div><?php endforeach; endif; ?>
						</div>
					</div>
					<div class="dl">
						<div class="dt des_num">数量</div>
						<div class="dd clearfix">
							<div class="des_number">
								<div class="reduction">-</div>
								<div class="des_input">
									<input type="text" value="1">
								</div>
								<div class="plus">+</div>
							</div>
							<span class="xg">库存<em>9</em>件</span>
						</div>
					</div>
				</div>
				<div class="des_select">
					已选择尺寸：<span></span>
				</div>
				<div class="shop_buy">
					<a href="#" class="shopping_btn"></a>
					<span class="line"></span>
					<a href="#" class="buy_btn"></a>
				</div>
				<div class="notes">
					注意：此商品可提供普通发票，不提供增值税发票。
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hr_15"></div>
<div class="des_info comWrap clearfix">
	<div class="leftArea">
		<div class="recommend">
			<h3 class="tit">热卖商品</h3>
			<div class="item">
				<?php if(is_array($hot_goods)): foreach($hot_goods as $key=>$good): ?><div class="item_cont">
						<div class="img_item">
							<a href="<?php echo U("Home/Detail/index");?>?gid=<?php echo ($good["gid"]); ?>"><img src="/kicker/Public/<?php echo ($good["goods_img"]); ?>" alt=""></a>
						</div>
						<p><a href="<?php echo U("Home/Detail/index");?>?gid=<?php echo ($good["gid"]); ?>"><?php echo ($good["main_title"]); ?></a></p>
						<p class="money">￥<?php echo ($good["price"]); ?></p>
						<p>已售：<?php echo ($good["buy"]); ?>件</p>
					</div><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="hr_15"></div>
		<div class="recommend">
			<h3 class="tit">相关商品</h3>
			<div class="item">
				<?php if(is_array($related_goods)): foreach($related_goods as $key=>$good): ?><div class="item_cont">
						<div class="img_item">
							<a href="<?php echo U("Home/Detail/index");?>?gid=<?php echo ($good["gid"]); ?>"><img src="/kicker/Public/<?php echo ($good["goods_img"]); ?>" alt=""></a>
						</div>
						<p><a href="<?php echo U("Home/Detail/index");?>?gid=<?php echo ($good["gid"]); ?>"><?php echo ($good["main_title"]); ?></a></p>
						<p class="money">￥<?php echo ($good["price"]); ?></p>
					</div><?php endforeach; endif; ?>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="des_infoContent">
			<ul class="des_tit">
				<li class="active"><span>产品介绍</span></li>
				<li><span>产品评价(12312)</span></li>
			</ul>
			<div class="info_text">
				<div class="info_tit">
					<h3>强烈推荐</h3><h4>货比三家，还选</h4>
				</div>
				<p><?php echo ($des_txt); ?></p>
				<div class="hr_45"></div>
			</div>
			<div class="ad">
				<?php if(is_array($des_img)): foreach($des_img as $key=>$val): ?><img src="<?php echo ($val); ?>"><?php endforeach; endif; ?>
			</div>		
		</div>
		<div class="hr_15"></div>
		<div class="des_infoContent">
			<h3 class="shopDes_tit">商品评价</h3>
			<div class="score_box clearfix">
				<div class="score">
					<span>4.7</span><em>分</em>
				</div>
				<div class="score_speed">
					<ul class="score_speed_text">
						<li class="speed_01">非常不满意</li>
						<li class="speed_02">不满意</li>
						<li class="speed_03">一般</li>
						<li class="speed_04">满意</li>
						<li>非常满意</li>
					</ul>
					<div class="score_num">
						4.7<i></i>
					</div>
					<p>共18939位慕课网友参与评分</p>
				</div>
			</div>
			<div class="review_tab">
				<ul class="review fl">
					<li><a href="#" class="active">全部</a></li>
					<li><a href="#">满意（3121）</a></li>
					<li><a href="#">一般（321）</a></li>
					<li><a href="#">不满意（1121）</a></li>
				</ul>
				<div class="review_sort fr">
					<a href="#" class="review_time">时间排序</a><a href="#" class="review_reco">推荐排序</a>
				</div>
			</div>
			<div class="review_listBox">
				<div class="review_list clearfix">
					<div class="review_userHead fl">
						<div class="review_user">
							<img src="images/userhead.jpg" alt="">
							<p>61***42</p>
							<p>金色会员</p>
						</div>
					</div>
					<div class="review_cont">
						<div class="review_t clearfix">
							<div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
							<span class="stars_text fl">5分 满意</span>
						</div>
						<p>赖慕课挺不错的信赖慕课挺不错的，信赖慕课</p>
						<p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
					</div>
				</div>
				<div class="review_list clearfix">
					<div class="review_userHead fl">
						<div class="review_user">
							<img src="images/userhead.jpg" alt="">
							<p>61***42</p>
							<p>金色会员</p>
						</div>
					</div>
					<div class="review_cont">
						<div class="review_t clearfix">
							<div class="starsBox fl"><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span><span class="stars"></span></div>
							<span class="stars_text fl">5分 满意</span>
						</div>
						<p>赖慕课挺不错的信赖慕课挺不错的，信赖慕课</p>
						<p><a href="#" class="ding">顶(0)</a><a href="#" class="cai">踩(0)</a></p>
					</div>
				</div>
				<div class="hr_25"></div>
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