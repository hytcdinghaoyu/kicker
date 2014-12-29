<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>订单列表</title>
	<link type="text/css" rel="stylesheet" href="/kicker/Public/style/reset.css">
	<link type="text/css" rel="stylesheet" href="/kicker/Public/style/main.css">
	<link rel="stylesheet" type="text/css" href="/kicker/Public/style/base2.css">
	<link rel="stylesheet" type="text/css" href="/kicker/Public/style/account.css">
	<script type="text/javascript" src="/kicker/Public/js/jquery-1.10.2.js"></script>
</head>
<body>
<script type="text/javascript">
	var addCartUrL = '<?php echo U("Member/Cart/Add");?>';
	var delCartUrl = '<?php echo U("Member/Cart/del");?>';
	var clearCartUrl = '<?php echo U("Member/Cart/clearCart");?>';
	var updateUrl = '<?php echo U("Member/Cart/updateGoodsNum");?>';
	var IncUrl = '<?php echo U("Member/Cart/IncCartNum");?>';
	var DecUrl = '<?php echo U("Member/Cart/DecCartNum");?>';
	var getTotalUrl = '<?php echo U("Member/Cart/getTotalPrice");?>';
	var addOrderUrl = '<?php echo U("Member/Order/addOrder");?>';
</script>
<div class="headerBar">
	<div class="topBar">
		<div class="comWrap">
			<div class="leftArea">
				<a href="#" class="collection">收藏踢球者！</a>
			</div>
			<div class="rightNav">
				<?php if($userIsLogin): ?><div>欢迎您：<?php echo ($userName); ?></div>
					<div><a href=":U('Member/index/index')">[个人中心]</a></div>
					<div><a href="<?php echo U('Member/Login/logout');?>">[注销]</a></div>
					<?php else: ?>	
						<!--登录注册-->
						<div><a class='title' href="<?php echo U('Member/Reg/index');?>">[注册]</a></div>
						<div><a class='title' href="<?php echo U('Member/Login/index');?>">[登录]</a></div><?php endif; ?>	
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
				<span class="shopNum fr total_num">
					<?php if($total_num): echo ($total_num); ?>
						<?php else: ?>0<?php endif; ?>
				</span>
				<div class="cart_inner">
					<ul>
						<?php if($carts): if(is_array($carts)): foreach($carts as $key=>$val): ?><li gid=<?php echo ($val["gid"]); ?>>
									<a href="" class="pic">
										<img src="/kicker/Public/<?php echo ($val["goods_img"]); ?>">
									</a>
									<p class="tit"><?php echo ($val["main_title"]); ?></p>
									<div class="prop">
										单价:
										<em>￥<?php echo ($val["price"]); ?></em>
										数量：
										<em class="gnum"><?php echo ($val["goods_num"]); ?></em>
									</div>
									<a href="javascript:;" class="del" gid=<?php echo ($val["gid"]); ?> onclick="delCart(<?php echo ($val["gid"]); ?>)"></a>
								</li><?php endforeach; endif; ?>
							<?php else: ?>
								<div class="no_carts">
									购物车中还没有商品，去逛逛吧^_^
								</div><?php endif; ?>			
					</ul>
					<div class="cart_funs">
						<div class="total">
							共有
							<span class="total_num">
								<?php if($total_num): echo ($total_num); ?>
									<?php else: ?>0<?php endif; ?>								
							</span>
							件商品
							小计:￥
							<span class="total_price">
								<?php if($total_price): echo ($total_price); ?>
									<?php else: ?>0<?php endif; ?>
							</span>
						</div>
						<div class="btns clear">
							<a href="javascript:;" class="cart_btns clear_btn" onclick="clearCart()">清空购物车</a>
							<a href="<?php echo U('Member/Cart/index');?>" class="cart_btns count_btn">立即结算</a>
						</div>
					</div>
				</div>
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
<div id="container" class="clearfix wrap container">
	<!--Main-->
	<div id="personal_info" class="content"> 
		<!-- Crumb --> 
		<div class="crumb">
			<ul>
				<div class="crumb"><ul><li class="home"><a href="./"></a></li><li class="step_arrow"></li><li><a href="http://www.fengbuy.com/account/order/account/">我的威锋商城</a></li><li class="step_arrow"></li><li class="cur"><a href="http://www.fengbuy.com/account/order/history/">我的订单</a></li></ul><span class="r"></span></div>			</ul>
		</div>
		
		<!--商品咨询-->
		<div class="account-content address_manage">
			<div class="title_bar">
				<h2>我的订单</h2>
			</div>
			<div class="personal_account clearfix">
				<div class="commodity_consult" id="mycomments_shell">
					<div class="order_search">
						查询商品或订单
						<input name="history_keyword" id="history_keyword" type="text" value="" onkeydown="javascript:if(event.keyCode==13) searchAction();">
						<a href="javascript:void(0);" id="serchOrder" class="btn"><span>查  询</span></a>
					</div>
					<!--tab 导航-->
					<div class="tab_nav nav_top">
						<ul>
							<li><a href="javascript:void(0);" id="history" class="" onclick="jQuery('#history_keyword').val(''); keyword = '' ;refreshDisplayHistory();">近一个月订单</a></li>
              				<li><a href="javascript:void(0);" id="historyBefore" onclick="jQuery('#history_keyword').val(''); keyword = '' ;refreshDisplayHistoryBefore();">以往的订单</a></li>
              				<li><a href="javascript:void(0);" id="historyCancel" onclick="jQuery('#history_keyword').val(''); keyword = '' ;refreshDisplayHistoryCancel();" class="current">已取消订单</a></li>
						</ul>
					</div>
			
				<div class="box-collateral order_list"> 
					<table class="data-table my-orders-table">
						<thead>
							<tr>
								<th>订单号</th>
<!--								<th>类型</th>-->
								<th>日期</th>
								<th>商品</th>
								<th>收货人</th>
								<th><span class="nobr">订单金额</span></th>
								<th><span class="nobr">订单状态</span></th>
								<th>支付方式</th>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody id="orderHistory"><tr>	<td class="order_number"><a href="http://www.fengbuy.com/account/order/vieworder/?order_id=132389" target="_blank">141949319946960<br><p>查看</p></a></td>	<td width="75">2014-12-25 15:39:59</td>	<td class="order_p_img"><a href="http://www.fengbuy.com/lafolie-fontainbleau-15-7213.html" target="_blank" title="法国lafolie/老佛爷 Fontainbleau系列 15寸双肩电脑包 苹果电脑包-深灰色"><img src="http://www.fengbuy.com/media/catalog/product/cache/1/thumbnail/50x/9df78eab33525d08d6e5fb8d27136e95/_/d/_dsc1050.jpg" alt="法国lafolie/老佛爷 Fontainbleau系列 15寸双肩电脑包 苹果电脑包-深灰色" title="法国lafolie/老佛爷 Fontainbleau系列 15寸双肩电脑包 苹果电脑包-深灰色"></a></td>	<td><span class="price">欧赔</span></td>	<td>¥488.00</td>	<td>订单取消</td>	<td>在线支付</td>	<td class="last" width="80">	</td></tr><tr>	<td class="order_number"><a href="http://www.fengbuy.com/account/order/vieworder/?order_id=131355" target="_blank">141888820930190<br><p>查看</p></a></td>	<td width="75">2014-12-18 15:36:49</td>	<td class="order_p_img"><a href="http://www.fengbuy.com/cocoon-grid-it-18-23cm-7221.html" target="_blank" title="美国COCOON GRID-IT! 弹性多功能收纳板 数码配件整理收纳 18*23CM-黑色"><img src="http://www.fengbuy.com/media/catalog/product/cache/1/thumbnail/50x/9df78eab33525d08d6e5fb8d27136e95/1/2/1200f_4.jpg" alt="美国COCOON GRID-IT! 弹性多功能收纳板 数码配件整理收纳 18*23CM-黑色" title="美国COCOON GRID-IT! 弹性多功能收纳板 数码配件整理收纳 18*23CM-黑色"></a></td>	<td><span class="price">欧赔</span></td>	<td>¥98.00</td>	<td>订单取消</td>	<td>在线支付</td>	<td class="last" width="80">	</td></tr></tbody>
					</table>
					<!--订单总数-->
					<p class="order_total" id="history_amount" style="display: block;">2个订单</p>	
				</div>
			</div>
			</div>   
			<!--分页-->
			<div class="pager prepaid_mt25">
			<div class="page_list"><a href="javascript:void(0)" title="上一页" class="prev disabled"><span>«</span></a><a href="javascript:void(0)" title="第1页" onclick="return changePage(1,3,this)" class="current"><span>1</span></a><a href="javascript:void(0)" title="下一页" class="next_page disabled"><span>»</span></a><span class="page_jump">到<input type="text" onkeydown="javascript:if(event.keyCode==13){changePage(this.value);}" title="输入页码，回车快速跳转">页</span></div></div>   
		</div>
  </div>
  	
  <!--Sliderbar-->
	<div class="sliderbar">
		<!--我的威锋商城-->
		 

<div class="sliderbar">	<div class="slider header_slider">	<div class="header_box">		<span class="up_kuang"></span>		<span><img width="52" height="52" alt="" src="http://q.qlogo.cn/qqapp/100537426/805D716FC702D5C4A2BB774B4CD873E8/100"></span>	</div>	<div class="name"><h3>Hi~QQ用户梅小跳</h3>	</div>	<div class="person_info">		<p><span>会员等级：</span><b>注册会员</b></p>		<p><span>积分：</span>0</p>		<p><span>优惠券：</span>0</p>		<p><span>现金卡：</span>0</p>		<p><span>We券：</span>0</p>	</div></div>	<div class="slider wf_slider">	<div class="title">		<h2><a href="http://www.fengbuy.com/account/order/account/">我的威锋商城</a></h2>	</div>		<div class="slider category_slider">			<ul><li><dl style="height: 134px;"><dt><a href="javascript:;" class="close"></a><a href="javascript:;">交易管理</a></dt><dd><a href="http://www.fengbuy.com/account/order/history/" class="cur">我的订单</a></dd><dd><a href="http://www.fengbuy.com/account/return/index/" class="">我的退换货</a></dd><dd><a href="http://www.fengbuy.com/account/favorite/index/" class="">我的收藏</a></dd></dl></li><li><dl><dt><a href="javascript:;" class="close"></a><a href="javascript:;">客户服务</a></dt><dd><a id="_FB_myComments" href="http://www.fengbuy.com/account/order/myComments/" class="">商品评价/晒单<span class="reply">新回复<em>(0)</em></span></a></dd><dd><a id="_FB_myConsults" href="http://www.fengbuy.com/account/consult/productConsult/" class="">商品咨询<span class="reply">新回复<em>(0)</em></span></a></dd><dd><a id="_FB_myMessages" href="http://www.fengbuy.com/account/message/index/" class="">我的留言<span class="reply">新回复<em>(0)</em></span></a></dd><dd><a id="_FB_myArrivals" href="http://www.fengbuy.com/account/alerts/index/" class="">到货提醒<span class="reply">新通知<em id="arrivalEm">(0)</em></span></a></dd><dd><a id="_FB_myReduces" href="http://www.fengbuy.com/account/notification/index/" class="">降价通知<span class="reply">新通知<em id="deprreciateEm">(0)</em></span></a></dd></dl></li><li><dl><dt><a href="javascript:;" class="close"></a><a href="javascript:;">账户管理</a></dt><dd><a href="http://www.fengbuy.com/account/accountInfo/accountInfo/" class="">个人账户</a></dd><dd><a href="http://www.fengbuy.com/account/accountInfo/accountAddress/" class="">地址管理</a></dd><dd><a href="http://www.fengbuy.com/account/integral/index/" class="">我的积分</a></dd><dd><a href="http://www.fengbuy.com/account/giftCard/index/" class="">我的优惠券</a></dd><dd><a href="http://www.fengbuy.com/account/cashCard/index/" class="">我的现金卡</a></dd><dd><a href="http://www.fengbuy.com/account/mylevel/index/" class="">我的会员等级</a></dd><dd><a href="http://www.fengbuy.com/account/prize/index/" class="">我的奖品</a></dd><dd><a href="http://www.fengbuy.com/account/try/index/" class=""><em class="tips new">New</em>我的试用</a></dd></dl></li>			</ul>		</div></div><script type="text/javascript">jQuery(function($){var rtype=/(open|close)/i,getData=function(dt){var parentDl=dt.data('parent_dl')||dt.parent(),minHeight=dt.data('min_height')||dt.height(),maxHeight=dt.data('max_height')||parentDl.height();if(!dt.data('parent_dl')){dt.data('parent_dl',parentDl);dt.data('min_height',minHeight);dt.data('max_height',maxHeight);}return{parentDl:parentDl,minHeight:minHeight,maxHeight:maxHeight};},maxLength=13,rchs=/[^\u0000-\u00ff]/g,shell=$('.category_slider');shell.click(function(e){var isOpen,data,tar=e.target,dt=$(tar).parent();if(rtype.test(tar.className)&&dt[0].nodeName.toUpperCase()==='DT'){isOpen=RegExp.$1.toLowerCase()==='close';(data=getData(dt)).parentDl.animate({height:isOpen?data.minHeight:data.maxHeight});tar.className=isOpen?'open':'close';e.preventDefault();}});});</script></div>	</div>
</div>
<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">kicker简介</a><i>|</i><a href="#">kicker公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 kicker权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>