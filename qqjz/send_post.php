<?
$infos=get_user_info();
$name=$_COOKIE['v_name'];
$nick=$_COOKIE['v_nick'];
$url=$infos['url'];

$left_px=get_left_px($nick);
$left_px=$left_px+25;

$qq=$_POST['qqhm'];
$nick=$_POST['t_nick'];

if(mb_strlen($qq)==10){$qqjz=rand(200,900);}
if(mb_strlen($qq)==9){$qqjz=rand(2000,5000);}
if(mb_strlen($qq)==8){$qqjz=rand(7000,9000);}
if(mb_strlen($qq)==7){$qqjz=rand(10000,30000);}
if(mb_strlen($qq)==6){$qqjz=rand(30000,60000);}
if(mb_strlen($qq)==5){$qqjz=rand(600000,90000);}

$meili_num=rand(1,3);
if($meili_num==1){$meili='★★☆☆☆';}
if($meili_num==2){$meili='★★★☆☆';}
if($meili_num==3){$meili='★★★★☆';}
if($meili_num==4){$meili='★★★★★';}


$days=rand(1300,2000).'天';
$jiazhi=$qqjz.'人民币';

$dp_num=rand(1,8);
switch($dp_num)
{
	case 1:$str='排除万难，有贵人相助！';break;
	case 2:$str='性格坦率，无过多心机！';break;
	case 3:$str='灾难可避，逢凶化吉！';break;
	case 4:$str='能获众望，成就大业！';break;
	case 5:$str='贯彻力行，始可成功！';break;
	case 6:$str='责任心重，可担大任！';break;
	case 7:$str='继续努力，前途无限！';break;
	case 8:$str='做事凭直觉，预感力强！';break;
}

$dianping=$str;

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$qq,128,186,13,0,20,'19f','katong');
$img=createImg($img,$nick,128,217,13,0,17,'19f','katong');
$img=createImg($img,$days,128,247,13,0,17,'19f','katong');
$img=createImg($img,$jiazhi,128,277,13,0,17,'19f','katong');
$img=createImg($img,$meili,128,307,13,0,17,'19f','katong');
$img=createImg($img,$dianping,128,337,13,0,17,'19f','katong');

$content='OMG，原来我的QQ号码能值 '.$jiazhi.' !~~哈哈~~！想知道#你的QQ号码值多少钱#吗？鉴定地址：'.$url.' ，你也试试吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你的QQ号码值多少钱";
$pagrams[summary] = "想知道你的QQ号码能值多少钱吗？快来输入你的QQ号码测一测吧~ ".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【'.$jiazhi.'】';