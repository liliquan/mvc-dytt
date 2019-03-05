<?php
/* Smarty version 3.1.30, created on 2018-04-11 09:34:34
  from "C:\www\dytt\App\Admin\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acd662a7436b6_51224721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '447dd6bcbb02dae36a8a8a57dccdecb880fbf87f' => 
    array (
      0 => 'C:\\www\\dytt\\App\\Admin\\View\\Index\\index.html',
      1 => 1523143707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acd662a7436b6_51224721 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>用户登录</title>
	<link rel="stylesheet" href="../../Public/css/base.css" />
	<link rel="stylesheet" href="../../Public/css/login.css" />
	<?php echo '<script'; ?>
 src="../../Public/js/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="superlogin"></div>
<div class="loginBox">
	<div class="logo"><img src="../../Public/images/logo_login.png"/></div>
	<div class="loginMain">
		<div class="tabwrap">
		<form action="index.php?p=admin&c=user&a=doLogin" method="post" id="loginform">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr><td class="title">用户名：</td><td><input type="text" name="uname" class="form-control txt" /></td></tr>
			<tr><td class="title">密   码：</td><td><input type="password" name="upass" class="form-control txt" /></td></tr>
			<tr><td class="title">验证码：</td><td><input type="text" class="form-control txt txt2" name="validateCode" /><span class="yzm"><img src="index.php?p=home&c=test&a=testCaptcha" onclick="this.src='index.php?p=home&c=test&a=testCaptcha&r='+Math.random()" /></span></td></tr>
			<tr class="errortd"><td>&nbsp;</td><td><i class="ico-error"></i><span class="errorword">用户名或密码错误，请重新输入！</span></td></tr>		
			<tr><td>&nbsp;</td><td><input type="button" class="loginbtn" value="登录" onclick="checkForm()"/><input type="button" class="resetbtn" value="重置" onclick="location.href='loginA.html'"/></td></tr>		
			<tr><td>&nbsp;</td><td class="forgetpsw"><a href="login_forgetb.html">忘记密码？</a></td></tr>	
		</table>
		</form>
		</div>
	</div>
</div>
<div class="footer">Copyright © 2015-2018 传智专修学院  All Rights Reserved.</div>
</body>
</html>
<?php echo '<script'; ?>
>


	function checkForm(){

		//提交表单
		$("#loginform").submit();

	}


<?php echo '</script'; ?>
>
<?php }
}
