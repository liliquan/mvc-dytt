<?php
/* Smarty version 3.1.30, created on 2018-04-06 23:41:11
  from "C:\www\czxyframe\App\Home\View\User\user_list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac79517b314b0_01037192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb91df2967a0383aa3beb33b91011560a084cd08' => 
    array (
      0 => 'C:\\www\\czxyframe\\App\\Home\\View\\User\\user_list.html',
      1 => 1523029268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac79517b314b0_01037192 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户列表</title>
	<style>
		table {
			font-size: 16px;
			color: #666;
			width: 1200px;
			margin: 0px auto;
			text-align: center;
			border-collapse: collapse;
		}

		th,td {
			border: 1px solid #999;
		}

		tr:nth-child(even) {
			background-color: #FFFFCC;
		}
	</style>
</head>
<body>
	<a href="addbook.html">添加用户</a> 
	<hr>
	<table>
		<caption><h2>用户列表</h2></caption>
		<tr>
			<th>编号</th>
			<th>用户名</th>
			<th>用户类型</th>
			<th>用户状态</th>
			<th>添加时间</th>
		</tr>

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataArr']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_type'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_state'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['v']->value['add_time'];?>
</td>
		</tr>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		
	</table>
</body>
</html><?php }
}
