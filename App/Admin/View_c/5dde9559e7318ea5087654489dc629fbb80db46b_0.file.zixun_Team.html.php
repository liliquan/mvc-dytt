<?php
/* Smarty version 3.1.30, created on 2018-04-11 15:12:56
  from "D:\class\two_class\dytt\App\Admin\View\Filmtype\zixun_Team.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acdb5783d3b35_46387998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dde9559e7318ea5087654489dc629fbb80db46b' => 
    array (
      0 => 'D:\\class\\two_class\\dytt\\App\\Admin\\View\\Filmtype\\zixun_Team.html',
      1 => 1523430771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acdb5783d3b35_46387998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>咨询管理－团队</title>
	<link rel="stylesheet" href="Public/css/base.css">
	<link rel="stylesheet" href="Public/css/page.css">
	<!--[if lte IE 8]>
	<link href="css/ie8.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/modernizr.js"><?php echo '</script'; ?>
>
	<!--[if IE]>
	<?php echo '<script'; ?>
 src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
</head>

<body style="background: #f6f5fa;">

	<!--content S-->
	<div class="super-content">
		<div class="superCtab">
			<div class="ctab-title clearfix"><h3>咨询管理</h3><a href="javascript:;" class="sp-column"><i class="ico-export"></i>导出列表</a></div>
			
			<div class="ctab-Main">
				
				<div class="ctab-Mian-cont">
					<div class="Mian-cont-btn Mian-cont-btn2 clearfix">
						
						<div class="searchBar">
							<input type="text" id="" value="" class="form-control srhTxt" placeholder="输入子站关键字搜索">
							<input type="button" class="srhBtn" value="">
						</div>
					</div>
					
					<div class="Mian-cont-wrap">
						<div class="defaultTab-T">
							<table border="0" cellspacing="0" cellpadding="0" class="defaultTable">
								<tbody><tr><th class="t_2_1">ID</th><th class="t_2_1">类型名称</th><th class="t_2_1">路径</th><th>操作</th></tr>
							</tbody></table>
						</div>
						<table border="0" cellspacing="0" cellpadding="0" class="defaultTable defaultTable2">
							<tbody>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
							<tr class="wd">
								<td class="t_2_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
								<td class="t_2_1"><a href="zixun_dtl.html" class="team-a"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></td>
								<td class="t_2_1"><?php echo $_smarty_tpl->tpl_vars['v']->value['path'];?>
</td>
								<td class="alcenter"><a href="#" class="export-a">导出数据</a></td>
							</tr>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						</tbody></table>
						<!--pages S-->
						
						<!--pages E-->
					</div>
				</div>
			</div>
		</div>
		<!--main-->
		
	</div>
	<!--content E-->




</body></html><?php }
}
