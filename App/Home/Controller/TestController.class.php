<?php 

	namespace Home\Controller;
	use \Core\HomeController;

	//测试类，测试自定义的类
	class TestController extends HomeController {

		//测试上传类
		function testUpload(){

			$this->display("upload.html");

		}

		//保存图片到上传目录
		function saveUpladFile(){

			//接收文件上传数据
			$file = $_FILES['head_img'];

			//保存图片到指定的目录
			global $config;

			//使用配置文件赋值
			$img['dir'] = $config['upload']['upload_dir'];
			$img['water'] = $config['upload']['water_img'];

			//实例化文件上传对象
			$upload = new \Uploader;
		    //上传函数的优化
		    //如果上传成功，uploadFile函数直接返回文件名
		    //如果上传失败，uploadFile函数返回false;
		    $fname = $upload->uploadImageAndWater($file,$img,$config['upload']['allow_suffix'],1);

			if($fname!=false){

				echo "文件上传成功!,文件保存在:".$fname;
			}else{
				echo "文件上传失败！";
			}

		}

		//测试文件文件图像处理类
		function testWaterImage(){

				//定义一个数组，保存两个路径
				$img['image'] = PUBLICDIR."img3.jpg";
				$img['water'] = PUBLICDIR."logo.png";

				$imgObj = new \Image;
				$imgObj->waterImage($img,"topRight");

		}

		//测试验证码类
		function testCaptcha(){

			//验证码类的用法
			//1、导入验证码的类
			//2、通过类名调用静态方法 zh_captcha 中文验证码  en_captcha英文验证码
			//3、服务器 1)session_start()    2)通过 $_SESSION['validateCode'];
			\Captcha::en_captcha(4,20,108,35);

		}


		//测试分页
		function testPage(){

			//获取分页类
			//计算总记录数
			$houseModel = new \Model\HouseModel;
			$arr = $houseModel->page();

			var_dump($arr);

			//根据总记录数，开始计算分页

		}

	}












 ?>