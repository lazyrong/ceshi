<?
$infos=get_user_info();
$name=$infos['name'];
$nick=mb_substr($_COOKIE['v_nick'], 0, 6, 'utf-8'); 
$url=$infos['url'];
$left_px=get_left_px($nick);
$date=$_POST['date'];
$num=str_to_num($date,$app_name);

if($num>11)
{
	$num=ceil($num/9);
}
switch($num)
{
	case 0:$str='狮子座';break;
	case 1:$str='处女座';break;
	case 2:$str='天秤座'; break;
	case 3:$str='天蝎座';break;
	case 4:$str='射手座';break;
	case 5:$str='魔羯座';break;
	case 6:$str='水瓶座';break;
	case 7:$str='双鱼座';break;
	case 8:$str='白羊座';break;
	case 9:$str='金牛座';break;
	case 10:$str='双子座';break;
	case 11:$str='巨蟹座';break;
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,30,190,13,0,60,'fff','katong');


$content='经过测试，原来和我最有缘的星座是'.$str.'！想知道#你和哪个星座最有缘#吗？只要在这个网站输入你的出生年月日马上就能知道哦~~网站地址：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;

$pagrams[title] = "点击测试->你和哪个星座最有缘";
$pagrams[summary] = "输入你的出生年月日，测你和哪个星座最有缘（准确率达100%）".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$str.'】';