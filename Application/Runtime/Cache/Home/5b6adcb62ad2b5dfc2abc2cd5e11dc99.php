<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/reset.css">
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/main.css">
<script type="text/javascript" src="/kicker/Public/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
var checkUrl = '<?php echo U("Home/Login/checklogin");?>';
var verifyURL = '<?php echo U("Home/Login/verify");?>';
function change_code(obj){
	$("#code").attr("src",verifyURL+'?rnd='+Math.random());
	return false;
}
$(function(){
	$(".login_btn").click(function(){
		var username = $("#username").val();
		var password = $("#password").val();
		if (username == "" || password == "") {
			alert("用户名或者密码不能为空！");
		}
		else{
			$(this).attr("type","submit");
		}
		// else{
		// 	$.ajax({

		// 		type : "POST",
		// 		url : checkUrl,
		// 		data : {username:username,password:password},
		// 		success:function(res){
		// 			alert("用户名或者密码不正确！");
		// 		}

		// 	})
		// }
	});
})
</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar login_logo">
		<div class="comWidth">
			<div class="logo fl">

			</div>
			<h3 class="welcome_title">欢迎登陆</h3>
		</div>
	</div>
</div>

<div class="loginBox">
	<div class="login_cont">
		<ul class="login">
			<form action="<?php echo U("Home/login/checklogin");?>" method="POST" >
				<li class="l_tit">用户名</li>
				<li class="mb_10"><input type="text" name="username"  id="username" class="login_input user_icon"></li>
				<li class="l_tit">密码</li>
				<li class="mb_10"><input type="text" name="password" id="password" class="login_input"></li>
				<li class="l_tit">验证码</li>
				<li class="mb_10">
					<input type="text" name="code" class="login_input">
				</li>
				<li>
					<img src="<?php echo U('Home/Login/verify','','');?>" id="code"/> <a href="javascript:void(change_code(this));">看不清</a>
				</li>
				<li><input type="button" value="" class="login_btn"></li>
			</form>
		</ul>
		<div class="login_partners">
			<p class="l_tit">使用合作方账号登陆网站</p>
			<ul class="login_list clearfix">
				<li><a href="#">QQ</a></li>
				<li><span>|</span></li>
				<li><a href="#">网易</a></li>
				<li><span>|</span></li>
				<li><a href="#">新浪微博</a></li>
				<li><span>|</span></li>
				<li><a href="#">腾讯微薄</a></li>
				<li><span>|</span></li>
				<li><a href="#">新浪微博</a></li>
				<li><span>|</span></li>
				<li><a href="#">腾讯微薄</a></li>
			</ul>
		</div>
	</div>
	<a class="reg_link" href="<?php echo U('Home/Reg/index');?>"></a>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">慕课简介</a><i>|</i><a href="#">慕课公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>