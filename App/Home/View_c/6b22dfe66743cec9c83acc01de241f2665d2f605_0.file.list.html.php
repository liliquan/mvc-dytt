<?php
/* Smarty version 3.1.30, created on 2018-04-19 20:44:50
  from "D:\class\two_class\dytt\App\Home\View\Film\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad88f4266e9b8_82080281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b22dfe66743cec9c83acc01de241f2665d2f605' => 
    array (
      0 => 'D:\\class\\two_class\\dytt\\App\\Home\\View\\Film\\list.html',
      1 => 1524141856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad88f4266e9b8_82080281 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="Public/css/common.css" rel="stylesheet" type="text/css" />
<?php echo '<script'; ?>
 src="Public/js/jquery-1.9.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/jquery.SuperSlide.2.1.1.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="Public/js/common.js" type="text/javascript"><?php echo '</script'; ?>
>
<title>列表页</title>
</head>

<body class="background_color ">
<div id="header_top">
<div class="page_header">
 <div class="header_style">
  <div class="clearfix">
    <a href="#" class="logo_style"><img src="Public/images/logo.png"  width="150px"/></a>
    <ul class="nav_list">
     <li class="nav_link"><a href="index.php" class="Channel_name"><i class="i icon_home"></i>首页</a></li>
     <li class="nav_link Channel_link">
     <a href="javascript:" class="Channel_name"><i class="i icon_nav"></i>频道<i class="i i_arw2"></i></a>
     <div class="Channel_nav_list">
        <ul class=" clearfix">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
   <li class="Channel_name1"><a href="index.php?p=home&c=film&a=doList&tname=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&tid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><i class="icon_TV"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
     </div>
     </li>
    </ul>
    <div class="search_style">
      <input name="" type="text"  class="search"/><button name="" type="button" class="button_submit" onclick="submit_btn()"><i class="icon_search"></i>搜索</button>
   </div>
  </div>
 </div>
</div>
<!--图片-->
<div style=" background:url(Public/images/bg_b1.png) center repeat; height:221px;"></div>
</div>
<!---->
<div class="page_style">
<div class=" clearfix">
<!--栏目-->
 <div class="home_Column_style">
 <div class="Column_list clearfix navigation_list">
  <ul class="">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
   <li class="Channel_name1"><a href="index.php?p=home&c=film&a=doList&tname=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&tid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><i class="icon_TV"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
  </div>
  <!--栏目-->
  <div class="Column_list navigation" style="display: none;">
  <a href="#" class="w_logo"><img src="Public/images/logo.png" width="100%"></a>
   <div class="navigatio_name">
     <a href="javascript:" class="mouse-enter"><i class="icon_navigatio"></i>导航</a>
     <div class="navigatio_nav">
     <ul class=" clearfix">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
   <li class="Channel_name1"><a href="index.php?p=home&c=film&a=doList&tname=<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
&tid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" ><i class="icon_TV"></i><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </ul>
     </div>
     
   </div>
   <div class="Video_search">
     <input name="" type="text" class="search"><button name="" type="button" class=" btn-success button_submit"><i class="icon_search"></i>搜索</button>
  </div>
  </div>
 </div>
</div>
<!--筛选-->
<div class="filter_style">
 <div class="selectNumberScreen">
 <div class="hasBeenSelected">
    <dl>
      <dt style="width: 200px;"><?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
：</dt>
      <dd style="display:none" class="clearDd">
        <div class="clearList"></div>
        <div style="display:none;" class="eliminateCriteria">清除筛选条件</div>
      </dd>
    </dl>
  </div>
  <div id="selectList" class="screenBox screenBackground">
     <dl class="listIndex" attr="terminal_brand_s">
      <dt class="l_f">分类：</dt>
      <dd><a href="javascript:void(0)" values2="" values1="" attrval="全部" >全部</a>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subtypes']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>  
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
" values2="" values1="" attrval="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['sid']->value == $_smarty_tpl->tpl_vars['v']->value['id']) {?> class="selected" <?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      
     </dl>
     <dl class="listIndex" attr="terminal_os_s">
     <dt class="l_f">标签：</dt>
    <dd>
      <a href="javascript:void(0)" values2="" values1="" attrval="全部">全部</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=喜剧" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '喜剧') {?>   class="selected"   <?php }?> attrval="喜剧">喜剧</a> 
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=传记" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '传记') {?>   class="selected"   <?php }?> attrval="传记">传记</a> 
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=历史" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '历史') {?>   class="selected"   <?php }?> attrval="历史">历史</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=动作" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '动作') {?>   class="selected"   <?php }?> attrval="动作">动作</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=家庭" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '家庭') {?>  class="selected"    <?php }?> attrval="家庭">家庭</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=奇幻" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '奇幻') {?>  class="selected"    <?php }?> attrval="奇幻">奇幻</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=剧情" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '剧情') {?>   class="selected"   <?php }?> attrval="剧情">剧情</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=战争" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '战争') {?>   class="selected"   <?php }?> attrval="战争">战争</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=恐怖" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '恐怖') {?>    class="selected"  <?php }?> attrval="恐怖">恐怖</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=悬疑" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '悬疑') {?>   class="selected"   <?php }?> attrval="悬疑">悬疑</a>
      <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=动画" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['k']->value == '动画') {?>    class="selected"  <?php }?> attrval="动画">动画</a>
     </dd>
  </dl>
    <dl class="listIndex" attr="terminal_os_s">
      <dt class="l_f">地点：</dt>
      <dd>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" values2="" values1="" attrval="全部" >全部</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2018" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2018') {?>  class="selected" <?php }?> attrval="2018">2018</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2017" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2017') {?>  class="selected" <?php }?> attrval="2017">2017</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2016" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2016') {?>  class="selected" <?php }?> attrval="2016">2016</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2015" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2015') {?>  class="selected" <?php }?> attrval="2015">2015</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2014" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2014') {?>  class="selected" <?php }?> attrval="2014">2014</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2013" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2013') {?>  class="selected" <?php }?> attrval="2013">2013</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2012" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2012') {?>  class="selected" <?php }?> attrval="2012">2012</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2011" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2011') {?>  class="selected" <?php }?> attrval="2011">2011</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2010" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2010') {?>  class="selected" <?php }?> attrval="2010">2010</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2009" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2009') {?>  class="selected" <?php }?> attrval="2009">2009</a>
            <a href="index.php?p=home&c=film&a=doList&tid=<?php echo $_smarty_tpl->tpl_vars['tid']->value;?>
&sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&tname=<?php echo $_smarty_tpl->tpl_vars['tname']->value;?>
&k=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
&y=2008" values2="" values1="" <?php if ($_smarty_tpl->tpl_vars['y']->value == '2008') {?>  class="selected" <?php }?> attrval="2008">2008</a>
      </dd>
    </dl>
   </div> 
 </div>
 <!---->
 <div class="container_style ">
 <div class="tab_box" id="sort_btn_wrap">
  <a href="javascript:" class="hover">最新</a>
  <a href="javascript:">最热</a>
  <a href="javascript:">新上映</a>
  <a href="javascript:">预告</a>
  </div>
 </div>
</div>
<!--列表展示-->
<div class="movielist" id="movie_list">
  <ul class="clearfix">

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dataArr']->value['data'], 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
    <li class="movie_theme">
     <i class="icon_b rb_ico"></i>
    <a href="select.html" class="movie_img">
     <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value['file_poster'];?>
"  width="183px;" title="<?php echo $_smarty_tpl->tpl_vars['film']->value['name_en'];?>
"/>
     <span class="v_title">
      <em><?php echo $_smarty_tpl->tpl_vars['film']->value['film_time'];?>
</em><i class="fraction"><?php echo $_smarty_tpl->tpl_vars['film']->value['douban_score'];?>
分</i>
     </span>
    </a>
    <div class="movie_title">
      <p class="movie_name"><a href="#" class="name"><?php echo mb_substr($_smarty_tpl->tpl_vars['film']->value['name_en'],0,12,'utf-8');?>
</a></p>
      <p class="Description"><?php echo $_smarty_tpl->tpl_vars['film']->value['film_typename'];?>
</p>
     </div>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


  </ul>
  <!--分页样式-->
   <div class="Paging">
    <?php echo $_smarty_tpl->tpl_vars['dataArr']->value['pageStr'];?>

   </div>
  
</div>
</div>
<!--底部样式-->
<div class="footer_style">
<div class="footer">
 <div class="copys copys-list clearfix">
   <a href="#">网络文化经营许可证 京网文[2014]xxxxx-236号</a>
   <a href="#">京卫网审[2013]第0209号 网络110报警服务</a>
   <a href="#">药品服务许可证(京)-经营2222-0029</a>
  <a href="#">节目制作经营许可证京字670号</a>
 </div>
<div class="link_name">
<a href="#">关于我们</a>|<a href="#">媒体合作</a>|<a href="#">开放平台</a>|<a href="#">广告服务</a>|<a href="#">联系我们</a>|<a href="#">工作机会</a>|<a href="#">友情链接</a></div>
<div class="Copyright">Copyright © 2004-2017 视频名称（xx.com）All rights reserved.</div>
<div class="align clearfix">
 <a href="#"><img src="Public/images/ghs.png" />京公网安备：xxxxxxxxxxxxxxxx号</a> &nbsp;&nbsp;&nbsp;
 <a href="#"><img src="Public/images/xy.png" />中国互联网诚信联盟</a>
</div>
</div>

</div>
<!-- 代码 开始 -->
<div class="go-top dn" id="go-top">
    
    <a href="zhuce.html" target="_blank" class="feedback"></a>
    <a href="javascript:;" class="go"></a>
</div>
</body>
</html>
<?php echo '<script'; ?>
>
 /****************************************/
var dlNum  =$("#selectList").find("dl");
for (i = 0; i < dlNum.length; i++) {
  $(".hasBeenSelected .clearList").append("<div class=\"selectedInfor selectedShow\" style=\"display:none\"><label></label><em></em></div>");
}
var refresh = "true";
$(".listIndex a ").bind("click",function(){
  var text =$(this).text();
  var selectedShow = $(".selectedShow");
  var textTypeIndex =$(this).parents("dl").index();
  var textType =$(this).parent("dd").siblings("dt").text();
  index = textTypeIndex -(2);
  $(".clearDd").show();
  $(".selectedShow").eq(index).show();
  $(this).addClass("selected").siblings().removeClass("selected");
  selectedShow.eq(index).find("span").text(textType);
  selectedShow.eq(index).find("label").text(text);
  var show = $(".selectedShow").length - $(".selectedShow:hidden").length;
  if (show > 1) {
    $(".eliminateCriteria").show();
  }
   
});
$(".selectedShow em").bind("click",function(){
  $(this).parents(".selectedShow").hide();
  var textTypeIndex =$(this).parents(".selectedShow").index();
  index = textTypeIndex;
  $(".listIndex").eq(index).find("a").removeClass("selected");
  
  if($(".listIndex .selected").length < 2){
    $(".eliminateCriteria").hide();
  }
});

$(".eliminateCriteria").bind("click",function(){
  $(".selectedShow").hide();
  $(this).hide();
  $(".listIndex a ").removeClass("selected");
}); 
/*********搜索*********/
function submit_btn(){
   $(".search_style input[type$='text']").each(function(n){
      if($(this).val()=="")
          {
               
         layer.alert("搜索框不能为空！",{
                title: '提示框',       
        icon:0,               
          });         
            return false;            
          } 
     else{
       location.href="search_page.html";
       
       }
     })   
}
<?php echo '</script'; ?>
>
<?php }
}
