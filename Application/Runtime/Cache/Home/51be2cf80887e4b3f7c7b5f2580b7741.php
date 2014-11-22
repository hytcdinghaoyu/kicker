<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/reset.css">
<link type="text/css" rel="stylesheet" href="/kicker/Public/style/main.css">
<script type="text/javascript" src="/kicker/Public/JS/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/kicker/Public/JS/jquery.validate.min.js"></script>
<script type="text/javascript" src="/kicker/Public/JS/reg.js"></script>
<script type="text/javascript">
		var checkUrl = '<?php echo U("Home/Reg/checkUser",'','');?>'
</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar red_logo">
		<div class="comWidth">
			<div class="logo fl">
			</div>
			<h3 class="welcome_title">欢迎注册</h3>
		</div>
	</div>
</div>

<div class="regBox">
	<div class="login_cont">
		<form id="regform" action="<?php echo U('Home/Reg/AddUser');?>" method="POST">
			<ul class="login">
				<li><span class="reg_item"><i>*</i>账户名：</span><div class="input_item"><input type="text" id="username" name="username" class="login_input user_icon"><span id="checkuser"></span></div></li>
				<li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password"  id="password" name="password" class="login_input user_icon"></div></li>
				<li><span class="reg_item"><i>*</i>重复密码：</span><div class="input_item"><input type="password" name="confirm_password" class="login_input user_icon"></div></li>
				<li><span class="reg_item"><i>*</i>邮箱：</span><div class="input_item"><input type="text" name="usermail" class="login_input user_icon"></div></li>
				<li><span class="reg_item">&nbsp;</span><input type="submit" value="" class="login_btn"></li>
			</ul>
		</form>		
	</div>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">慕课简介</a><i>|</i><a href="#">慕课公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/kicker/Public/images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>