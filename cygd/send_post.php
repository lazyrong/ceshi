<?
$infos = get_user_info ();
$name = $infos ['name'];
$nick = $infos ['nick'];
$url = $infos ['url'];
$num = str_to_num ( $nick, $app_name );
$left_px = get_left_px ( $nick );
$left_px += 25;

if ($num > 10) {
	$num = ceil ( $num / 10 );
}

$sex = get_sex ();

$str_l = 80;
if ($sex == '2') // 如果为女
{
	switch ($num) {
		case 0 :
			$str = '温柔娇俏的太子妃';
			$str_l = 69;
			break;
		case 1 :
			$str = '倾国倾城的绝世美人';
			$str_l = 58;
			break;
		case 2 :
			$str = '疾恶如仇的小侠女';
			$str_l = 69;
			break;
		case 3 :
			$str = '心狠手辣的女巫师';
			$str_l = 69;
			break;
		case 4 :
			$str = '救死扶伤的医女';
			break;
		case 5 :
			$str = '刁蛮任性的公主';
			break;
		case 6 :
			$str = '卖艺不卖身的妓女';
			$str_l = 69;
			break;
		case 7 :
			$str = '闻名天下的才女';
			break;
		case 8 :
			$str = '弱不禁风的千金小姐';
			$str_l = 58;
			break;
		case 9 :
			$str = '武术高强的女杀手';
			break;
		case 10 :
			$str = '喜欢偷吃的婢女';
			break;
	}
} else {
	switch ($num) {
		case 0 :
			$str = '家财万贯的地主';
			break;
		case 1 :
			$str = '一统天下的皇帝';
			break;
		case 2 :
			$str = '呆板的穷酸书生';
			break;
		case 3 :
			$str = '吃喝玩乐的纨绔子弟';
			$str_l = 58;
			break;
		case 4 :
			$str = '风流的花花公子';
			break;
		case 5 :
			$str = '行侠仗义的武林高手';
			$str_l = 58;
			break;
		case 6 :
			$str = '爱美人不爱江山的太子';
			$str_l = 46;
			break;
		case 7 :
			$str = '闲云野鹤的道士';
			break;
		case 8 :
			$str = '战无不胜的将军';
			break;
		case 9 :
			$str = '为民除害的侠士';
			break;
		case 10 :
			$str = '满腹才华的诗人';
			break;
	}
}

$img_path = './imgs/app_img.png';
$img = getImgType ( $img_path );
$img = createImg ( $img, $nick, $left_px, 100, 13, 0, 14, '000' );
$img = createImg ( $img, $str, $str_l, 160, 13, 0, 20, '000', 'katong' );

$content = 'OMG，刚刚在这个网站测出' . $name . '穿越到古代后的身份居然是【' . $str . '】~哈哈~~/偷笑~~~快来看看你#穿越古代后的身份#吧，网站地址：' . $url;
$content = $content . ' ，你也试试吧！';
$pagrams = array ();
$pagrams [content] = $content;
$pagrams [img] = $img;
$pagrams [type] = 'png';
$pagrams [url] = $url;
$pagrams [title] = "点击测试->穿越古代后的身份";
$pagrams [summary] = "如果某一天，你突然穿越到了古代，那你穿越后的身份会是什么呢？穷酸书生还是纨绔子弟？快来测测吧~" . $pagrams [url];
$rt_info = post_send2 ( $pagrams );
$rt_info ['result_title'] = '【' . $str . '】';