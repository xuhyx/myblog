<?php 

	$contents = file_get_contents('https://www.duanwenxue.com/sanwen/suibi/');
	/*
	<li><a target="_blank" href="/article/4702918.html">依稀旧年</a></li>
	*/
	preg_match_all('/<li><a target="_blank" href="(.*?)">.*?<\/a><\/li>/s',$contents,$res);
		$url = $res[1];
		//unset($url[0]);
		//var_dump($url);
		//die;
	//getInfo('https://www.duanwenxue.com/article/4702918.html');
// 1. 首先查看指定网站是否可以抓取[判断该网页是否通过js加载,如果能找到HTML源码,说明可以抓取!]
	/*
	 * 抓取天涯论坛文章详情的函数
	 * @param 
	 * @return
	 * */
	 foreach($url as $k=>$v){
	 	//var_dump("http://bbs.tianya.cn".$v);
		getInfo("https://www.duanwenxue.com".$v);
	 }
	// getInfo("https://www.duanwenxue.com/article/4702748.html");
function getInfo($url){
	
	// 2. 将网页全部内容抓取到一个变量中 file_get_contents
	$contents = file_get_contents($url);

	// 3. 使用正则进行匹配

		//① 匹配标题
		//<span class="s_title"><span style="font-weight:400;">(.*?)</span></span>
		preg_match_all('/<h1>(.*?)<\/h1>/s',$contents,$res1);
		$title = $res1[1][0];
		$title=mb_convert_encoding($title, "UTF-8", "GBK");
		//var_dump($title);
		//die;
		
		//② 匹配作者
		//<a target="_blank" href="http://www.tianya.cn/119897688">ty_彦均</a>
		//作者:<a href="/user/660495" rel="nofollow"><img src="http://qzapp.qlogo.cn/qzapp/100285758/1D156A2AD3B7006EB14885742CB90637/100" /><span>解语花</span></a>

		preg_match_all('/<a href=".*?" rel="nofollow"><img src=".*?" \/><span>(.*?)<\/span>/',$contents,$res2);
		$author = $res2[1][0];
		$author=mb_convert_encoding($author, "UTF-8", "GBK");
		//var_dump($author);
		//die;
		
		//③ 匹配时间
		//&nbsp;时间：2018-03-07 12:28:41&nbsp;
		//<span>时间：2018-03-06 15:41:40 </span>
		preg_match_all('/<div class="text">(.*?)&nbsp;&nbsp;/s',$contents,$res3);
		$insert_at = $res3[1][0];
		$insert_at=mb_convert_encoding($insert_at, "UTF-8", "GBK");
		$insert_at=mb_substr(trim($insert_at),3);
		//var_dump($insert_at);
		//die;

		//④ 匹配点击量
		//&nbsp;点击：3227&nbsp;
		//<span>点击：25540 </span>
		//preg_match_all('/<span id="read" class="read">(.*?)<\/span>/',$contents,$res4);
		//$click_num = $res4[1][0];
		//var_dump($click_num);
		//die;

		//⑤ 匹配回复量
		//&nbsp;回复：71</span>
		//<span title="共176个回帖和204个评论">回复：380</span>
		//if(preg_match_all('/&nbsp;回复：(.*?)<\/span>/',$contents,$res5)){
		//	$reply_num = $res5[1][0];
		//}else{
		//	preg_match_all('/<span title=".*?">回复：(.*?)<\/span>/',$contents,$res5);
		//	$reply_num = $res5[1][0];
		//}

		//⑥ 匹配内容
		/*
		<div class="text">
            　　本人女，我14年离婚想要有个自己的窝，就按揭买了个房子，爸妈帮我出了2万6，其他十几万首付是我自己出的，后来每个月按揭也是我付的，每个月三千多，但是名字写的是我爸妈的名字，我还有一个弟弟，刚大学毕业，之前一直觉得写爸妈名字没什么关系，但是最近想装修这个房子，爸妈也很想住县城，很多朋友劝我把房子名字改回自己的，说以后弟弟娶老婆了，就变成弟弟的房子了，我出了钱也许还要被弟媳嫌弃寄人篱下的感觉，开始也一直想以后再说了，不去想名字的事情，但是最近前夫复婚的意思，只是也要求我把房子还成自己的，说爸妈出了多少钱补给他们，还说没哪个男人愿意娶个老婆每个月还要把娘家每个月还房贷，最近很纠结这个事情，一边怕说了爸妈不高兴，他们一心想要住县里，还在准备张罗装修的事情了的，一边又也想为了孩子和前夫复婚的，退一步说就算不复婚，也许真的未来也很难遇到愿意我为爸妈的房子还房贷的男人吧，不知道该如何抉择，也不知道该怎么和爸妈说，爸妈是也打算以后这个房子给我弟弟当婚房的，请大家帮忙给下意见<br>
        </div>

        <div class="bbs-content clearfix">
			　　前段时间收到一些乱七八糟的私信，说的那叫一个难听，我都怀疑我是不是抢了他们的老公和儿子。于是便申请删帖了，可是却收到系统通知，不给我删。好吧，那我就重新开个小楼吧，希望能摆脱一些暗中窥视我的人。哈哈哈。<br><br>　　第一层楼，贴一个我刚刚给夏老师回的小诗。哈哈哈。<br><br><br>　　夏老师是个大坏蛋<br>　　夏老师总是喜欢逗烟烟<br>　　夏老师喜欢喝茶吃橘子<br>　　夏老师总是摆出什么都知道的样子<br>　　夏老师笑起来的时候像个大灰狼<br>　　夏老师总觉得自己特强壮<br>　　夏老师讨厌别人不专心不上进<br>　　夏老师侃侃而谈的样子烟烟最喜欢<br>　　夏老师明明近视很厉害却还是天天捧书看<br>　　夏老师喜欢吃肉说希望能长胖<br>　　夏老师于是天天吃肉可还是那么瘦<br>　　夏老师看起来很端但其实脸皮很厚，私下经常说说笑笑尤其喜欢调戏女朋友<br>　　承认吧，夏老师<br>　　其实你不但是个大坏蛋<br>　　还是个小白痴<br>　　不过我喜欢这个大坏蛋小白痴<br>　　但我肯定不是大坏蛋小白痴<br>　　因为夏老师说我是大笨蛋小傻瓜<br>　　你是大坏蛋小白痴，我是大笨蛋小傻瓜<br>　　只能我嫌弃你，你不许嫌弃我<br>　　你就好好爱我吧，我也会好好爱你呀<br>　　只要我们在一起，每时每刻都是美美的<br>　　对不对呀，夏老师？<br>
		</div>
		*/
		preg_match_all('/<div class="article-content">.*?<\/div>(.*?)<p style/s',$contents,$res6);
			$details = $res6[1][0];
			$details=mb_convert_encoding($details, "UTF-8", "GBK");
		//var_dump($details);
		//die;
	// 4. 提取内容
		
		
		//var_dump($details);
		$intro=strip_tags($details);
		$intro=trim($intro);
		//die;
		$intro=mb_substr($intro,0,100);
		//$intro=ltrim($intro,'　　');
		//$intro=trim($intro);
		//var_dump($intro);
		//die;
		$keywords=$title;
		$click_num=0;
		$reply_num=0;
		$pic='img_'.rand(1,30).'.jpg';
	// 5. 将匹配内容放入数据库
	$pdo=new PDO('mysql:host=localhost;dbname=MyBlog;charset=utf8;port=3306','root','');
	
	$bool=$pdo->exec("insert into article values(null,'{$title}','{$author}','{$intro}','{$details}','{$pic}','{$keywords}','{$click_num}','{$insert_at}','{$reply_num}')");
	
	if($bool){
		echo "抓取成功";
	}else{
		echo "抓取失败";
	}
	
}
 ?>