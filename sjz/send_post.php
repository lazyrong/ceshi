<?
$infos=get_user_info();
$name=$infos['name'];
$nick=$infos['nick'];
$url=$infos['url'];
$num=str_to_num($nick,$app_name);

if($num>33)
{
	$num=ceil($num/3);
}

switch($num)
{
	case 0:$val='5元';$state='未来十年身价比较稳定。';break;
	case 1:$val='5毛';$state='正以每天1毛的速度下降。';break;
	case 2:$val='99元';$state='预计在5年后能超过100元。';break;
	case 3:$val='5000欧元';$state='最近5年仍有上升空间。';break;
	case 4:$val='300美元';$state='正以每天10美元的速度下降。';break;
	case 5:$val='150000元';$state='未来3年升降幅度非常不稳定。';break;
	case 6:$val='7000美元';$state='未来十年身价会直线上升。';break;
	case 7:$val='1元';$state='未来10年将以每天1角的速度上升。';break;
	case 8:$val='3000美元';$state='未来3年比较稳定，3年后有很大上升空间。';break;
	case 9:$val='80000美元';$state='如果能活过2012，此后将以每天10万美元的速度上升。';break;
	case 10:$val='720美元';$state='2012年开始以每天100美元速度上升。';break;
	case 11:$val='1000元';$state='未来20年比较稳定，20年后上升空间非常大。';break;
	case 12:$val='999元';$state='预计在10年后能超过1000元。';break;
	case 13:$val='300000元';$state='正在以每天10万的速度下降。';break;
	case 14:$val='880元';$state='未来十年比较稳定。';break;
	case 15:$val='75元';$state='未来15年比较稳定，此后会小幅下降。';break;
	case 16:$val='8元';$state='未来3年比较稳定，3年后小幅上升。';break;
	case 17:$val='180欧元';$state='未来5年身价会直线上升。';break;
	case 18:$val='9000欧元';$state='未来10年比较稳定，10年后会大幅下降。';break;
	case 19:$val='10欧元';$state='未来20年比较稳定。';break;
	case 20:$val='80000美元';$state='未来10年比较稳定，10年后开始下降。';break;
	case 21:$val='6000美元';$state='未来50年比较稳定。';break;
	case 22:$val='50000元';$state='未来10年下降幅度较大。';break;
	case 23:$val='4000元';$state='未来10年比较稳定。';break;
	case 24:$val='32元';$state='正在以每天1元的速度上升。';break;
	case 25:$val='350元';$state='未来3年将以每天10元的速度上升。';break;
	case 26:$val='990000元';$state='预计60年后突破100万。';break;
	case 27:$val='6000欧元';$state='正在以每天1欧元的速度下降。';break;
	case 28:$val='900欧元';$state='未来10年小幅上升。';break;
	case 29:$val='70000美元';$state='未来10年下降幅度较大。';break;
	case 30:$val='100000美元';$state='未来3年比较稳定，3年后大幅下降。';break;
	case 31:$val='9000元';$state='未来3年比较稳定，3年后大幅下降。';break;
	case 32:$val='50元';$state='未来10年比较稳定，10年后大幅上升。';break;
	case 33:$val='200美元';$state='未来5年比较稳定，5年后升降幅度较大。';break;
	
}

$img_path='./imgs/30.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,110,130,12,0,13.5,'790');
$img=createImg($img,$val,120,200,11,0,40,'f37','katong');
$img=createImg($img,$state,110,261,14,0,14,'a60');

$content='【身价计算报告】'.$name.'，你现在的身价是'.$val.'，身价状态：'.$state.'#算算你的身价#：'.$url;
$content=$content.' ，你也试试吧！';
$pagrams = array();

$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->算算你的身价";
$pagrams[summary] = "想不想知道你或者你的朋友的身价是多少？现在就有这个机会！系统将根据你的微博信息精确分析出你的身价~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【身价：'.$val.'，状态'.$state.'】';