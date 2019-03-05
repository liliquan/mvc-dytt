<?php 
	
	namespace Admin\Controller;
	use \Core\AdminController;

	class FilmurlController extends AdminController{

		function doList(){

			$k = isset($_GET['k'])? $_GET['k'] : "";
			// echo __CLASS__;
			$FilmurlModel = new \Model\FilmurlModel;
			$arr = $FilmurlModel->pageList($k);
			// var_dump($arr);

			$this->assign("FilmArr",$arr);
			$this->display("list.html");
		}



		function addType(){


			$FilmurlModel = new \Model\FilmurlModel;
			$arr = $FilmurlModel->findAll();

			for($i=0;$i<count($arr);$i++){

				$a1 = explode("-",$arr[$i]['path']);
				$len = count($a1);

				$str ="";
				for($j=1;$j<$len;$j++){
					$str .= "--";
				}

				$arr[$i]['name'] = $str."|".$arr[$i]['name'];
			}
			$this->assign("dateArr",$arr);

			$this->display("add.html");
		}

		function add(){
			$type = $_POST['type'];

			if($type=='0'){

				$data[':pid'] = 0;
				$data[':path'] = 0;

			}else{
				$arr = explode("#",$type);
				var_dump($arr);
				$data[':pid'] = $arr[0];
				$data[':path'] = $arr[1]."-".$arr[0];
				
			}

			$data[":tname"] = $_POST['typename'];

			$FilmurlModel = new \Model\FilmurlModel;
			if($FilmurlModel->addInfo($data)){
				$this->success("Admin","Filmtype","doList","添加{$data[":tname"]}类型成功",1);
			}else{
				$this->error("Admin","Filmtype","addType","添加{$data[":tname"]}类型失败",1);
			}
		}

		function deleteType(){

			if(!isset($_GET['id'])) exit;

			$id = $_GET['id'];
			$FilmurlModel = new \Model\FilmurlModel;

			if($FilmurlModel->delete($id)){
				$this->success("Admin","Filmtype","deleteType","删除成功",1);
			}else{
				$this->error("Admin","Filmtype","deleteType","删除失败",3);
			}
		}

		function testCurlGet(){

			$curl = curl_init();
			$url = "http://www.d.com/php23/content.php?name=superman";

			curl_setopt($curl,CURLOPT_URL, $url);
			curl_setopt($curl,CURLOPT_HEADER, 0);
			curl_setopt($curl,CURLOPT_RETURNTRANSFER, 1);

			// 发送并执行 data返回的为url相应的内容
			$data = curl_exec($curl);

			curl_close($curl);

			var_dump($data);
		}

		function getDataByURL($url,$str="keywords",$retry=3){
			// echo "<div id='txt' style='border:1px solid red;overflow:auto;height:600px;'></div>";
			$curl = curl_init();

			// $url = "http://www.dytt8.net/index.htm";
			$referer = "http://www.dytt8.net/index.htm";
			$cookieStr = "37cs_pidx=1; 37cs_user=37cs17170730299; 37cs_show=253; cscpvrich5041_fidx=1; UM_distinctid=162bd27669ab32-0c47c5897c92b08-4c322073-fa000-162bd27669c44b; CNZZDATA1260535040=1450626112-1523588526-http%253A%252F%252Fwww.dytt8.net%252F%7C1523588526";
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_HEADER, 1);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curl,CURLOPT_AUTOREFERER,1);
			curl_setopt($curl,CURLOPT_REFERER,$referer);
			curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:59.0) Gecko/20100101 Firefox/59.0');
			curl_setopt($curl, CURLOPT_COOKIE,$cookieStr);


			// $post_data = array(
			// 	"name"=>"zhangsan",
			// 	"pass"=>"123456"
			// );

			// curl_setopt($curl, CURLOPT_POSTFIELDS,$post_data);
			// 发送并执行 data返回的为url相应的内容
			$data = curl_exec($curl);
			$data = iconv("gb2312","utf-8//IGNORE",$data);
			// var_dump($data,$str,$retry);
			while(strpos($data,$str)===false&&$retry--){

				$t = mt_rand(1,3);
				$this->output("请求【{$url}】失败,{$t}秒重试,正在继续...请等等在下~<br>");
				sleep($t);

				$data = curl_exec($curl);
				$data = iconv("gb2312","utf-8//IGNORE",$data);
			}

			curl_close($curl);
			return $data;
		}

		function output($str){
			
			// echo "<script>var txt=document.getElementById('txt');txt.innerHTML= txt.innerHTML+'<br>".$str."';</script>";
			
			echo $str;
			ob_flush();
			flush();
		}

		function start(){

			if(!isset($_GET['id'])){

				$this->error("Admin","rules","doList","参数错误，无法继续采集...",3);
			}

			$id = $_GET['id'];

			//根据id，查询采集的规则
			$rulesModel = new \Model\RulesModel;
			//$rules 数组，保存采集的规则
			$rules = $rulesModel->findRowById($id);

			if($rules['type']==1){
				$this->getFilmURL($rules);
			
			}
		}

		function getFilmURL($rules){

			

			$url = $rules['url'];
			
			$start= $rules['start_page'];
			$end= $rules['end_page'];
			$result = array();
			$result2 = array();
			$count = 0;
			$totalCount = $end*25;

			for($j=$start;$j<=$end;$j++){

				$result = null;
				$result2 = null;

				$url2 = preg_replace("/{.*}/Us",$j,$url);
				$patt = $rules['content'];

				$FilmurlModel = new \Model\FilmurlModel;
				$str = $this->getDataByURL($url2);
				$num = preg_match_all($patt, $str,$result);
				// var_dump($result);
				$patt2 = "/日期：(.*)点/Us";
				$num2 = preg_match_all($patt2, $str,$result2);

				if($num&&$num2){

					for($i=0;$i<count($result[1]);$i++){
						$data[':url'] = $result[1][$i];
						$data[':hashurl'] = md5($result[1][$i]);
						$data[':filmtypeid'] = $rules['filmtypeid'];
						// var_dump($rules['filmtypeid']);
						$data[':page'] = $j;
						$data[':addTime'] = trim($result2[1][$i]);
						// var_dump($data[':hashurl']);
						$data[':is_down'] = 0;

						if($FilmurlModel->url_exists($data[':hashurl'])){
							$this->output("数据已经存在...跳过...<br>");
							continue;
						}

						//把url保存到数据库中
						if($FilmurlModel->addInfo($data)){
							$count++;
							$this->output("成功采集{$count}/{$totalCount}条,当前第{$j}页,采集正在继续...<br>");

						}else {
							$error = \Core\Dao::$error;
							$this->output("添加失败!{$error}");
						}


					}
				}

				$this->output("<hr>当前完成第{$j}页【{$url2}】，程序休息3秒，程序正在继续<hr>");
				sleep(3);

			}

		}

		// 更新表
		function updateFilmUrl(){
			if(!isset($_GET['id'])){
				$this->error("Admin","rules","doList","参数错误，无法继续采集...",3);
			}

			$id = $_GET['id'];

			$RulesModel = new \Model\RulesModel;
			$rules = $RulesModel->findRowById($id);
			var_dump($rules);
			$url = $rules['url'];
			$start = $rules['start_page'];
			$end = $rules['end_page'];
			$result = array();
			$result2 = array();
			$count = 0;
			$totalCount = $end*25;

			$filmurlModel = new \Model\FilmurlModel;
			$max = $filmurlModel->getMaxTimeByType($rules['filmtypeid']);

			for($j=$start;$j<=$end;$j++){

				$result = null;
				$result2 = null;

				$url2 = preg_replace("/{.*}/Us",$j,$url);
				$patt = $rules['content'];

				$FilmurlModel = new \Model\FilmurlModel;
				$str = $this->getDataByURL($url2);
				$num = preg_match_all($patt, $str,$result);
				// var_dump($result);
				$patt2 = "/日期：(.*)点/Us";
				$num2 = preg_match_all($patt2, $str,$result2);

				if($num&&$num2){
					
					//保存数据到数据库中
					for($i=0;$i<count($result[1]);$i++){

						//判断要采集的数据的时间是否>数据库中存在的最大的时间
						//trim($result2[1][$i]) 采集的时间的字符串 2018-04-12 19:52:08
						//strtotime('2018-04-12 19:52:08') 可以帮我们把字符串转为 unix时间戳
						$serTime = strtotime(trim($result2[1][$i]));
						if($max<$serTime){
							//拼数据
							$data[':url'] = $result[1][$i];
							$data[':hashurl'] = md5($result[1][$i]);
							//所属电影类型
							$data[':filmtypeid'] = $rules['filmtypeid'];
							$data[':page'] = $j;
							$data[':addTime'] = trim($result2[1][$i]);
							//is_down = 0 表示该链接的内容（对应的影片）还没有被下载
							$data[':is_down'] = 0;

							//添加之前做判断，判断是否已经存url
							if($FilmurlModel->url_exists($data[':hashurl'])) {
								$this->output("url已经存在...跳过...");
								continue;
							}

							//把url保存到数据库中
							if($FilmurlModel->addInfo($data)){
								$count++;
								$this->output("成功采集{$count}/{$totalCount}条,当前第{$j}页,采集正在继续...");
							}else {
								$error = \Core\Dao::$error;
								$this->output("添加失败!{$error}");
							}

						}else{
							//如果数据没有更新，则直接退出
							$this->output("本地数据已经是最新的了！");
							break 2;
						}

					}


				}else{
					$this->output("本地数据已经是最新的了！");
					break 2;
				}

				$this->output("<hr>当前完成第{$j}页【{$url2}】，程序休息3秒，程序正在继续<hr>");
				sleep(3);

			}


		}


		/**
		 * 采集电影的内容
		 */

		function getFilmContent(){
			$count=0;
			if(!isset($_GET['id'])){

				$this->error("Admin","rules","doList","参数错误，无法继续采集...",3);
			}

			$id = $_GET['id'];

			//根据id，查询采集的规则
			$RulesModel = new \Model\RulesModel;
			//$rules 数组，保存采集的规则
			$rules = $RulesModel->findRowById($id);
			// var_dump($rules);
			$pattArr = explode("||",$rules['content']);

			$FilmurlModel = new \Model\FilmurlModel;
			// var_dump($pattArr);
			$urlArr = $FilmurlModel ->findUrlByFilmtypeid($rules['filmtypeid']);
			// var_dump($rules['filmtypeid']);	
			// var_dump($urlArr);
			for($i=0;$i<count($urlArr);$i++){
				$data=null;
				$result = null;
				//$contentUrl 就是我们的每个电影的对应的网址
				$contentUrl = $rules['url'].$urlArr[$i]['url'];
				$str = $this->getDataByURL($contentUrl);

				if($str!=""){
					for($j=0;$j<count($pattArr);$j++){
						$num = preg_match($pattArr[$j],$str,$result);
						if($num){
							$data[$j]=$result[1];
						}else{
							$data[$j]="";
						}
					}

					$data[] =$rules['filmtypeid'];
					$data[] = $_SESSION['username'];

					var_dump($data);	

					$filmModel = new \Model\FilmModel;
					if($filmModel->addInfo($data)){
						$count++;
						$this->output("当前【{$contentUrl}】已经下载成功，累计下载{$count}条!");
						$id = $urlArr[$i]['id'];
						if($FilmurlModel->updateDownState($id)){
						$this->output("下载状态已经更新");
						
					}
						$t = 3;
						$this->output("<hr>休息{$t}秒钟，程序正在运行中...<hr>");
						sleep($t);
					
					}else{
						$err = \Core\Dao::$error;
						$this->output("添加失败:{$err}");
					}
				
				//用正则的数组，依次取出影片的各个属性信息
				//
				//
				//拼成数组，保存到数据库
				//
				//
				//如果保存成功，更新当前URL对应的下载状态为 1

			}

		}




		}










		function test(){


			$str='
<div class="title_all"><h1><font color=#07519a>2018年奇幻喜剧《捉妖记2》HD国语中字</font></h1></div>
<tr>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr> 
      <td colspan="2" align="center" valign="top"><div id="Zoom">
<!--Content Start--><span style="FONT-SIZE: 12px"><td>
捉妖记2][HD-mkv.720p.国语中字][2018年奇幻喜剧] <br /><br /><img border="0" src="http://www.imageto.org/images/l59B.jpg" alt="" /> <br /><br />◎译　　名　Monster Hunt 2 <br />◎片　　名　捉妖记2 <br />◎年　　代　2018 <br />◎产　　地　中国/中国香港 <br />◎类　　别　喜剧/奇幻 <br />◎语　　言　普通话 <br />◎字　　幕　中文 <br />◎上映日期　2018-02-16(中国) <br />◎IMDb评分 5.4/10 from 259 users <br />◎豆瓣评分　5.2/10 from 105,215 users <br />◎文件格式　RMVB + aac <br />◎视频尺寸　1280 x 720 <br />◎文件大小　1CD <br />◎片　　长　110分钟 <br />◎导　　演　许诚毅 Raman Hui <br />◎主　　演　梁朝伟 Tony Leung Chiu Wai <br />　　　　　　白百何 Baihe Bai <br />　　　　　　井柏然 Boran Jing <br />　　　　　　李宇春 Yuchun Li <br />　　　　　　杨祐宁 Tony Yang <br />　　　　　　大鹏 Da Peng <br />　　　　　　吴君如 Sandra Ng <br />　　　　　　曾志伟 Eric Tsang <br />　　　　　　黄磊 Lei Huang <br />　　　　　　柳岩 Yan Liu <br />　　　　　　吴莫愁 Mouchou Wu <br />　　　　　　伍嘉成 Humphrey Wu <br />　　　　　　赵磊 Lay Zhao <br />　　　　　　谷嘉诚 Jason <br />　　　　　　彭楚粤 Chuyue Peng <br />　　　　　　陈泽希 Emn Chen <br />　　　　　　郭子凡 G-Ziven <br />　　　　　　肖战 Sean Xiao <br />　　　　　　焉栩嘉 Xujia Yan <br />　　　　　　夏之光 Zhiguang Xia <br />　　　　　　姜超 Chao Jiang <br />　　　　　　娄艺潇 Yixiao Lou <br />　　　　　　张俪 Li Zhang <br /><br />◎简　　介 <br /><br />　　上一集与胡巴分别后，天荫（井柏然 饰）带着小岚（白百何 饰）踏上寻父之路，在义薄云天的天师堂堂主云大哥（杨祐宁 饰）的帮助下，二人得知天荫父亲宋戴天的护妖轨迹；而重回永宁村的胡巴再度被妖王追杀，颠沛流离逃亡时结识大赌徒屠四谷（梁朝伟 饰）和一只妖怪，三人一起过着相依为命的生活，但又因屠四谷欠下的巨额赌债横生诸多波折。与此同时 ，江湖盛传小妖王胡巴的重金悬赏令，妖界大军、天师精英、绿林草莽闻风而动，多方势力为抢夺胡巴在清水镇掀起腥风血雨。千钧一发之际，念子心切的天荫和小岚通过天师堂找到胡巴并一起逃离险境。岂料，一场更大的惊天阴谋尾随而至，伺机而动&hellip;&hellip; <br /><br />◎获奖情况 <br /><br />　　第4届豆瓣电影年度榜单 (2017) <br />　　最值得期待的华语电影 <br /><br /><img border="0" src="http://www.imageto.org/images/rPEqC.jpg" alt="" /> <br /><br /><br /><strong><font color="#ff0000"><font size="4">【下载地址】</font></font></strong> <br /><br /><br />
<table style="BORDER-BOTTOM: #cccccc 1px dotted; BORDER-LEFT: #cccccc 1px dotted; TABLE-LAYOUT: fixed; BORDER-TOP: #cccccc 1px dotted; BORDER-RIGHT: #cccccc 1px dotted" border="0" cellspacing="0" cellpadding="6" width="95%" align="center">
    <tbody>
        <tr>
            <td style="WORD-WRAP: break-word" bgcolor="#fdfddf"><a href="ftp://ygdy8:ygdy8@yg45.dydytt.net:7172/阳光电影www.ygdy8.com.捉妖记2.HD.720p.国语中字.mkv">ftp://ygdy8:ygdy8@yg45.dydytt.net:7172/阳光电影www.ygdy8.com.捉妖记2.HD.720p.国语中字.mkv</a></td>
        </tr>
    </tbody>';

    	//采集标题
		$patt = "/<h1><font color=#07519a>(.*)<\/font>/Us";
		$patt = "/<img border=\"0\" src=\"(.*)\" alt=\"\" \/> <br \/><br \/>◎译/Us";
		$patt = "/◎译　　名　(.*) <br/Us";
		$patt = "/◎片　　名　(.*) <br/Us";
		$patt = "/◎年　　代　(.*) <br/Us";
		$patt = "/◎产　　地　(.*) <br/Us";
		$patt = "/◎类　　别　(.*) <br/Us";
		$patt = "/◎语　　言　(.*) <br/Us";
		$patt = "/◎字　　幕　(.*) <br/Us";
		$patt = "/◎上映日期　(.*) <br/Us";
		$patt = "/◎IMDb评分 (.*)\//Us";
		$patt = "/◎豆瓣评分　(.*)\//Us";
		$patt = "/◎文件格式　(.*) <br/Us";
		$patt = "/◎视频尺寸　(.*) <br/Us";
		$patt = "/◎文件大小　(.*) <br/Us";
		$patt = "/◎片　　长　(.*) <br/Us";
		$patt = "/◎导　　演　(.*) <br/Us";
		$patt = "/◎主　　演　(.*) <br \/><br \/>/Us";
		$patt = "/◎简　　介 <br \/><br \/>　　(.*)<br \/><br \/>/Us";
		$patt = "/◎获奖情况 <br \/><br \/>　　(.*) <br/Us";
		$patt = "/◎主　　演.*<img border=\"0\" src=\"(.*)\" alt=\"\" \/>.*<strong>/Us";


		$num = preg_match_all($patt,$str,$result);
		// var_dump($num,$result);
		print_r($result);


		}


	}

 ?>
