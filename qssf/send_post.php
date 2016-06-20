<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);
/*
if($num>9)
{
	$num=ceil($num/10);
	if($num==10){$num=9;}
}
// 对应默认情况
if($num==0){$num=9;}

$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=137;break;
	case 2:$left_px=127;break;
	case 3:$left_px=117;break;
	case 4:$left_px=107;break;
	case 5:$left_px=97;break;
	case 6:$left_px=87;break;
	case 7:$left_px=77;break;
	case 8:$left_px=67;break;
	case 9:$left_px=57;break;
	case 10:$left_px=47;break;
	case 11:$left_px=37;break;
	default:$left_px=25;
}

$img_path='./imgs/'.$num.'.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,70,13,0,15,'a60');
*/
$resultlist = array(
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/945310e9cbf6b03b661e/2000',
				'jieguo'=>'非汉人',
				'text'=>'某方面的习惯会跟身边的人不一样',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/0c660639a723097a5970/2000',
				'jieguo'=>'三代贫农',
				'text'=>'这辈子一定要翻身',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/e605448347c95ec8b6ac/2000',
				'jieguo'=>'读书人',
				'text'=>'黄金屋、颜如玉见多了',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/414e7e0826e76a0b21d2/2000',
				'jieguo'=>'戏子',
				'text'=>'肢体动作丰富独具表演天分',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/1a8b9d520adf11727cea/2000',
				'jieguo'=>'非人类',
				'text'=>'地球很危险滴，你懂的',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/b02387d5bf6c6e8ced0e/2000',
				'jieguo'=>'出家人',
				'text'=>'红尘滚滚，敢问您的法号？',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/2ada22462413e5d3f5ea/2000',
				'jieguo'=>'有钱人',
				'text'=>'怪不得这辈子钱不够用',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/a68140177468b715b6aa/2000',
				'jieguo'=>'武将',
				'text'=>'暴力不是解决问题的办法',
		),
		array(
				'pic'=>'http://app.qpic.cn/mblogpic/c4903673a572a8937904/2000',
				'jieguo'=>'皇宫贵族',
				'text'=>'与生俱来的优越感',
		),
);
$num = $num % count($resultlist);
$result = $resultlist[$num];
if (!$result) {
	$result = $resultlist[array_rand($resultlist)];
}
if ($num == 0) $num=1;
$img_path = './imgs/'.$num.'.png';
$img=getImgType($img_path);
$content='根据测试，'.$name.'前世的身份居然是'.$result['jieguo'].'，'.$result['text'].'。。。/偷笑。。。我正在玩#前世身份测试#！快来测测你的吧！：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
$pagrams['pic'] = $result['pic'];
//@账号内容会过多
$pagrams[url] = $url;

$pagrams[title] = "点击测试->前世身份测试";
$pagrams[summary] = "想不想知道以你前世是做什么的？是贫穷还是富贵？ 登陆后马上就能分析出你前世的身份哦~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_img'] = $result['pic'];
$rt_info['result_title'] = '【'.$result['jieguo'].'】';