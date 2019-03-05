<?php
/* Smarty version 3.1.30, created on 2018-04-17 15:39:11
  from "D:\class\two_class\dytt\App\Admin\View\Rules\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ad5a49f318c08_98664641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbf6e3267680e9920a3cb21adf57cdcc1250e3a1' => 
    array (
      0 => 'D:\\class\\two_class\\dytt\\App\\Admin\\View\\Rules\\add.html',
      1 => 1523950732,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ad5a49f318c08_98664641 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class=" js csstransforms3d"><head>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>文章发布-发布</title>
	<link rel="stylesheet" href="Public/css/base.css">
	<link rel="stylesheet" href="Public/css/page.css">
	<!--[if lte IE 8]>
	<link href="Public/css/ie8.css" rel="stylesheet" type="text/css"/>
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
	<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/jquery.selectui.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="Public/js/utf8-jsp/ueditor.config.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="Public/js/utf8-jsp/ueditor.all.min.js"> <?php echo '</script'; ?>
>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <?php echo '<script'; ?>
 type="text/javascript" charset="utf-8" src="Public/js/utf8-jsp/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
	
	<link rel="stylesheet" type="text/css" href="Public/js/webuploader/webuploader.css">    
    <link rel="stylesheet" type="text/css" href="Public/js/webuploader/demo.css">
	
	<?php echo '<script'; ?>
>
	$(function($) {
		$("select").selectui({
			// 是否自动计算宽度
			autoWidth: true,
			// 是否启用定时器刷新文本和宽度
			interval: true
		});
	});
	<?php echo '</script'; ?>
>
	<!--[if IE]>
	<?php echo '<script'; ?>
 src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"><?php echo '</script'; ?>
>
	<![endif]-->
<link href="Public/js/utf8-jsp/themes/default/css/ueditor.css" type="text/css" rel="stylesheet">
<?php echo '<script'; ?>
 src="Public/js/utf8-jsp/third-party/codemirror/codemirror.js" type="text/javascript" defer><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="Public/js/utf8-jsp/third-party/codemirror/codemirror.css">
<?php echo '<script'; ?>
 src="Public/js/utf8-jsp/third-party/zeroclipboard/ZeroClipboard.js" type="text/javascript" defer><?php echo '</script'; ?>
></head>

<body style="background: rgb(246, 245, 250);">
	<!--content S-->
	<div class="super-content">
		
		<div class="superCtab">
			<div class="publishArt">
				<h4>发布文章</h4>
				<div class="pubMain">
					<a href="javascript:history.go(-1)" class="backlistBtn"><i class="ico-back"></i>返回列表</a>
					<form action="index.php?p=admin&c=Rules&a=add" method="post">
						<h5 class="pubtitle">选择分类</h5>
						<div class="pubselect">
							<span class="select_ui"><span class="select_text_ui" style="min-width: 6em;">请选择分类</span><b class="select_arrow"></b>
							<select name="type">
								<option value="0">根级目录</option>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dateArr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
#<?php echo $_smarty_tpl->tpl_vars['v']->value['path'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['v']->value['rules_name'];?>

								</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select></span>
						</div>

						<h5 class="pubtitle">电影类型</h5>
						<div class="pubselect">
							<span class="select_ui"><span class="select_text_ui" style="min-width: 6em;">请选择分类</span><b class="select_arrow"></b>
							<select name="filmtypeid">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['filmtypes']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>

								</option>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</select></span>
						</div>
						<h5 class="pubtitle">规则名称</h5>
						<div class="pub-txt-bar">
							<input type="text" class="shuruTxt" name="rulesname">
						</div>
						
						<h5 class="pubtitle">规则描述</h5>
						<div class="pub-area-bar">
							<textarea name="rulesdesc" rows="" cols="3"></textarea>
						</div>
						

						<h5 class="pubtitle">采集地址</h5>
						<div class="pub-txt-bar">
							<input type="text" class="shuruTxt" name="url" placeholder="http://">
						</div>

						<div class="lxfs-tzyx clearfix">
							<ul class="clearfix">
								<li><h5 class="pubtitle">开始页码</h5>
									<input type="text" class="shuruTxt" name="start" value="0">
								</li>
								<li><h5 class="pubtitle">结束页码</h5>
									<input type="text" class="shuruTxt" name="end" value="0">
								</li>
							</ul>
						</div>

						<h5 class="pubtitle">采集类型</h5>
						<div class="pub-txt-bar">
							<input type="radio" name="rulestype" value="0" checked="checked">内容
							<input type="radio" name="rulestype" value="1">列表
						</div>

						<h5 class="pubtitle">采集规则(正则内容)</h5>
						<div class="pub-area-bar">
							<textarea name="content" rows="" cols="3"></textarea>
						</div>
						
						<div class="pub-btn">
							<input type="submit" id="" value="发布" class="saveBtn">
						</div>
					</form>
				</div>
			</div>
		
		</div>
		<!--main-->
		
	</div>
	<!--content E-->
	<!--点击修改弹出层-->
	<div class="layuiBg"></div><!--公共遮罩-->
	<!--点击添加标签弹出-->
	<div class="addFeileibox addSortBox layuiBox">
		<div class="layer-title clearfix"><h2>添加标签</h2><span class="layerClose"></span></div>
		<div class="layer-content">
			<div class="addSortMain clearfix">
				<span>保险</span><span data-id="lb1">保险</span><span data-id="lb2">保</span><span data-id="lb2">保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span><span>保险</span>
			</div>
			<div class="addSortBtn"><input type="button" value="保存" class="saveBtn FuncsaveBtn"></div>
		</div>
	</div>
	

<?php echo '<script'; ?>
 type="text/javascript">
// 添加全局站点信息
var BASE_URL = '/webuploader';
<?php echo '</script'; ?>
>
<!--引入JS-->
<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/webuploader/webuploader.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/webuploader/demo.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');


    function isFocus(e){
        alert(UE.getEditor('editor').isFocus());
        UE.dom.domUtils.preventDefault(e)
    }
    function setblur(e){
        UE.getEditor('editor').blur();
        UE.dom.domUtils.preventDefault(e)
    }
    function insertHtml() {
        var value = prompt('插入html代码', '');
        UE.getEditor('editor').execCommand('insertHtml', value)
    }
    function createEditor() {
        enableBtn();
        UE.getEditor('editor');
    }
    function getAllHtml() {
        alert(UE.getEditor('editor').getAllHtml())
    }
    function getContent() {
        var arr = [];
        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getContent());
        alert(arr.join("\n"));
    }
    function getPlainTxt() {
        var arr = [];
        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
        arr.push("内容为：");
        arr.push(UE.getEditor('editor').getPlainTxt());
        alert(arr.join('\n'))
    }
    function setContent(isAppendTo) {
        var arr = [];
        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
        alert(arr.join("\n"));
    }
    function setDisabled() {
        UE.getEditor('editor').setDisabled('fullscreen');
        disableBtn("enable");
    }

    function setEnabled() {
        UE.getEditor('editor').setEnabled();
        enableBtn();
    }

    function getText() {
        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
        var range = UE.getEditor('editor').selection.getRange();
        range.select();
        var txt = UE.getEditor('editor').selection.getText();
        alert(txt)
    }

    function getContentTxt() {
        var arr = [];
        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
        arr.push("编辑器的纯文本内容为：");
        arr.push(UE.getEditor('editor').getContentTxt());
        alert(arr.join("\n"));
    }
    function hasContent() {
        var arr = [];
        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
        arr.push("判断结果为：");
        arr.push(UE.getEditor('editor').hasContents());
        alert(arr.join("\n"));
    }
    function setFocus() {
        UE.getEditor('editor').focus();
    }
    function deleteEditor() {
        disableBtn();
        UE.getEditor('editor').destroy();
    }
    function disableBtn(str) {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            if (btn.id == str) {
                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
            } else {
                btn.setAttribute("disabled", "true");
            }
        }
    }
    function enableBtn() {
        var div = document.getElementById('btns');
        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
        for (var i = 0, btn; btn = btns[i++];) {
            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
        }
    }

    function getLocalData () {
        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
    }

    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
    
<?php echo '</script'; ?>
>

<!--<?php echo '<script'; ?>
 type="text/javascript" src="Public/js/zxxFile.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
var params = {
	fileInput: $("#fileImage").get(0),
	upButton: $("#fileSubmit").get(0),
	url: $("#uploadForm").attr("action"),
	filter: function(files) {
		var arrFiles = [];
		for (var i = 0, file; file = files[i]; i++) {
			if (file.type.indexOf("image") == 0) {
				if (file.size >= 512000) {
					alert('您这张"'+ file.name +'"图片大小过大，应小于500k');	
				} else {
					arrFiles.push(file);	
				}			
			} else {
				alert('文件"' + file.name + '"不是图片。');	
			}
		}
		return arrFiles;
	},
	onSelect: function(files) {
		var html = '', i = 0;
		$("#preview").html('<div class="upload_loading"></div>');
		var funAppendImage = function() {
			file = files[i];
			if (file) {
				var reader = new FileReader()
				reader.onload = function(e) {
					html = html +'<div class="Thumb_li"><div class="bg"><a href="javascript:" class="Thumb_delete" title="删除" data-index="'+ i +'">删除</a></div>' +
						'<img id="uploadImage_' + i + '" src="' + e.target.result + '" class="upload_image" />'+ 
					'</div>';
					
					i++;
					funAppendImage();
					$('.Thumb_li').hover(function(){
				    	$(this).children('.bg').fadeIn();
				    },function(){
				    	$(this).children('.bg').fadeOut();
				    });
				    $(".Thumb_delete").click(function(){
				    	$(this).parent().parent('.Thumb_li').remove();
				    });
				}
				reader.readAsDataURL(file);
			} else {
				$("#preview").html(html);
				if (html) {
					//删除方法
					$(".Thumb_delete").click(function() {
						ZXXFILE.funDeleteFile(files[parseInt($(this).attr("data-index"))]);
						return false;	
					});
					//提交按钮显示
					$("#fileSubmit").show();	
				} else {
					//提交按钮隐藏
					$("#fileSubmit").hide();	
				}
			}
		};
		funAppendImage();		
	},
	onDelete: function(file) {
		$("#uploadList_" + file.index).fadeOut();
	},
	onDragOver: function() {
		$(this).addClass("upload_drag_hover");
	},
	onDragLeave: function() {
		$(this).removeClass("upload_drag_hover");
	},
	onProgress: function(file, loaded, total) {
		var eleProgress = $("#uploadProgress_" + file.index), percent = (loaded / total * 100).toFixed(2) + '%';
		eleProgress.show().html(percent);
	},
	onSuccess: function(file, response) {
		$("#uploadInf").append("<p>上传成功，图片地址是：" + response + "</p>");
	},
	onFailure: function(file) {
		$("#uploadInf").append("<p>图片" + file.name + "上传失败！</p>");	
		$("#uploadImage_" + file.index).css("opacity", 0.2);
	},
	onComplete: function() {
		//提交按钮隐藏
		$("#fileSubmit").hide();
		//file控件value置空
		$("#fileImage").val("");
		$("#uploadInf").append("<p>当前图片全部上传完毕，可继续添加上传。</p>");
	}
};
ZXXFILE = $.extend(ZXXFILE, params);
ZXXFILE.init();
<?php echo '</script'; ?>
>-->

</body></html><?php }
}
