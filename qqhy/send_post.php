<?
// $infos=get_user_info();
// $name=$_COOKIE['v_name'];
 $nick=$_POST['my_qq0'];
 $url='http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$left_px=get_left_px($nick);
$left_px=$left_px+25;

$name=$_POST['my_qq0'];
$num1=substr($_POST['my_qq1'],0,1);
$num2=substr($_POST['my_qq2'],0,1);
$num3=substr($_POST['my_qq3'],0,1);

switch($num1)
{
	case 1:$str1='在学校';break;
	case 2:$str1='在女厕所';break;
	case 3:$str1='在秦朝';break;
	case 4:$str1='在赌场';break;
	case 5:$str1='在监狱';break;
	case 6:$str1='在天安门广场';break;
	case 7:$str1='在李刚家';break;
	case 8:$str1='在高速公路';break;
	case 9:$str1='在网吧';break;
	case 0:$str1='在女厕所';break;
}
switch($num2)
{
	case 1:$str2='挖地道';break;
	case 2:$str2='跳楼';break;
	case 3:$str2='梦游';break;
	case 4:$str2='洗澡';break;
	case 5:$str2='发呆';break;
	case 6:$str2='看海绵宝宝';break;
	case 7:$str2='剪指甲';break;
	case 8:$str2='上网';break;
	case 9:$str2='玩泥巴';break;
	case 0:$str2='自残';break;
}
switch($num2)
{
	case 1:$str3='被判死刑了';break;
	case 2:$str3='被上帝带走了';break;
	case 3:$str3='被钱砸了';break;
	case 4:$str3='被警察击毙了';break;
	case 5:$str3='被虐死了';break;
	case 6:$str3='被吓得想尿尿';break;
	case 7:$str3='被自行车撞飞了';break;
	case 8:$str3='被人妖非礼了';break;
	case 9:$str3='被洪水冲走了';break;
	case 0:$str3='被表扬了';break;
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,80,13,0,14,'790');
$img=createImg($img,$str1,100,180,13,0,20,'19f','katong');
$img=createImg($img,$str2,100,225,13,0,20,'19f','katong');
$img=createImg($img,$str3,100,270,13,0,20,'19f','katong');

$content='哈哈~ 真是逗死我了，原来我的QQ号码翻译成汉语是这个意思啊。。快来看看#你的QQ号码是什么含义#吧~~~网址：'.$url;
$content=$content.' ，你也试试吧！';

$pagrams = array();
$pagrams['content'] = $content;
$pagrams['img'] = $img;
$pagrams['type'] = 'png';
//@账号内容会过多
$pagrams['url'] = $url;
$pagrams['title'] = "点击测试->测测你的QQ号码是什么含义";
$pagrams['summary'] = "想知道你的QQ号码隐藏着什么内容吗？还等什么？？让我们来帮你分析你QQ号码的含义吧！ ".$pagrams['url'];
$rt_info=post_send2($pagrams);
// $rt_info['result_title'] =  '【'.$str1.' '.$str2.' '.$str3.'】';
$rt_info['pagram'] = $pagrams;
$rt_info['result_img'] = $img;
imagepng($rt_info['result_img'],'1.png');
$rt_info['result_title'] =  '【'.$str1.' '.$str2.' '.$str3.'】';