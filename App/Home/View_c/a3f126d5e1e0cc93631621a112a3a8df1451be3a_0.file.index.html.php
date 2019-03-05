<?php
/* Smarty version 3.1.30, created on 2018-04-19 20:45:48
  from "D:\class\two_class\dytt\App\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad88f7c03dd12_22438282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f126d5e1e0cc93631621a112a3a8df1451be3a' => 
    array (
      0 => 'D:\\class\\two_class\\dytt\\App\\Home\\View\\Index\\index.html',
      1 => 1524141862,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad88f7c03dd12_22438282 (Smarty_Internal_Template $_smarty_tpl) {
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
<title>首页</title>
</head>

<body class="background_color">

<div class="Slideshow_style" id="Slideshow">
<div class="header_top">
<div class="header clearfix">
 <a href="#" class="logo_style"><img src="Public/images/logo.png" /></a>
 <div class="search_stye">
 <input name="" type="text"  class="search"/><button name="" type="button" class=" btn-success button_submit" onclick="submit_btn()"><i class="icon_search"></i>搜索</button>
 </div>
 </div>
</div>
 <div class="wrapper" id="wrapper_slideBox">
  <div class="hd Switch_operation">
   <ul class=" clearfix">
   <li><a href="#"><img src="Public/images/x-banner1.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   <li><a href="#"><img src="Public/images/x-banner2.jpg" /><span></span></a></li>
   </ul>
  </div>
  <div class="bd">
   <ul>
    <li style="background:url(Public/images/banner2.jpg) no-repeat center; text-align:center; height:600px;"><a href="#" class=""></a></li>
    <li style="background:url(Public/images/banaer.png) no-repeat center; text-align:center; height:600px;"><a href="#" class=""></a></li>
   </ul>
  </div>
 </div>
 <?php echo '<script'; ?>
>jQuery("#wrapper_slideBox").slide({mainCell:".bd ul",autoPlay:true,delayTime:1000});<?php echo '</script'; ?>
>
</div>
<div class="home_style  Channel">
<!--栏目-->
 <div class="home_Column_style">
 <div class="Column_list clearfix navigation_list">
  <ul class="">
   <li class="Channel_name"><a href="index.tml" ><i class="icon_TV"></i>首页</a></li>
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
  <div class="Column_list navigation">
  <a href="#" class="w_logo"><img src="Public/images/logo.png"  width="100%"/></a>
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
     <input name="" type="text"  class="search"/><button name="" type="button" class=" btn-success button_submit"><i class="icon_search"></i>搜索</button>
  </div>
  </div>
 </div>
 <!--热播精选-->
 <div class="Hot_selection_style Channels">
   <div class="title_name clearfix"><i class="icon_title"><img src="Public/images/icon_title_TV.png" /></i>热播精选 <span class="link_name"><a href="#">3月观影指南:炫酷大片不容错过</a>| <a href="#">致命诱惑!这些制服妹子好美</a>|</span></div>
   <div class="Video_list margintb clearfix">
    <div class="left_Video_list Channel_bg bg">
     <span class="Signs_img"></span>
     <a href="#" class="Video_img_link">
      <img src="Public/video/1.jpg" />
      <span class="xianshi"><i class="icon_bofang"></i></span>
     </a>
     <div class="heading_name">
      <A href="#">男子保护区内持枪狩猎 竟把民警当猎物射击</A>
      <H4>民警及时隐蔽卧倒并未受伤</H4>
     </div>
    </div>
    <div class="right_Video_list">
     <ul class="list_v_content">
      <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
       <li class="first_content bg">
       <a href="#" class="pic " target="_blank">
        <img src="Public/video/3.jpg"  width="100%"/>
        <span class="first_bg"><i class="icon_bf"></i></span>
       </a>
       <a target="_blank" href="#" class="bq" >现场</a>
       <div class="tc">
        <p class="tit">
        <a target="_blank" href="#" >轿车公路上行驶被闪电劈中</a></p>
        <p class="des">巨响过后冒出浓烟</p>
       </div>
      </li>
     </ul>
    </div>   
   </div>
   
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?> 
   <!--电影-->
   <div class="Channels margintb">
    <div class="title_name clearfix">
    <i class="icon_title"><img src="Public/images/icon_film.png" /></i><?php echo $_smarty_tpl->tpl_vars['v']->value['typename'];?>
<span class="link_name"><a href="#">更多</a></span></div>
    <div class="clearfix  "> 
    <ul class="movie_list  clearfix">
     
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value['films'], 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
     <li class="Case_info">
     <a href="index.php?p=home&c=film&a=findFilmById&id=<?php echo $_smarty_tpl->tpl_vars['film']->value['id'];?>
" class="movie_link">
     <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value['file_poster'];?>
"  width="100%"/>
     <div class="movie_title">
      <i class="fraction"><?php echo $_smarty_tpl->tpl_vars['film']->value['douban_score'];?>
</i>
      <p class="name"><?php echo $_smarty_tpl->tpl_vars['film']->value['name_cn'];?>
</p>
      <h5><?php echo $_smarty_tpl->tpl_vars['film']->value['film_typename'];?>
</h5>
      <p class="content">
        <?php echo $_smarty_tpl->tpl_vars['film']->value['content'];?>

      </p>
     </div>
     </a>
     </li>
     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </ul> 
      
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    <!--底部-->
    <div class="l_f width50">
     <div class="bg mr10">
      <div class="n_title_name"><em class=""></em>网站公告</div>
      <ul class="notice_list clearfix">
       <li><a href="#"><i class="icon_yuan"></i>通知公告内容是什么的内容的介绍信息</a> </li>
       <li><a href="#"><i class="icon_yuan"></i>通知公告内容是什么的内容的介绍信息</a> </li>
       <li><a href="#"><i class="icon_yuan"></i>通知公告内容是什么的内容的介绍信息</a> </li>
       <li><a href="#"><i class="icon_yuan"></i>通知公告内容是什么的内容的介绍信息</a> </li>
       <li><a href="#"><i class="icon_yuan"></i>通知公告内容是什么的内容的介绍信息</a> </li>
      </ul>
     </div>
    </div>
    <div class="l_f width50">
     <div class="bg ml10">     
     <div class="n_title_name">合作伙伴</div>
     <div class="notice_list clearfix">
      <a href="#" class="Cooperation_name">华数</a>
      <a href="#" class="Cooperation_name">万达电影网</a>
      <a href="#" class="Cooperation_name">华谊兄弟</a>
      <a href="#" class="Cooperation_name">星美</a>
      <a href="#" class="Cooperation_name">光线影业</a>
      <a href="#" class="Cooperation_name">电影网</a>
      <a href="#" class="Cooperation_name">华策影视</a>
      <a href="#" class="Cooperation_name">百度视频</a>
      <a href="#" class="Cooperation_name">百度百科</a>
      <a href="#" class="Cooperation_name">微博视频台</a>
      <a href="#" class="Cooperation_name">百度贴吧</a>
      <a href="#" class="Cooperation_name">央广网</a>
      <a href="#" class="Cooperation_name">hao123</a>
      <a href="#" class="Cooperation_name">爱奇艺</a>
      <a href="#" class="Cooperation_name">天猫店</a>
     </div>
     </div>
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
/*********搜索*********/
function submit_btn(){
   $(".search_style input[type$='text']").each(function(n){
      if($(this).val()=="")
          {
               
           layer.open({
    title: [
      '我是标题',
      'background-color:#8DCE16; color:#fff;'
    ]
    ,anim: 'up'
    ,content: '展现的是全部结构'
    ,btn: ['确认', '取消']
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
