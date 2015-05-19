<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>kicker后台管理</title>
<link href="/kicker/Public/skin/admin/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="center">
<div id="easycart-login">
<form action="<?php echo U('AdminLogin/doLogin');?>" method="post">
<div class="form-login">
<div class="form-item">
 <input placeholder="管理员账号" type="text"  tabindex="1"  size="60" id="edit-name" name="account" maxlength="60" value="<?php echo ($login["username"]); ?>">
</div>
<div class="form-item">
 <input placeholder="管理员密码" type="password"  tabindex="2" size="60" id="edit-pass" name="password" value="<?php echo ($login["password"]); ?>">
</div>
<div class="form-item">
  <input placeholder="验证码" name="verify" type="text" tabindex="3"  id="input">
 <span class="img"><img src="<?php echo U('AdminLogin/verify');?>" onclick="this.src='<?php echo U('AdminLogin/verify','','',false);?>?rnd='+new Date().getTime();" /></span></div>
<div class="login"><input type="submit" class="form-submit" tabindex="4" value="进入管理中心" id="edit-submit">
</div>
<div style="clear:both"></div>
</div>
</form>
</div>
</div>
</body>
</html>