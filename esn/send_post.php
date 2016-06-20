<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$num = str_to_num ( $nick, $app_name );

$nick_len = mb_strlen ( $nick, 'UTF8' );
$nick_size = 15;
if ($nick_len > 6) {
	$nick_size = 12;
}

if ($num > 33) {
	$num = ceil ( $num / 3 );
}
$left = 70;
$h = 145;
$size = 18;

switch ($num) {
	case 0 :
		$result = '健忘的动物园园长！';
		break;
	case 1 :
		$result = '毁人不倦的小学老师！';
		break;
	case 2 :
		$result = '地下通道卖盗版光碟的摊主！';
		$left = 50;
		break;
	case 3 :
		$result = '经常被陷害的清廉政府官员！';
		$left = 50;
		break;
	case 4 :
		$result = '十年没升过一级的公务员！';
		break;
	case 5 :
		$result = '上课打瞌睡的大学叫兽！';
		break;
	case 6 :
		$result = '看破红尘的出家人！';
		break;
	case 7 :
		$result = '满头乱发的三流画家！';
		break;
	case 8 :
		$result = '喜欢裸奔的行为艺术家！';
		break;
	case 9 :
		$result = '动作缓慢的太极拳宗师！';
		break;
	case 10 :
		$result = '只会唱一首歌的酒吧歌手！';
		break;
	case 11 :
		$result = '专帮人带孩子的保姆！';
		break;
	case 12 :
		$result = '天天在街上晃悠的无业游民！';
		$left = 50;
		break;
	case 13 :
		$result = '斤斤计较的食品店老板！';
		break;
	case 14 :
		$result = '火车站的黄牛票票贩子！';
		break;
	case 15 :
		$result = '多项市级建筑项目的总包工头！';
		$left = 50;
		break;
	case 16 :
		$result = '天天在家洗衣做饭带孩子的家庭“主妇”！';
		$left = 50;
		$h = 135;
		break;
	case 17 :
		$result = '多愁善感的三流湿人！';
		break;
	case 18 :
		$result = '卖假药的江湖神棍！';
		break;
	case 19 :
		$result = '经常打针扎错地方的医生！';
		break;
	case 20 :
		$result = '经常被坐霸王车的的士司机！';
		$left = 50;
		break;
	case 21 :
		$result = '经常被犯人揍的警察！';
		break;
	case 22 :
		$result = '经常跟超速车主赛车的交通警察！';
		$left = 50;
		$h = 135;
		break;
	case 23 :
		$result = '拍爱情动作片的导演！';
		break;
	case 24 :
		$result = '十根手指都戴满戒指的暴发户！';
		$left = 50;
		break;
	case 25 :
		$result = '经常歪曲事实的狗仔队！';
		break;
	case 26 :
		$result = '拍人体艺术的摄影师！';
		break;
	case 27 :
		$result = '精神病医生兼患者！';
		break;
	case 28 :
		$result = '有精神分裂的心理医生！';
		break;
	case 29 :
		$result = '起点网写yy小说的作者！';
		break;
	case 30 :
		$result = '离过七次婚的情感专家！';
		break;
	case 31 :
		$result = '吃馒头比赛职业选手！';
		break;
	case 32 :
		$result = '戴着啤酒瓶底眼镜的科学家！';
		$left = 50;
		break;
	case 33 :
		$result = '上门卖保险的业务员！';
		break;
}
$img_path = './imgs/app_img.png';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, 170, 60, 13, 0, $nick_size, 'f90' );
$img = createImg ( $img, $result, $left, $h, 13, 0, $size, 'fff', 'katong' );

$content = '冥冥之中，自有天数，二十年后的' . $name . '居然是' . $result . '真是不敢相信啊！#二十年后的你#又在做什么？从事一份什么工作？快来测测吧！：' . $url;

$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
// @账号内容会过多
$pagrams [url] = $url;
$pagrams [title] = "点击测试->二十年后的你";
$pagrams [summary] = "冥冥之中，自有天数，该来的会来，该去的会去.....二十年后，你又在做什么，从事一份什么样的工作？" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $result . '】';