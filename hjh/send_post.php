<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}
switch($num)
{
	case 0:$str='大哭';break;
	case 1:$str='大闹';break;
	case 2:$str='脱衣服';break;
	case 3:$str='唱红歌';break;
	case 4:$str='脱内衣';break;
	case 5:$str='找人打架';break;
	case 6:$str='吃老鼠';break;
	case 7:$str='大街上扣鼻屎';break;
	case 8:$str='看苍老师写真';break;
	case 9:$str='脱别人衣服';break;
	case 10:$str='裸奔';break;
	case 11:$str='裸睡';break;
	case 12:$str='睡厕所';break;
	case 13:$str='喂小孩吃奶';break;
	case 14:$str='找人吵架';break;
	case 15:$str='自言自语';break;
	case 16:$str='呼呼大睡';break;
	case 17:$str='数手指';break;
	case 18:$str='狂吻凤姐照片';break;
	case 19:$str='边扣脚边吃苹果';break;
	case 20:$str='发酒疯';break;
	case 21:$str='强吻同性朋友';break;
	case 22:$str='脱内裤';break;
	case 23:$str='见路人就发钱';break;
	case 24:$str='抢乞丐碗里的钱';break;
	case 25:$str='嗨歌';break;
	case 26:$str='抓苍蝇';break;
	case 27:$str='抓老鼠';break;
	case 28:$str='抓蟑螂';break;
	case 29:$str='不脱衣服洗澡';break;
	case 30:$str='把冰箱当厕所用';break;
	case 31:$str='大喊大叫';break;
	case 32:$str='一个劲傻笑';break;
	case 33:$str='狂笑';break;
}

$str_left=40;
$str_len=mb_strlen($str,'UTF8');
switch($str_len)
{
	case 2:$f_size=60;$str_left=65;break;
	case 3:$f_size=53;break;
	case 4:$f_size=40;break;
	case 5:$f_size=32;break;
	case 6:$f_size=27;break;
	case 7:$f_size=23;break;
}
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,$str_left,190,13,0,$f_size,'fff','katong');

$content='经过测试，原来'.$name.'喝酒后会干出这样出格的事，哈哈~~/偷笑，快来看看你#酒后会干出啥出格事#吧~：'.$url;

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->酒后会干出啥出格事";
$pagrams[summary] = "平时聚会或者活动少不了要喝两杯，你喝多了之后你会出什么样的糗态？干出啥出格的事呢？".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';