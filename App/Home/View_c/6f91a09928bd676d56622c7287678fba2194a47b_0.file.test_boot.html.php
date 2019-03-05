<?php
/* Smarty version 3.1.30, created on 2018-04-11 10:44:27
  from "C:\www\dytt\App\Home\View\Index\test_boot.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acd768b12fb25_97228540',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f91a09928bd676d56622c7287678fba2194a47b' => 
    array (
      0 => 'C:\\www\\dytt\\App\\Home\\View\\Index\\test_boot.html',
      1 => 1523414663,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acd768b12fb25_97228540 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <!-- 设置网页的编码  -->
    <meta charset="utf-8">
    <!-- IE浏览器的的兼容性处理，
          IE=edge  使用最新版本的IE浏览器进行渲染
     -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- 
        viewport  视口 用来设置移动端浏览器的显示效果
        width=device-width  表示采用设备的宽度
        initial-scale=1     缩放方式
     -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <!-- 引入是Bootstrap的核心的CSS文件 -->
    <link href="Public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Respond.js 不起作用 -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <h1>你好，世界！</h1>
    <a href="#">全栈一班最牛X</a>
    <input type="button" class="btn btn-success" value="我是一个寂寞的按钮">
    <input type="button" class="btn btn-danger" value="我是一个寂寞的按钮">
    <input type="button" class="btn btn-warning" value="我是一个寂寞的按钮">

    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <?php echo '<script'; ?>
 src="Public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html><?php }
}
