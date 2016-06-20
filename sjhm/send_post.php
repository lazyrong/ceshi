<?
$infos=get_user_info();
$name=$infos['name'];
$nick=mb_substr($_COOKIE['v_nick'], 0, 6, 'utf-8');
$url=$infos['url'];
$left_px=get_left_px($nick);
$left_px=$left_px+25;

$sjhm=$_POST['sjhm'];
$yidong = array('134','135','136','137','138','139','147','150','151','152','157','158','159','182','183','187','188');
$liantong = array('130','131','132','145','155','156','185','186');
$dianxin = array('133','153','180','181','189');
$hmhead = substr($sjhm, 0, 3);
$yunyingshang = '中国移动';
if (in_array($hmhead, $yidong)) {
	$yunyingshang = '中国移动';
} else if(in_array($hmhead, $liantong)) {
	$yunyingshang = '中国联通';
} else if(in_array($hmhead, $dianxin)) {
	$yunyingshang = '中国电信';
} else if($hmhead == "1349") {
	$yunyingshang = '中国卫通';
}
$strRecord=array();//把出现过的字符记录在此数组中，如果记录有，则不记录，
$length = strlen($sjhm);
for($i=0;$i<$length;$i++){
    $found = 0;//默认设置为没有遇到过
    	
    foreach((array)$strRecord as $k=>$v){
    	if($sjhm[$i] == $k){
    		$strRecord[$k] += 1;//已经遇到，count + 1；
    		$found = 1;//设置已经遇到过的，标记
    		continue;//如果已经遇到，不用再循环记录数组了，继续下一个字符串比较
    	}
    }
    if(!$found){
    	$strRecord[$sjhm[$i]] = 1;//记录没有遇到过的字符串
    }
}

$num=str_to_num($sjhm,$nick,-3);
$num = intval($num);

if ($strRecord[8]) {
	if ($strRecord[8] > 3) {
		$num = $num*8*$strRecord[8];
	} else {
		$num = $num*$strRecord[8];
	}
}
if ($strRecord[9]) {
	if ($strRecord[9] >= 3) {
		$num = $num*9*$strRecord[9];
	} else {
		$num = $num*$strRecord[9];
	}
}
if ($strRecord[6]) {
	if ($strRecord[6] >= 3) {
		$num = $num*6*$strRecord[6];
	} else {
		$num = $num*$strRecord[6];
	}
}
if ($strRecord[4]) {
	if ($strRecord[4] >= 4) {
		$num = $num*4*$strRecord[4];
	} else {
		$num = $num- $num/(4 - $strRecord[4]);
	}
}

$lianghao = 'ABCD';
if ($sjhm[9] == $sjhm[10]) {
	$num += 100;
	$lianghao = 'AA';
	if ($sjhm[8] == $sjhm[9] && $sjhm[8] == $sjhm[10]) {
		$num += 300;
		$lianghao = 'AAA';
		if ($sjhm[7] == $sjhm[8] && $sjhm[7] == $sjhm[9] && $sjhm[7] == $sjhm[10]) {
			$num *= 2;
			$lianghao = 'AAAA';
			if ($sjhm[7] == $sjhm[6]) {
				$num *= 2;
				$lianghao = 'AAAAA';
				if ($sjhm[7] == $sjhm[5]) {
					$num *= 2;
					$lianghao = 'AAAAA+';
				}
			}
		} else {
			if ($sjhm[6] == $sjhm[7] ) {
				$num *= 2;
				$lianghao = 'AABBB';
			}
		}
	} else {
		if ($sjhm[7] == $sjhm[8]) {
			$num += 500;
			$lianghao = 'AABB';
			if ($sjhm[5] == $sjhm[6]) {
				$num *= 2;
				$lianghao = 'AABBCC';
				if ($sjhm[6] == $sjhm[7]) {
					$num *= 2;
					$lianghao = 'AAAABB';
				}
			}
		} else {
			if ($sjhm[6] == $sjhm[7]) {
				$num += 100;
				$lianghao = 'AABCC';
			} else {
				$lianghao = 'ABCC';
			}
		}
	}
} else {
	if ($sjhm[7] == $sjhm[9] && $sjhm[8] == $sjhm[10]){
		$num += 500;
		$lianghao = 'ABAB';
	} else if ($sjhm[7] == $sjhm[9] && $sjhm[8] != $sjhm[10]) {
		$lianghao = 'ABAC';
		 if ($sjhm[7] == $sjhm[8]) {
		 	$lianghao = 'AAAB';
		 }
	} else if ($sjhm[7] == $sjhm[10] && $sjhm[8] == $sjhm[9]) {
		$lianghao = 'ABBA';
	} else if ($sjhm[7] != $sjhm[9] && $sjhm[8] == $sjhm[10]) {
		$lianghao = 'ABAC';
	} else if ($sjhm[8] != $sjhm[9]) {
		$lianghao = 'ABC';
		$num = $num/2;
		if ($sjhm[7] != $sjhm[9]) {
			$lianghao = 'ABCD';
			$num = $num/2;
		}
	}
}


$rsjy=rand(1,33);
switch($rsjy) {
	case 1:$str='人生就是建筑历史的一块砖瓦';break;
	case 2:$str='人生就是与风浪搏斗的那双桨';break;
	case 3:$str='人生就是万绿之源的绚丽花朵';break;
	case 4:$str='人生就是清晨冲出笼子的飞鸟';break;
	case 5:$str='人生就是那耕耘未来岁月的牛';break;
	case 6:$str='人生就是帮助别人攀登的阶梯';break;
	case 7:$str='人生就是寻找那甜蜜无比的吻';break;
	case 8:$str='人生就是一桌供人享受的佳肴';break;
	case 9:$str='人生就是迈向柳暗花明的脚步';break;
	case 10:$str='人生就是蚌里艰辛孕育的珍珠';break;
	case 11:$str='人生就是雨后天空出现的彩虹';break;
	case 12:$str='人生就是血汗构筑的理想桥梁';break;
	case 13:$str='人生就是永远上紧发条的钟表';break;
	case 14:$str='人生就是打开成功大门的钥匙';break;
	case 15:$str='人生就是凝结汗水的每个脚印';break;
	case 16:$str='人生就是扬长避短的处事才能';break;
	case 17:$str='人生就是不断改进完善的过程';break;
	case 18:$str='人生就是射向各自目标的飞箭';break;
	case 19:$str='人生就是正大光明的仰望之月';break;
	case 20:$str='人生就是体现着意志的马拉松';break;
	case 21:$str='人生就是奋进可攀的万仞高山';break;
	case 22:$str='人生就是鲜花后面的暗淡背景';break;
	case 23:$str='人生就是步步走向坟墓的履历';break;
	case 24:$str='人生就是吃得饱睡得好的肥猪';break;
	case 25:$str='人生就是神鬼主宰一切的世界';break;
	case 26:$str='人生就是那件镶金饰银的外衣';break;
	case 27:$str='人生就是那一缕无孔不入的风';break;
	case 28:$str='人生就是那条坎坷曲折的山路';break;
	case 29:$str='人生就是那只断线飘摇的风筝';break;
	case 30:$str='人生就是那一杯乏味的白开水';break;
	case 31:$str='人生就是那忙忙碌碌的走马灯';break;
	case 32:$str='人生就是用一切方法攫取的手';break;
	case 33:$str='人生就是把大象吞入肚内的蛇';break;
}

$dianping=$str;
$sjhm1 = $sjhm[0].'******'.$sjhm[7].$sjhm[8].$sjhm[9].$sjhm[10];
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$sjhm1,130,135,13,0,17,'f00','katong');
$img=createImg($img,$nick,130,177,13,0,17,'f00','katong');
$img=createImg($img,$num.'元',130,217,13,0,17,'f00','katong');
$img=createImg($img,$yunyingshang,130,257,13,0,17,'f00','katong');
$img=createImg($img,$lianghao,130,293,13,0,17,'f00','katong');
$img=createImg($img,$dianping,130,335,13,0,15,'f00','katong');

$content='超准哦，原来我的手机号码能值 '.$num.'元！~~哈哈~~想知道#你的手机号码值多少钱#吗？评估地址：'.$url.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你的手机号码值多少钱";
$pagrams[summary] = "想知道你的手机号码能值多少钱吗？快来输入你的号码测一测吧！~完善的安全机制,可以不用担心号码会被别人看到~ ".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$num.'】';