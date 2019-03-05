<?php
/* Smarty version 3.1.30, created on 2018-04-07 17:03:17
  from "C:\www\czxyframe\App\Home\View\Test\upload.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ac88955ad73d4_79452591',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3edb690c2deb4f5b573512218708357156934b96' => 
    array (
      0 => 'C:\\www\\czxyframe\\App\\Home\\View\\Test\\upload.html',
      1 => 1523091755,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ac88955ad73d4_79452591 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="index.php?p=home&c=test&a=saveUpladFile" method="post" enctype="multipart/form-data">

		用户名: <input type="text" name="uname" id="uname"><br>
		用户头像 <input type="file" name="head_img" id="head_img"><br>
		<input type="submit" value="保存">

	</form>
</body>
</html><?php }
}
