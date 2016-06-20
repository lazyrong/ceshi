<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$left_px=get_left_px($nick);
$num=str_to_num($nick,$app_name);

if($num>20)
{
	$num=ceil($num/5);
}
switch($num)
{
	case 9:$str='一年后';$ci=1;break;
	case 8:$str='两年后';$ci=1;break;
	case 7:$str='三年后';$ci=1;break;
	case 6:$str='四年后';break;
	case 5:$str='五年后';break;
	case 4:$str='六年后';break;
	case 3:$str='七年后';break;
	case 2:$str='八年后';break;
	case 1:$str='九年后';break;
	case 0:$str='十年后';break;
	case 10:$str='半年后';$ci=1;break;
	case 11:$str='十二年后';break;
	case 12:$str='十三年后';break;
	case 13:$str='十四年后';break;
	case 14:$str='十五年后';break;
	case 15:$str='十八年后';break;
	case 16:$str='二十年后';break;
	case 17:$str='十一年后';break;
	case 18:$str='八个月后';$ci=1;break;
	case 19:$str='十个月后';$ci=1;break;
	case 20:$str='九个月后';$ci=1;break;
}
if($num<11){$f_size=55;}else{$f_size=40;}
$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,90,13,0,14,'fff');
$img=createImg($img,$str,40,190,13,0,$f_size,'fff','katong');

if($ci==1)
{
	$str='会在'.$str;
}else
{
	$str='要'.$str.'才';
}
$content='呃，刚刚在这个网站算出最爱'.$name.'的人'.$str.'出现。。。。生命中总会有无数的过客，总会有一个最爱你的人，快来算算#最爱你的人何时出现#吧~：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->最爱你的人何时出现";
$pagrams[summary] = "生命中总会有无数的过客，总会有一个最爱你的人，想不想知道你生命中最重要的人会在何时出现？马上测测吧~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info ['result_title'] = '【'.$str.'】';