<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

$sex=get_sex();

if($sex=='1')
{
	$sex_path='./imgs/boy/';
	if($num>33)
	{
		$num=ceil($num/3);
	}
	if($num==0){$num=1;}
	// 临时对应33 苏有朋没有图片的问题
	if($num==33){$num=32;}
	switch($num)
	{
		case 1:$star_name='陈柏森';break;
		case 2:$star_name='陈楚生';break;
		case 3:$star_name='陈浩民';break;
		case 4:$star_name='方大同';break;
		case 5:$star_name='付辛博';break;
		case 6:$star_name='古巨基';break;
		case 7:$star_name='古天乐';break;
		case 8:$star_name='郭品超';break;
		case 9:$star_name='海明威';break;
		case 10:$star_name='韩寒';break;
		case 11:$star_name='胡歌';break;
		case 12:$star_name='黄晓明';break;
		case 13:$star_name='金城武';break;
		case 14:$star_name='立威廉';break;
		case 15:$star_name='林俊杰';break;
		case 16:$star_name='林志颖';break;
		case 17:$star_name='刘德华';break;
		case 18:$star_name='刘畊宏';break;
		case 19:$star_name='罗志祥';break;
		case 20:$star_name='潘玮柏';break;
		case 21:$star_name='苏醒';break;
		case 22:$star_name='苏有朋';break;
		case 23:$star_name='孙红雷';break;
		case 24:$star_name='佟大为';break;
		case 25:$star_name='王力宏';break;
		case 26:$star_name='王铮亮';break;
		case 27:$star_name='文章';break;
		case 28:$star_name='吴彦祖';break;
		case 29:$star_name='薛之谦';break;
		case 30:$star_name='炎亚纶';break;
		case 31:$star_name='张杰';break;
		case 32:$star_name='周杰伦';break;
		case 33:$star_name='苏有朋';break;
	}
	
}
else
{
	$sex_path='./imgs/girl/';
	if($num>41)
	{
		$num=ceil($num/3);
	}
	if($num==0){$num=1;}
	switch($num)
	{
		case 1:$star_name='SELINA';break;
		case 2:$star_name='安以轩';break;
		case 3:$star_name='蔡卓妍';break;
		case 4:$star_name='陈好';break;
		case 5:$star_name='程媛媛';break;
		case 6:$star_name='大S';break;
		case 7:$star_name='范冰冰';break;
		case 8:$star_name='范玮琪';break;
		case 9:$star_name='方琼';break;
		case 10:$star_name='郭晓婷';break;
		case 11:$star_name='韩雪';break;
		case 12:$star_name='何洁';break;
		case 13:$star_name='侯佩岑';break;
		case 14:$star_name='贾静雯';break;
		case 15:$star_name='金沙';break;
		case 16:$star_name='李冰冰';break;
		case 17:$star_name='李小璐';break;
		case 18:$star_name='林依晨';break;
		case 19:$star_name='林志玲';break;
		case 20:$star_name='刘诗诗';break;
		case 21:$star_name='刘亦菲';break;
		case 22:$star_name='萨顶顶';break;
		case 23:$star_name='舒淇';break;
		case 24:$star_name='孙燕姿';break;
		case 25:$star_name='汤唯';break;
		case 26:$star_name='唐嫣';break;
		case 27:$star_name='王心凌';break;
		case 28:$star_name='吴昕';break;
		case 29:$star_name='萧亚轩';break;
		case 30:$star_name='小S';break;
		case 31:$star_name='谢娜';break;
		case 32:$star_name='徐若瑄';break;
		case 33:$star_name='杨幂';break;
		case 34:$star_name='袁咏琳';break;
		case 35:$star_name='张柏芝';break;
		case 36:$star_name='张韶涵';break;
		case 37:$star_name='章子怡';break;
		case 38:$star_name='阿娇';break;
		case 39:$star_name='周冬雨';break;
		case 40:$star_name='周迅';break;
		case 41:$star_name='凤姐';break;
	}
}

$nick_len=mb_strlen($nick,'UTF8');
switch($nick_len)
{
	case 1:$left_px=84;break;
	case 2:$left_px=75;break;
	case 3:$left_px=65;break;
	case 4:$left_px=50;break;
	case 5:$left_px=40;break;
	case 6:$left_px=25;break;
	case 7:$left_px=10;break;
	default:$left_px=10;
}

$img_path=$sex_path.$num.'.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,280,11,0,20,'19f','katong');

if($sex=='1')
{
	$content='原来在中国100大帅哥明星中和'.$name.'最配的居然是'.$star_name.'！看来'.$name.'还真是艳福不浅啊~哈哈~~！想知道自己在中国100大帅哥美女明星中和谁最配吗？~快来测测吧！！#你与哪个明星最配#：'.$url;
}
else
{
	$content='原来在中国100大美女明星中和'.$name.'最配的居然是'.$star_name.'！看来'.$name.'还真是艳福不浅啊~哈哈~~！想知道自己在中国100大帅哥美女明星中和谁最配吗？~快来测测吧！！#你与哪个明星最配#：'.$url;
}

$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你与哪个明星最配";
$pagrams[summary] = "中国100大帅哥美女明星你和谁最配？快来测测吧~！".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$star_name.'】';