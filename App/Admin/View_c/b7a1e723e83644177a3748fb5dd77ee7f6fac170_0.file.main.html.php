<?php
/* Smarty version 3.1.30, created on 2018-04-13 09:12:07
  from "C:\www\dytt\App\Admin\View\Public\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad003e7832f64_80008479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7a1e723e83644177a3748fb5dd77ee7f6fac170' => 
    array (
      0 => 'C:\\www\\dytt\\App\\Admin\\View\\Public\\main.html',
      1 => 1523581910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad003e7832f64_80008479 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>uimaker网站后台管理系统</title>
	<link rel="stylesheet" href="../../../../Public/css/base.css">
	<link rel="stylesheet" href="../../../../Public/css/page.css">
	<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<?php echo '<script'; ?>
 type="text/javascript" src="../../../../Public/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="../../../../Public/js/modernizr.js"><?php echo '</script'; ?>
>
	<!--[if IE]>
	<?php echo '<script'; ?>
 src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body>
<div class="superWrap clearfix" style="height: 781px;">
	<!--side S-->
	<div class="super-side-menu">
		<iframe src="App/Admin/View/Public/public_left.html" width="205" height="100%" marginheight="0" marginwidth="0" frameborder="0" scrolling="no"></iframe>
	</div>
	<!--side E-->
	<!--content S-->
	<div class="superContent">
		
		<div class="super-header super-header2">
			<iframe src="App/Admin/View/Public/public_header.html" id="Pubheader" name="Pubheader" width="100%" height="86" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="height: 86px;"></iframe>
		</div>
		<!--header-->
		<div class="superCtab superCtabBot" style="height: 695px;">
			<iframe src="../../../../index.php?p=admin&c=film&a=doList" id="Mainindex" name="Mainindex" width="100%" height="100%" marginheight="0" marginwidth="0" frameborder="0"></iframe>
		</div>
		<!--main-->
		
	</div>
	<!--content E-->
	
</div>

<?php echo '<script'; ?>
>
window.onresize = function(){
	var winH=$(window).height();
	var headH=$('.super-header').height();
	$('.superWrap').height(winH);
	$('.superCtabBot').height(winH-headH);
};
$(window).resize();
<?php echo '</script'; ?>
>

</body></html><?php }
}
