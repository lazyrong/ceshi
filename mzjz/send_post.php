<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name,-4);
$num = intval($num);

$left_px=get_left_px($nick) + 10;
$modvale=$num % 4;
$strunit = "元";
switch ($modvale) {
	case 1:
	$strunit = "美元";
	break;
	case 2:
	$strunit = "日元";
	break;
	case 3:
	$strunit = "英镑";
	break;
	
	default:
		;
	break;
}
if ($num <10) {
	$num = pow($num, 6);
} if ($num < 100) {
	$num = pow($num, 3);
} if ($num < 1000) {
	$num = pow($num, 2);
} if ($num < 2000) {
	$num = pow($num, 2);
} if ($num < 3000) {
	$num = pow($num, 2);
} else {
	$num = $num*100;
}
$str = '市值:'.$num.$strunit;
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,200,13,0,20,'a60');
$img=createImg($img,$str,35,250,13,0,25,'f37');

$content='哇！'.$name.'的名字价值不菲 !~~哈哈~~！想知道#你的名字值多少钱#吗？可以去测一下:'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();

$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你的名字值多少钱？ ";
$pagrams[summary] = "想不想知道你的名字值多少钱？现在就有这个机会！快来输入你的名字测一测吧~ ~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';