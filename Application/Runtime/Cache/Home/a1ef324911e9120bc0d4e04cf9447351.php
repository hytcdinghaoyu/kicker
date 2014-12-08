<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>筛选页</title>
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/reset.css">
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/main.css">
<script type="text/javascript" src="/kicker/Public/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/kicker/Public/js/index.js"></script>
<script type="text/javascript">
	$(function(){

		cid = $(".cur_cid").html();
		size = $(".cur_size").html();
		band = $(".cur_band").html();
		order = $(".order").html();
		sort = $(".sort").html();
		if (sort == "asc") {
			$(".price_btn span").html("∧");
		}else{
			$(".price_btn span").html("∨");
		}
		var price_range =  $(".cur_range").html();
		var price_range_arr = $(".cur_range").html().split('-');
		min_price = price_range_arr[0];
		max_price = price_range_arr[1];

		$(".screening a").hover(function(){
			$(this).addClass("choose");
		},function(){
			$(this).removeClass("choose");
		});
		
		$(".nav_cont h3[cid="+cid+"]").addClass("active");
		$(".size li[size="+size+"] a").addClass("active");
		$(".band li[band="+band+"] a").addClass("active");
		$(".range li[range="+price_range+"] a").addClass("active");
		$(".screening_list div[order="+order+"] a").addClass("active");


	});

var band = "";
var size = "";
var min_price = "";
var max_price = "";
var filter_url = '<?php echo U("Home/Filter/index");?>';
var cid = "";
var order="";
var sort="";

function buildFilterUrl(){

	var url = "?cid="+cid;
	
	if (band != "") {
		url += "&band="+band;
	}
	if (size != "") {
		url +="&size="+size;
	}
	if (min_price != "" && max_price != "") {
		url +="&min_price="+min_price;
		url +="&max_price="+max_price;
	}
	if (order != "" && sort != "") {
		url += "&order=" + order;
		url += "&sort=" + sort;
	};
	return filter_url+url;
}

function filterData(type,value){
	if (type=="band") {
		band = value;
	};
	if (type=="size") {
		size = value;
	};
	url = buildFilterUrl();
	window.location = url;
}
function filterPrice(minprice,maxprice){
	min_price = minprice;
	max_price = maxprice;
	url = buildFilterUrl();
	window.location = url;
}
function setSort(orderby,sortby){
	order = orderby;
	if (sortby == "desc" && orderby == "price") {
		sort = "asc";
	};
	if (sortby == "asc" && orderby == "price") {
		sort = "desc";
	};
	if (orderby == "buy") {
		sort = sortby;
	};
	url = buildFilterUrl();
	window.location = url;
}
</script>
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
				<h3><a href="<?php echo U("Home/index/index");?>">全部商品分类</a><i class="shopClass_icon"></i></h3>
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
<div class="hr_15"></div>
<div class="comWrap clearfix products">
	<div class="leftArea">
		<div class="leftNav vertical">
			<h3 class="nav_title">分类目录</h3>
			<div class="cur_cid" style="display:none;"><?php echo ($cur_cid); ?></div>
			<div class="nav_cont">
				<h3 cid="1"><a href="<?php echo U("Home/filter/index");?>?cid=1">球衣</a></h3>
				<ul class="navCont_list clearfix">
					<li><a href="javascript:;">俱乐部</a></li>
					<li><a href="javascript:;">国家队</a></li>
				</ul>
			</div>
			<div class="nav_cont">
				<h3 cid="3"><a href="<?php echo U("Home/filter/index");?>?cid=3">球鞋</a></h3>
				<ul class="navCont_list clearfix">
					<li><a href="javascript:;">NIKE</a></li>
					<li><a href="javascript:;">ADIDAS</a></li>
					<li><a href="javascript:;">茵宝</a></li>
					<li><a href="javascript:;">美津浓</a></li>
				</ul>
			</div>
			<div class="nav_cont">
				<h3 cid="4"><a href="<?php echo U("Home/filter/index");?>?cid=4">足球</a></h3>
				<ul class="navCont_list clearfix">
					<li><a href="javascript:;">ADIDAS</a></li>
					<li><a href="javascript:;">火车头</a></li>
					<li><a href="javascript:;">茵宝</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="rightArea">
		<div class="screening_box">
			<dl class="screening clearfix">
				<dt>尺寸</dt>
				<dd class="screening_list size">
					<div class="cur_size" style="display:none;"><?php echo ($cur_size); ?></div>
					<ul class="clearfix">
						<li size=""><a href="javascript:;" onclick="filterData('size','')">不限</a></li>
						<?php if(is_array($size)): foreach($size as $key=>$val): ?><li size="<?php echo ($val); ?>"><a href="javascript:;" onclick="filterData('size','<?php echo ($val); ?>')"><?php echo ($val); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</dd>
			</dl>
			<dl class="screening clearfix">
				<dt>品牌</dt>
				<dd class="screening_list band">
					<div class="cur_band" style="display:none;"><?php echo ($cur_band); ?></div>
					<ul class="clearfix">
						<li band=""><a href="javascript:;" onclick="filterData('band','')">不限</a></li>
						<?php if(is_array($band)): foreach($band as $key=>$val): ?><li band="<?php echo ($val); ?>"><a href="javascript:;" onclick="filterData('band','<?php echo ($val); ?>')"><?php echo ($val); ?></a></li><?php endforeach; endif; ?>
					</ul>
				</dd>
			</dl>
			<dl class="screening clearfix">
				<dt>价格</dt>
				<dd class="screening_list range">
					<div class="cur_range" style="display:none;"><?php echo ($cur_range); ?></div>
					<ul class="clearfix">
						<li range="-"><a href="javascript:;" onclick="filterPrice('','')">不限</a></li>
						<li range="0-100"><a href="javascript:;" onclick="filterPrice('0','100')">0-100</a></li>
						<li range="100-200"><a href="javascript:;" onclick="filterPrice('100','200')">100-200</a></li>
						<li range="200-300"><a href="javascript:;" onclick="filterPrice('200','300')">200-300</a></li>
						<li range="300-500"><a href="javascript:;" onclick="filterPrice('300','500')">300-500</a></li>
						<li range="500-800"><a href="javascript:;" onclick="filterPrice('500','800')">500-800</a></li>
						<li range="800-1000"><a href="javascript:;" onclick="filterPrice('800','1000')">800-1000</a></li>
						<li range="1000-10000"><a href="javascript:;" onclick="filterPrice('1000','10000')">1000以上</a></li>
					</ul>
				</dd>
			</dl>
			<dl class="screening clearfix">
				<dt>排序</dt>
				<dd class="screening_list">
					<div style="display:none;" class="order"><?php echo ($order); ?></div>
					<div style="display:none;" class="sort"><?php echo ($sort); ?></div>
					<div order="buy">
						<a href="javascript:;" onclick="setSort('buy','desc')">销量<span>∨</span></a>
					</div>
					<div order="price">					
						<a href="javascript:;" onclick="setSort('price','<?php echo ($sort); ?>')" class="price_btn">
							价格
							<span>∨</span>
						</a>
					</div>
				</dd>
			</dl>
		</div>
		<div class="hr_15"></div>
		<div class="addInfo">
			<div class="fl screen_text">
				<span class="shop_number">
					为您找到：<em><?php echo ($goods_count); ?></em>件商品
				</span>
			</div>
		</div>
		<div class="products_list screening_list_more clearfix">
			<?php if(empty($goods)): ?><div class="sorry">抱歉，没有找到符合条件的商品！</div><?php endif; ?>
			<?php if(is_array($goods)): foreach($goods as $key=>$val): ?><div class="item">
					<div class="item_cont">
						<div class="img_item">
							<a href="<?php echo U("Home/Detail/index");?>?gid=<?php echo ($val["gid"]); ?>"><img src="/kicker/Public/<?php echo ($val["goods_img"]); ?>" alt=""></a>
						</div>
						<p><a href="#"><?php echo ($val["main_title"]); ?></a></p>
						<p>已售：<?php echo ($val["buy"]); ?>件</p>
						<p class="money">￥<?php echo ($val["price"]); ?></p>
						<p><a href="#" class="addCar">加入购物车</a></p>
					</div>
				</div><?php endforeach; endif; ?>
		</div>
		<div class="hr_25"></div>
		<div class="page">
			<a href="#">上一页</a><a href="#">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a><span class="hl">...</span><a href="#">200</a><a href="#">下一页</a><span class="morePage">共200页，到第</span><input type="text" class="pageNum"><span class="ye">页</span><input type="button" value="确定" class="page_btn">
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