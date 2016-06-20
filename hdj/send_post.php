<?
$infos=get_user_info();
//$name='@'.$_POST['t_name'];
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if($num==0){$du=0;}
if($num>0&&$num<5){$du=3+$num;}
if($num>=5&&$num<10){ $du=4+$num;}
if($num>=10&&$num<15){ $du=8+$num;}
if($num>=15&&$num<20){ $du=11+$num;}
if($num>=20&&$num<25){ $du=16+$num;}
if($num>=25&&$num<30){ $du=18+$num;}
if($num>=30&&$num<35){ $du=18+$num;}
if($num>=35&&$num<40){ $du=19+$num;}
if($num>=40&&$num<45){ $du=19+$num;}
if($num>=45&&$num<50){ $du=18+$num;}
if($num>=50&&$num<55){ $du=21+$num;}
if($num>=55&&$num<60){ $du=18+$num;}
if($num>=60&&$num<65){ $du=18+$num;}
if($num>=65&&$num<70){ $du=19+$num;}
if($num>=70&&$num<75){ $du=19+$num;}
if($num>=75&&$num<81){ $du=20+$num;}
if($num>80){$num=$num-30;$du=20+$num;}
if($du!=100){$du=$du.'.'.rand(10,99);}

$sy=str_to_num($nick,'sy5678m');
if($sy>25)
{
	$sy=ceil($sy/4);
}

switch($sy)
{
	case 1:$sy='从床上掉下来摔死。';break;
	case 2:$sy='嘘嘘至脱水而死。';break;
	case 3:$sy='偶遇凤姐，吓死。';break;
	case 4:$sy='掉沟里淹死。';break;
	case 5:$sy='从小食用三氯奶粉。';break;
	case 6:$sy='和狗熊的死因一样。';break;
	case 7:$sy='殉情。';break;
	case 8:$sy='被异性寄来的情书压死。';break;
	case 9:$sy='被屁熏死。';break;
	case 10:$sy='游泳时睡着，被淹死。';break;
	case 11:$sy='踩到便便恶心死。';break;
	case 12:$sy='被棉花砸死。';break;
	case 13:$sy='玩滴蜡烫死。';break;
	case 14:$sy='照镜子被吓死。';break;
	case 15:$sy='被群众板砖砸死。';break;
	case 16:$sy='洗澡踩到香皂摔死。';break;
	case 17:$sy='厌食饿死。';break;
	case 18:$sy='被抢劫刺死。';break;
	case 19:$sy='喝水呛死。';break;
	case 20:$sy='过马路被撞死。';break;
	case 21:$sy='游泳淹死。';break;
	case 22:$sy='被陨石砸死。';break;
	case 23:$sy='被雷劈死。';break;
	case 24:$sy='被情人抛弃自杀。';break;
	case 25:$sy='想不开自杀。';break;
}

$str='寿命长度击败了全国'.$du.'%的测试者。 预测未来的死因是：'.$sy;

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,90,66,13,0,16,'790');
$img=createImg($img,'你还能活：',35,100,13,0,16);
$img=createImg($img,$num.'岁',130,170,11,0,60,'f37','katong');
$img=createImg($img,$str,35,215,15,0,15);

$content='【寿命预测】经过测试，'.$name.' 还能活'.$num.'岁！'.$str.'想知道#你还能活多久#吗？快来测测吧！：'.$url;
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你还能活多久";
$pagrams[summary] = "你还能活多久？未来可能会怎样死的？快来测测吧~~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$str.'】';