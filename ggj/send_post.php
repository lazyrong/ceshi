<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>11 && !in_array($num, array(22,50)))
{
	$num=ceil($num/9);
}
if ($num == 0) {
	$num = 1;
}

require_once '../a_include/read_q_sdk.php';
$infos = OpenSDK_Tencent_SNS2::call ( 'user/get_info');
$birth_year = $infos['data']['birth_year'];
$passedyear = 0;
$nowyear = intval(date('Y', time()));
$retyear = $nowyear + $num;
$retstr = '';
$strnick = (trim($_POST ['t_nick']) == $_COOKIE['v_nick']) ? '我':trim($_POST ['t_nick']);
if (!is_numeric($birth_year) || $birth_year == 0) {
	$retstr = '经过系统分析,你还要度过'.$num.'个光棍节，将于'.$retyear.'年告别单身。';
	$content = "经过分析，{$strnick}还要度过{$num}个光棍节，将在{$retyear}年摆脱单身！谁测出来的结果和我一样咱俩就在一起吧！赶快来测测吧！测试地址：".$url;
} else {
	$passedyear = $nowyear - $birth_year;
	$retstr = '经过系统分析,你已经度过了'.$passedyear.'个光棍节，将于'.$retyear.'年告别单身。';
	$content = "经过分析，{$strnick}已经度过了{$passedyear}个光棍节，还要度过{$num}个光棍节，将在{$retyear}年摆脱单身！谁测出来的结果和我一样咱俩就在一起吧！赶快来测测吧！测试地址：".$url;
}
$img_path='./imgs/app_img.jpg';
$img=getImgType($img_path);
if ($num >= 10) {
$img=createImg($img,$num,55,180,3,0,60,'fff');
} else {
$img=createImg($img,$num,110,180,3,0,60,'fff');
}
$img=createImg($img,$retstr,20,250,16,0,14,'fff','zhiyi');

$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'jpg';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你还要过几个光棍节";
$pagrams[summary] = "光棍们！告诉你们一个噩耗！一年一度的11.11又来啦~ 想知道自己什么时候“脱光”？快来测测吧~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$retstr.'】';