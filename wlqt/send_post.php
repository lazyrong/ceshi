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
	case 0:$str="自己做了一顿丰盛的晚餐，\n结果吃完食物中毒了。。。";$jl='87.33%';break;
	case 1:$str='你会遇到你生命中的Ta~';$jl='89.68%';break;
	case 2:$str="你会在丢垃圾时捡到一部\n山寨Iphone4s。。。";$jl='67.63%';break;
	case 3:$str='你最喜欢的人同性恋了。。';$jl='87.53%';break;
	case 4:$str="你会梦到你和你暗恋的人\n恋爱了。。。";$jl='97.93%';break;
	case 5:$str="你空间里的加密相册被公\n开了，照片在网上被疯狂\n转载。。。";$jl='99.53%';break;
	case 6:$str="一个非常要好的同性朋友\n向你表白了。。。";$jl='89.83%';break;
	case 7:$str="淘宝购物时，给了卖家一\n差评，结果卖家给你寄了\n一坨便便。。。";$jl='87.53%';break;
	case 8:$str="你会在大街上捡到一张\n100元的假币。。。。";$jl='96.96%';break;
	case 9:$str="你走在街上忽然被一个\n陌生人强吻。。。。。";$jl='97.53%';break;
	case 10:$str="会有一位长相很出众的\n人向你告白。。。";$jl='92.37%';break;
	case 11:$str="在路上捡到一个很厚的\n钱包，里面全是卫生纸。。";$jl='83.56%';break;
	case 12:$str="接到十几个骚扰电话。。";$jl='98.56%';break;
	case 13:$str="坐公交被偷掉钱包。。。";$jl='82.87%';break;
	case 14:$str="在网吧上网突然停电，\n黑暗中被无数人狂亲。。。";$jl='83.98%';break;
	case 15:$str="你会收到一封匿名情书。。";$jl='90.22%';break;
	case 16:$str="最近七天什么事都不会\n发生在你身上。。。";$jl='99.22%';break;
	case 17:$str="走在路上一条红色裤衩\n掉在你头上。。";$jl='98.77%';break;
	case 18:$str="早上起来发现自己在睡\n在一张陌生人床上。。。。";$jl='95.22%';break;
	case 19:$str="你藏了十几年的秘密被\n公开了。。";$jl='97.23%';break;
	case 20:$str="发现写了多年的日记本\n不见了。。。。";$jl='99.62%';break;
	case 21:$str="会丢掉200块钱。。。";$jl='97.62%';break;	
}

$img_path='./imgs/app_img.png';
$img=getImgType($img_path);
$img=createImg($img,$nick,$left_px,92,12,0,13.5,'fff');
$img=createImg($img,$str,16,150,0,0,18,'fff');
$img=createImg($img,'发生几率：'.$jl,16,250,12,0,13.5,'fff');

$content='/偷笑 OMG，我在未来七天居然会发生这种事。。。发生几率是'.$jl.'啊！！你在未来7天你会遇见什么事呢？快来测一下吧！#你未来七天会发生什么#：'.$url;
$content=$content.' ，快来测试一下吧！';
$pagrams = array();
$pagrams[content] = $content;
$pagrams[img] = $img;
$pagrams[type] = 'png';
//@账号内容会过多
$pagrams[url] = $url;
$pagrams[title] = "点击测试->你未来七天会发生什么";
$pagrams[summary] = "你想知道未来7天内会有什么事发生在你身上吗？赶快预测一下吧！~".$pagrams[url];
$rt_info=post_send2($pagrams);
$rt_info['result_title'] =  '【发生几率：'.$jl.'】';